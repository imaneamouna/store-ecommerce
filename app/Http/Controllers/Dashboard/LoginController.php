<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }

    public function postlogin(AdminLoginRequest $request){

       // return $request;
       //validation
       //check store update
       $remmeber_me = $request->has('remmeber_me')? true: false;//if there is remmeber me check in request let do $remmber_me=true else = false

       if(auth()->guard('admin')->attempt(['email'=>$request->input("email"),'password'=>$request->input("password")],$remmeber_me)){
         //notify()->success('تم الدخول بنجاح');
         return redirect()->route('admin.dashboard');
       }
       //notify()->error('خطأ في البيانات، يرجى المحاولة مرة أخرى');
       return redirect()->back()->with(['error'=>'هناك خطا بالبيانات']);//this is called session and error called key and hs has an content

    }
}
