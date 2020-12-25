<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $data['menu'] = Category::select('title','slug','id')
            ->orderBy('rank','ASC')
            ->limit(5)
            ->get();

//        dd($data);
        return view('home.index',compact('data'));
    }

    public function cat(){
        $data['menu'] = Category::select('title','slug','id')
            ->orderBy('rank','ASC')
            ->limit(5)
            ->get();
    }
}
