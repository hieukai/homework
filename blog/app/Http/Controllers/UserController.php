<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $data = $request->toArray();
        //var_dump($data);
        if( isset($data['email']) && $data['email']  ==  '@gmail' && 
        isset($data['password']) && $data['password'] == '1234' ){
            echo "Hello Request";
            return view('welcome');
        }
        return redirect('demologin');
    }

    public function update(Request $request, $id){
        echo "Request input field: <br>";
        var_dump($request->input('email', 'default value'));
        echo "<br>";
        echo "Password: <br>";
        var_dump($request->password);
        echo "<br>";
        echo "Email: <br>";
        var_dump($request->email);
        echo "<br>";
    }

}
