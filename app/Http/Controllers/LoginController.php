<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function submit_login(Request $request){
        // dd(Hash::make('admin@22'));
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
          return  redirect('add-blog');
        } else{
            return back()->with('error','Email or password is worng please try again');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
