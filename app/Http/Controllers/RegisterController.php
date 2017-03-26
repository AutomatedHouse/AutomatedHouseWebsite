<?php


namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

Class RegisterController extends Controller{
	
	
	
	
	public function getRegister()
	{
		return  view('auth.register') ;
	
	}
	
	
	public function postRegister(Request $request)
	{
	
	
		$f_name = $request['f_name'];
		$l_name = $request['l_name'];
		$email = $request['email'];
		$password = Hash::make($request['password']);
		$confirm_password = $request['confirm_password'];
	
	
	
		$validator = Validator::make($request->all(), [
				'f_name' => 'required|max:30',
				'l_name' => 'required|max:30',
				'password' => 'required|max:30',
				'email' => 'required|email|unique:User',
					
		]);

	 if ($validator->fails()) {
            return redirect()
            			->back()
                        ->withErrors($validator , "register")
                        ->withInput();
      }
	
		$userModel = new User();
	
		$userModel->f_name = $f_name;
		$userModel->l_name = $l_name;
		$userModel->email = $email;
		$userModel->password = $password;
	
		$userModel->save();
	
		Auth::login($userModel);
	
		return  redirect()->route('home');
	
	}
	
}