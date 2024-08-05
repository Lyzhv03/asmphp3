<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    //Login
    public function postLogin(Request $request){
        $data = $request->only(['email','password']);
        //Kiem tra dang nhap
        if(Auth::attempt($data)){//ktra xem co trùng email,pass tren db ko
            return redirect()->route('admin.db');//dang nhap thanh cong
        } else{
            return redirect()->back()->with('errorLogin','Email hoặc Password không đúng !!!');
        }

    }
    //Register
    public function postRegister(RegisterPostRequest $request){
        $data = $request->except('avatar');
        $data['avatar'] = '';
        if($request->hasFile('avatar')){
            $path_image = $request->file('avatar')->store('images');
            $data['avatar'] = $path_image;
        }
        User::query()->create($data);
        return redirect()->route('login')->with('message','Register successfully !');
    }

    //Logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
