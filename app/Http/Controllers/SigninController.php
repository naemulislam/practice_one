<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(auth()->attempt($request->only('email','password'))){
            // return 'Successfully login!';
            $user = auth()->user();
            dd($user->role);
            return to_route('dashboard')->with('success','Successfully login!');
        }
        return to_route('login')->with('error','Invalied Cradiential');
    }
    public function logout(){
        auth()->logout();
        return to_route('login');

    }
}
