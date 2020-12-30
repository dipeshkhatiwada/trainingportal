<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['contact']=Contact::all();
//        dd($data['categories']);
        return view('admin.contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['contact'] = Contact::find($id);
//        $data['contact']->status = 1;
//        $data['contact']->save();
        $data['contact']->update(['status'=>'1']);
        if($data['contact'] ){
            return view('admin.contact.show',compact('data'));

        }else{
            $request->session()->flash('error_message','Post not found');
            return redirect()->route('admin.contact.index');
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
        $data = Category::find($id);
        if ($data){
            return view('admin.category.edit',compact('data'));
        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.category.index');
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
        $data = Category::find($id);
        if ($data->update($request->all())){
            $request->session()->flash('success_message','Category updated Successfully  ! ');
            return redirect()->route('admin.category.index');
        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.category.index');
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
        $cat = Category::find($id);
        if ($cat){
            try {
                $cat->delete();
            }catch (\Exception $e){
                $request->session()->flash('error_message','Category already have subcategory  ! ');
                return redirect()->route('admin.category.index');
            }
            $request->session()->flash('success_message','Category deleted Successfully  ! ');
            return redirect()->route('admin.category.index');

        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.category.create');
        }
    }
}
