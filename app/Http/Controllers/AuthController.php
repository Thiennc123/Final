<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
	

	public function getLogin()
	{
		return view('login');
	}

    public function postLogin(Request $request)
    {
    	$array = $request->only('email', 'password');

    	if(Auth::attempt($array))
    	{
            $user = Auth::User();
            $request->session()->put('data',Auth::User());
            if($user->userName === 'admin')
    		  return redirect('Manage');
            else
                return redirect('Feeds_Photo');
    	}else{
    		return view('login')->with('info','Dang nhap that bai');
    	}
    	
    	
    }

    public function logout()
    {
    	Auth::logout();
        session()->forget('data');
    	return redirect('Feeds_Photo');
    }

    public function getRegister()
    {
    	return view('signup');
    }

    public function setRegister(Request $request)
    {
    	$user = new User();
    	$user->userName = $request->userName;
    	$user->firstName = $request->firstName;
    	$user->lastName = $request->lastName;
    	$user->email=$request->email;
    	$user->password = bcrypt($request->password);

    	$user->save();
    	return view('login');
    }
}
