<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        //في حال ان المستخدم سجل دخول من قبل
        // لكن دخل الى رابط تسجيل الدخول 
        // فنحن رح ننقله الى صفحة الترحيب لانه مسجل من قبل
        // if(Auth::check()){
        //     return Redirect()->to('dashboard');
        // }
        // else{  
            return view('login');
       // }
      
    }
    public function login(Request $request){
       $validate= request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if($validate){
            //request جلب البيانات التي في 
            $info=$request->only('email','password');
            $arr= $info;
           
            //Auth فحص وتححق من البيانات 
            //نحتاج الى تعديل ملف المودل المستخدم
            if(Auth::attempt($info)){

                return Redirect()->to('home');
            }
            return redirect()->to('login');
        }
    }
    public function lyout(){
        Auth::logout();
        return Redirect()->to('login');
    }
}
