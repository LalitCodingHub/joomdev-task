<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        return view('login');
    }
    public function login(request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);
        if (Auth::attempt($validate)) {
            return redirect('/generate-template');
            
        }
        
    }
    public function register(){
       return view('register');
    }
    public function registeruser(request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=>'required'
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt( $request->password);
        $data->save();
         
        return redirect("/")->with('message','Great! You have Successfully registered.');
        
    }
}
