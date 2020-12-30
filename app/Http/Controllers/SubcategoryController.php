<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['subcategories'] = Subcategory::all();
        return view('admin.subcategory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::pluck('title','id');
        return view('admin.subcategory.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['slug'=>Str::slug(\request()->input('title'))]);
        dd($request->all());

        if ($request->has('photo')){
            $file = $request->file('photo');
            $file_name = uniqid().'_'.$file->getClientOriginalName();
            //            saving inside public folder
            $file->move('images/subcategory/',$file_name);
            //            adding to request to save in database
            $request->request->add(['image'=>'images/subcategory/'.$file_name]);
        }
        $subcat = Subcategory::create($request->all());
        if ($subcat){
            $request->session()->flash('success_message','Subcategory created');
            return redirect()->route('admin.subcategory.index');

        }else{
            $request->session()->flash('error_message','Subcategory creation failed');
            return redirect()->route('admin.subcategory.create');
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
        $data['subcategory'] = Subcategory::find($id);
        if($data['subcategory'] ){
            $data['category'] = Category::pluck('title','id');
            return view('admin.subcategory.edit',compact('data'));

        }else{
            $request->session()->flash('error_message','Subcategory not found');
            return redirect()->route('admin.subcategory.index');
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
        $subcat = Subcategory::find($id);
        if ($subcat->update($request->all())){
            $request->session()->flash('success_message','Subcategory updated');
            return redirect()->route('admin.subcategory.index');

        }else{
            $request->session()->flash('error_message','Subcategory updation failed');
            return redirect()->route('admin.subcategory.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function get_by_category_id(Request $request){
        $subcat = Subcategory::where('category_id',$request->input('category_id'))->pluck('title','id');
        $response = "";
        $response .= "<option value=''> Choose SubCategory</option>";
        foreach ($subcat as $id=>$title){
            $response .= "<option value='$id'>$title</option>";

        }
        return $response;
    }
}
