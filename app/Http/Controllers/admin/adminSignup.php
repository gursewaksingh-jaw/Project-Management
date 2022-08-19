<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class adminSignup extends Controller
{
   public function adminlogin(Request $req){
    $req->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    $users= User::where('email','=', $req->email)
    ->where('is_admin','=','1')
    ->first();
   if($users){
       if(Hash::check($req->password,$users->password)){
           Session::put('adminloginid',$users->id);
           return redirect('admin-dashboard');
               }else{
               return back()->with('fail','Password does not match');
    }
    
   }else{
       return back()->with('fail','Invalid Credentials');
       }


   }

   public function logout(){
    if (Session::has('adminloginid'))
    {
        Session::pull('adminloginid');
        return view('admin.login');
    }
}





    //    $validated= auth()->attempt([
    //     'email'=>$req->email,
    //     'password'=>$req->password,
    //     'is_admin'=>1
    // ]);
    // if($validated){
    //     return redirect('admin-dashboard')->with('error','Invalid Credentials');
    // }else{
    //     return redirect()->back()->with('error','Invalid Credentials');
    // }







    }

