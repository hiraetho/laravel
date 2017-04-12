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

    public function index(){
        return view('index');
    }

    public function loginSuccess(){
        return view('loginSuccess');
    }
}
