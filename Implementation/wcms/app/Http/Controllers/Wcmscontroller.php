<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class Wcmscontroller extends Controller
{


	function index()
    {
     return view('woodcraft.index');
    }

    function index2()
    {
     return view('woodcraft.index2');
    }

    // function checklogin(Request $request)
    // {
    //  $this->validate($request, [
    //   'email'   => 'required|email',
    //   'password'  => 'required|alphaNum|min:3'
    //  ]);

    //  $user_data = array(
    //   'email'  => $request->get('email'),,
    //   'password' => $request->get('password')
    //  );

    //  if(Auth::attempt($user_data))
    //  {
    //   return redirect('woodcraft/index');
    //  }
    //  else
    //  {
    //   return back()->with('error', 'Wrong Login Details');
    //  }

    // function successlogin()
    // {
    //  return view('woodcraft.index2');
    // }

    // function logout()
    // {
    //  Auth::logout();
    //  return redirect('woodcraft.index');
    // }



    // }
    //wcms
    // protected $image_dir = "uploads/blogs"

    // public function getJsonResponse($param = null)
    // {

    // }

    // public function index()
    // {
    	
    // 	return view('woodcraft.index');
    // }
    
    public function order()
    {
    	
    	return view('woodcraft.order');
    }

    public function aboutus()
    {
    	
    	return view('woodcraft.aboutus');
    }

    public function settings()
    {
    	
    	return view('woodcraft.settings');
    }

    public function inventory()
    {
    	
    	return view('woodcraft.inventory');
    }

     public function login2()
    {
        
        return view('woodcraft.login2');
    }

    public function login()
    {
        
        return view('woodcraft.login');
    }

    public function register()
    {
        
        return view('woodcraft.register');
    }

    public function admin()
    {
        
        return view('woodcraft.admin');
    }

    
}


?>