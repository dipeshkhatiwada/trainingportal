<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['categories']=Category::all();
//        dd($data['categories']);
        return json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 200;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Category::create($request->all());
        if ($data){
            return ['message'=>'Categpry save succcess','status'=>200];

        }else{
            return ['message'=>'Categpry cannot be save','status'=>false];
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
            return json_encode($data);
        }else{
            return ['message'=>'Something went wrong  ! ','status'=>false];
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
            return ['message'=>'Category updated Successfully  !','status'=>200];
        }else{
            return ['message'=>'Something went wrong  ! ','status'=>false];
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
                return ['message'=>'Category already have subcategory  !','status'=>false];
            }
            return ['message'=>'Category deleted Successfully  !','status'=>200];

        }else{
            return ['message'=>'Something went wrong  !','status'=>false];
        }
    }
}
