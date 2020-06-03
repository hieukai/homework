<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function hello(){
        return view('hello');
    }
    public function index(){
        return view('welcome');
    }
    public function test($uname, $psw){
        echo "Username is: " . $uname . "<br>Password: " . $psw;
    }
    public function homework(){
        return view('homework');
    }
    public function tohome(Request $request){
        $data = $request->toArray();
        //var_dump($data);
        if( isset($data['email']) && $data['email']  ==  '@gmail' && 
        isset($data['password']) && $data['password'] == '1234' ){
            return view('welcome');
        }
        return redirect('login');
    }
}
