<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginReqeust;
use App\Models\Admin;
use App\Models\language;
class SigninController extends Controller
{

    public function  getLogin()
    {
        $language = language::all();
        return view('admin.Authh.login')->with('language',$language);;
    }

    public function save()
    {

        // $admin = new App\Models\Admin();
        // $admin -> name ="Ahmed Emam";
        // $admin -> email ="ahmed@gmail.com";
        // $admin -> password = bcrypt("Ahmed Emam");//bycrypt هي encryption tashfir
        // $admin -> save();

    }

    public function login(LoginReqeust $request){

        $remember_me = $request->has('remember_me') ? true : false;
        //  return $request->Password;
        if (auth()->guard('admin')->attempt(['Email' => 'dd4045187@gmail.com','Password' => '12345678', $remember_me])) {
           // notify()->success('تم الدخول بنجاح  ');
             return redirect() -> route('admin.dashboard');
         return $request;
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        // return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
 }
