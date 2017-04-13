<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\Guard;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only'=>['loginSuccess']]);
    }

    public function index(Request $request){
        $request->url();
        return view('index');
    }

    public function loginSuccess(){
        return view('loginSuccess');
    }

    public function test(){
        dump(Illuminate\Contracts\Http\Kernel::class);
        dump(gettype(Request::class));
//        $result = 1;
//        $result++;
//
//        $one = function() use ($result){
//            dump($result);
//        };
//
//
//        $two = function() use (&$result){
//            dump($result);
//        };
////        $one();
////        $two();
////echo gettype($result);die;
//        print_r($one);
//        print_r($two);die;
    }
}
