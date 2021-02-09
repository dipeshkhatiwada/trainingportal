<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Pipeline;
use Illuminate\Support\Str;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AdminController extends Controller
{

    public function store(Request $request){
        $api_token = Str::random(30);
        if (auth()->attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ],$request->has('remember')
        )){
            $user=User::where('email',$request->input('email'))->first();
            User::where('id',$user->id)->update(['api_token'=>$api_token]);
            return ['message'=>'Login Success . API Token is: '.$api_token,'status'=>true];
//            redirect to admin dashboard
        }else{
            return ['message'=>'Username or Password is Incorrect','status'=>false];
        }

    }
    public function logout(Request $request){
        $user = User::where('api_token',$request->api_token)->get();
        if (count($user)) {
            User::where('id',$user[0]->id)->update(['api_token'=>null]);
            return ['message'=>'User Logged out','status'=>true];

        }else{
            return ['message'=>'Invalid Token','status'=>true];

        }
    }

    public function dashboard (){
        $data = [];
        $data['cat_count'] = Category::count();
        $data['sub_cat_count'] = Subcategory::count();
        $data['tag_count'] = Tag::count();
        $data['post_count'] = Post::where('status',1)->count();
        return view('admin.dashboard',compact('data'));

    }
}
