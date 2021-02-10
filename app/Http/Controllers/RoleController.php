<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['roles']=Role::all();
//        dd($data['categories']);
        return view('admin.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
//        dd($request);
        $role = Role::find($id);
//        $role->permissions()->delete();
        $role->permissions()->sync($request->input('permission_id'));
        if ($role){
            $request->session()->flash('success_message','Permission assigned Successfully  ! ');
            return redirect()->back();

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
    public function assign(Request $request,$id)
    {
        $data['role'] = Role::find($id);
        $data['perm'] = $data['role']->permissions()->pluck('permission_id')->toArray();
        if ($data['role']){
            $data['permission'] = Permission::pluck('name','id');
            return view('admin.role.assign',compact('data'));
        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.role.index');
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
