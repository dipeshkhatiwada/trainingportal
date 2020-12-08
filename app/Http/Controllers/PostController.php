<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        $data['category'] = Category::pluck('title','id');
        return view('admin.post.create',compact('data'));
    }
}
