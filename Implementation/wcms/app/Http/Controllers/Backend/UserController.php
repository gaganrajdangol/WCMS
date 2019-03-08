<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('get')){
            return view($this->_backendPath.'login.login');
        }

        if($request->isMethod('post')){
            $username = $request->username;
            $password = $request->password;
            if(Auth::attempt(['username'=>$username,'password'=>$password])){
                if(Auth::user()->status==0){
                    return redirect()->route('login')->with('error','Sorry!!! '.Auth::user()->firstName.' '.Auth::user()->middleName.' '.Auth::user()->lastName.' ,Your Access has been Denied.');
                }
                return redirect()->intended(route('dashboard'))->with('success','Welcome '.$username.', You have logged in Successfully.');
            }
            else{
                return redirect()->back()->with('error','Invalid Login Information');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
