<?php

namespace App\Http\Controllers;

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
        return view('home.index',compact('data'));
    }
}
