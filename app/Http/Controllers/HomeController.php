<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $data = [];
        $data['top_news'] = Post::select('title','slug','image')
                            ->where('main_news',1)
                            ->limit(5)
                            ->orderBy('rank','ASC')
                            ->get();
        $data['category'] = Category::select('title','slug','id')
                            ->orderBy('rank','ASC')
                            ->limit(2)
                            ->get();

        $data['first_news'] = $data['category'][0]->posts()->get();
        $data['second_news'] = $data['category'][1]->posts()->get();

        $data['latest_news'] = Post::where('status',1)
                                ->orderBy('created_at','DESC')
                                ->limit(3)
                                ->get();
        $data['most_view'] = Post::where('status',1)
                            ->orderBy('view','DESC')
                            ->limit(3)
                            ->get();

//        $data['menu'] = Category::select('title','slug','id')
//            ->orderBy('rank','ASC')
//            ->limit(5)
//            ->get();

//        dd($data);
        return view('home.index',compact('data'));
    }

    public function detail($slug){
        $data=[];
//        $data['menu'] = Category::select('title','slug','id')
//            ->orderBy('rank','ASC')
//            ->limit(5)
//            ->get();
        $data['category'] = Category::select('title','slug','id')
            ->orderBy('rank','ASC')
            ->limit(5)
            ->get();
        $data['news'] = Post::where('slug',$slug)
//            ->select('title','slug','id','description','image')
            ->first();
//        increasing view count for most viewed post

        $data['news']->update(['view'=>$data['news']->view+1]);
        $data['tags'] = $data['news']->tags()->get();

        $data['related_news'] = Post::where('category_id',$data['news']->category_id)
                        ->where('id','!=',$data['news']->id)
                        ->limit(5)
                        ->get();
//        dd($data);
//        increasing view of the post
        return view('home.detail',compact('data'));
    }
    public function category($slug){
        $data=[];
//        $data['menu'] = Category::select('title','slug','id')
//            ->orderBy('rank','ASC')
//            ->limit(5)
//            ->get();

        $data['category'] = Category::where('slug',$slug)
//            ->select('title','slug','id','description','image')
            ->first();
        $data['news'] = $data['category']->posts()->paginate(3);

//        dd($data);

        return view('home.category',compact('data'));
    }
    public function subcategory($cat_slug,$sub_slug){
        $data=[];


        $data['category'] = Category::where('slug',$cat_slug)
//            ->select('title','slug','id','description','image')
            ->first();
        $data['news'] = $data['category']->posts()->paginate(3);

//        dd($data);

        return view('home.category',compact('data'));
    }
    public function contact(){
        $data=[];
        return view('home.contact',compact('data'));
    }
    public function contactStore(Request $request){
        $contact = Contact::create($request->all());
        if ($contact){
            $request->session()->flash('success_message','Message  created');
            return redirect()->route('home.contact');
        }else{
            $request->session()->flash('error_message','Message creation failed');
            return redirect()->route('home.contact');
        }
    }

}
