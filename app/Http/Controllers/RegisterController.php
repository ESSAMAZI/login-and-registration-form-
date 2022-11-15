<?php

namespace App\Http\Controllers;

use App\Models\_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function create(Request $request){
      //  dd($request);
      //ارجع الاسم
        //dd($request->name);
        
        return _users::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            //'token'=>Hash::make('wwwe'),
        ]);
    }
}
