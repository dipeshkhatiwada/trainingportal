<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = [];
        $data['posts'] = Post::all();
        return view('admin.post.index',compact('data'));
    }

    public function create(Request $request){
        $data['category'] = Category::pluck('title','id');
        return view('admin.post.create',compact('data'));
    }
    public function store(Request $request)
    {
        $request->request->add(['slug'=>Str::slug(\request()->input('title'))]);
        if ($request->has('photo')){
            $file = $request->file('photo');
            $file_name = uniqid().'_'.$file->getClientOriginalName();
            //            saving inside public folder
            $file->move('images/post/',$file_name);
            //            adding to request to save in database
            $request->request->add(['image'=>'images/post/'.$file_name]);
        }
        $post = Post::create($request->all());
        if ($post){
            $request->session()->flash('success_message','POst created');
            return redirect()->route('admin.post.index');
        }else{
            $request->session()->flash('error_message','POst creation failed');
            return redirect()->route('admin.post.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data['post'] = Post::find($id);
        if($data['post'] ){
            return view('admin.post.show',compact('data'));

        }else{
            $request->session()->flash('error_message','Post not found');
            return redirect()->route('admin.post.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data['post'] = Post::find($id);
        if($data['post'] ){
            $data['category'] = Category::pluck('title','id');
            $data['subcategory'] = Subcategory::where('category_id',$data['post']->category_id)->pluck('title','id');
            return view('admin.post.edit',compact('data'));

        }else{
            $request->session()->flash('error_message','Post not found');
            return redirect()->route('admin.post.index');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $request->request->add(['slug'=>Str::slug(\request()->input('title'))]);
        if ($request->has('photo')){
            $file = $request->file('photo');
            $file_name = uniqid().'_'.$file->getClientOriginalName();
            //            saving inside public folder
            $file->move('images/post/',$file_name);
            //            adding to request to save in database
            $request->request->add(['image'=>'images/post/'.$file_name]);
//            remove image from public folder
            if(file_exists($post->image)){
                unlink($post->image);
            }

        }

        if ($post->update($request->all())){
            $request->session()->flash('success_message','POst updated');
            return redirect()->route('admin.post.index');

        }else{
            $request->session()->flash('error_message','POst updation failed');
            return redirect()->route('admin.post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::find($id);
        if(file_exists($post->image)){
            unlink($post->image);
        }
        if ($post->delete()){
            $request->session()->flash('success_message','POst deleted');
            return redirect()->route('admin.post.index');
        }else{
            $request->session()->flash('error_message','POst updation failed');
            return redirect()->route('admin.post.index');
        }

    }
}
