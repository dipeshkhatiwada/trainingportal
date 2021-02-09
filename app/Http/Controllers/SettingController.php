<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($data = Setting::first()){
            return view('admin.setting.edit',compact('data'));
        }else{
            return view('admin.setting.create');
        }
    }

    public function store(Request $request)
    {
        if ($request->has('photo')){
            $file = $request->file('photo');
            $file_name = uniqid().'_'.$file->getClientOriginalName();
            //            saving inside public folder
            $file->move('images/post/',$file_name);
            //            adding to request to save in database
            $request->request->add(['image'=>'images/post/'.$file_name]);
        }
        $data = Setting::create($request->all());
        if ($data){
            $request->session()->flash('success_message','Setting created Successfully  ! ');
            return redirect()->route('admin.setting');

        }else{
            $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('admin.setting');
        }
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);

        if ($request->has('photo')){
            $file = $request->file('photo');
            $file_name = uniqid().'_'.$file->getClientOriginalName();
            //            saving inside public folder
            $file->move('images/post/',$file_name);
            //            adding to request to save in database
            $request->request->add(['image'=>'images/post/'.$file_name]);
//            remove image from public folder
            if(file_exists($setting->image)){
                unlink($setting->image);
            }

        }

        if ($setting->update($request->all())){
            $request->session()->flash('success_message','Setting updated');
            return redirect()->route('admin.setting');

        }else{
            $request->session()->flash('error_message','Setting updation failed');
            return redirect()->route('admin.setting');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
