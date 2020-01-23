<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Dotenv\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
//        echo'hihi';die;
        return view('auth/login');
    }

    public function doLogin(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            $user = User::where('email',$request->email)->first();
                return redirect('home');
        }
        else{
            return redirect()->back()->withErrors(['Incorrect login credentials']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/')->with('success','Successfully Logged Out!!');

    }
}
