<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function loginTemplate()
    {
        return view('login');
    }

    public function register()
    {
        return view('admin.register');
    }


    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         $credentials = $request->only('email', 'password');
		//print_r($credentials);

         if (Auth::attempt($credentials)) {
			$id =    Auth::user()->id;
			$name =    Auth::user()->name;
			$email =    Auth::user()->email;
			$created_at =    Auth::user()->created_at;
			 $request->session()->put('school_id',$id);
			 $request->session()->put('school_name',$name);


            return redirect()->intended('school')
                        ->withSuccess('Signed in');

        }

        return redirect("/teacher/login")->withSuccess('Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/teacher/login');
    }



    public function register_submit(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);




        //return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([

        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
       if(Auth::check()){
            return view('admin.home');
        }

        return redirect("/teacher/login")->withSuccess('You are not allowed to access');
    }


}

