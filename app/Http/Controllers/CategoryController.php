<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(User::checkPermission('list_category')){
            $data=[];
            $data['categories']=Category::all();
//        dd($data['categories']);
            return view('admin.category.index',compact('data'));
        }else{
            return  view('admin.error');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(User::checkPermission('create_category')){
            return view('admin.category.create');
        }else{
            return  view('admin.error');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = Category::create($request->all());
        if ($data){
            $request->session()->flash('success_message','Category created Successfully  ! ');
            return redirect()->route('admin.category.index');

        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.category.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
