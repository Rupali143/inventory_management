<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'password' => 'required|min:6',
                'email' => 'required|email|unique:users'
            ]
        );
        try{
            $var = Register::formstore($request);
            return redirect('/')->with('success','Registered Successfully');
        }
        catch(Exception $e){
            return redirect('register')->withErrors('error','wrong Registered');
        }
    }

}
