<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Hash;

class LoginController extends Controller
{




    public function login()
    {
        return view('template/admindashboard/pages/login/login');
    }

    public function signin(Request $request)
	{
    	$slc_user=$request->slc_user;
		
		
		if($slc_user == 'main_user')
		{
					$this->validate($request,
					[
						'email'=>'required',
						'password'=>'required',

					]);

				$login= $request->only('email','password');
				// print_r($login);
				// die();

				if(Auth::guard('web')->attempt($login))
				{
					return redirect('super_admin');
				}

				else
				{
					return redirect()->back()->with('message','Email or password is not correct!!');
				}

		}
		if($slc_user == 'sub_user')
		{
					$this->validate($request,
					[
						'email'=>'required',
						'password'=>'required',

					]);

				$login= $request->only('email','password');
				// print_r($login);
				// die();

				if(Auth::guard('role_managers')->attempt($login))
				{
				// 	print_r($login);
				// die();
					
					return redirect('super_admin');
				}

				else
				{
					return redirect()->back()->with('message','Email or password is not correct Sub User!!');
				}
			}
	}
	public function register()
    {
        return view('template/admindashboard/pages/login/register');
    }


	public function register_submit(Request $request)
	{
    	//print_r($request->email);
		$this->validate($request,
			[
				'name'=>'required',
				'email'=>'required',
				'password'=>'required',

			]);

			$user=new User();
			$user->name=$request->name;
			$user->email=$request->email;
			$user->password=Hash::make($request->input('password'));
			$user->save();

			return redirect()->back()->with('message','You Have Register Your Account Successfully');
		

	}


	public function forgot_password()
    {
        return view('template/admindashboard/pages/login/forgot_password');
    }
	public function forgot_password_submit(Request $request)
	{
    	//print_r($request->email);
		$this->validate($request,
			[
				'email'=>'required',
				'new_password'=>'required',
				'cnew_password'=>'required',

			]);

			




		if($request->input('new_password')==$request->input('cnew_password'))
		{
			$user=User::where('email',$request->email)->first();
			if (!isset($user))
			{
				return redirect()->back()->with('message','invalid current Email');
			}

			$user=User::where('email',$request->email)->first();
			//print_r($user);die();
			$user->password = Hash::make($request->input('new_password'));
			$user->update();
			return redirect()->back()->with('message','Password Reset Successfully');

		}
		else
		{
			return redirect()->back()->with('message','confirm password password does not match!!');
		}


	}
    public function change_password(Request $request)
	{
    	//print_r($request->email);
		$this->validate($request,
			[
				'current_password'=>'required',
				'new_password'=>'required',
				'cnew_password'=>'required',

			]);


		if($request->input('new_password')==$request->input('cnew_password'))
		{
			if (Hash::check($request->input('current_password'), Auth::user()->password) == false)
			{
				return redirect()->back()->with('message2','invalid current password');
			}

			$user = Auth::user();
			$user->password = Hash::make($request->input('new_password'));
			$user->save();
			return redirect()->back()->with('message1','password updated successfully');

		}
		else
		{
			return redirect()->back()->with('message','confirm password password does not match!!');
		}


	}

	public function logout()
	{
		if(auth()->guard('web')->user())
		{
			Auth::guard('web')->logout();
			return redirect('admin_login');
		}
		if(auth()->guard('role_managers')->user())
		{
			Auth::guard('role_managers')->logout();
			return redirect('admin_login');
		}
		
		


	}
	public function signup(){
		return view('template/frontend/pages/signup');

	}



   }
