<?php

namespace  App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
	
	
	public function getLogin(){
		return view('auth.login');
	}
	
	
	public function postLogin(Request $request){
		

		$email = $request['email'];
		$password = $request['password'];
		$remember_me = $request['remember_me'];
		
		$validator = Validator::make($request->all(), [
				'password' => 'required|max:30',
				'email' => 'required|email',
		]);
		
		if ($validator->fails()) {
			return redirect()
			->back()
			->withErrors($validator , "login")
			->withInput();
		}
		
		
		if (Auth::attempt(['email' => $email, 'password' => $password ])) {
			return redirect()->route('home');
			
		}else{			
			$validator->errors()->add('invalid_email_password', 'Invalid email or password');
			
			return redirect()
			->back()
			->withErrors($validator , "login")
			->withInput();

		}
	}
	
	
}