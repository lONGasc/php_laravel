<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
class LoginController extends Controller
{

    public function index(){
        return view("backend.login.login");
    }
    public function login(){
        $email = request('email');
        $password = request('password');
       
        if(Auth::attempt(["email"=>$email,"password"=>$password]))
        return redirect(url("admin/user"));
           
    else 
        return redirect(url("login1"));
    

  
    }
    public function logout(){

   Auth::logout();
           return redirect(url("login1"));
    
    }
}
