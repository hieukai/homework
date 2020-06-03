<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//laravel router+controller+view+middlerware
Route::get('/xyz/{user}', function($user){
    return view('hello-user', ['user' => $user]);
});
Route::get('/hello','PostController@hello');
//laravel response string
Route::get('/hello1', function(){
    return 'hello abc';
});
Route::get('post/{id}', function($id){
    echo "post id is: " . $id;
});
Route::get('welcome1', 'PostController@index');
Route::get('welcome2', ['as' => 'name', 'uses' => 'PostController@index']);
Route::view('/welcome3', 'welcome');

Route::get('user/{name}', function($name){
    echo "User name: $name";
})->where('name', '[A-Za-z]+');

// Route::get('user/{id}'. function($id){
//     echo "User id: " . $id;
// })->where(['id' => '[0-9]+']);

Route::get('user/{id}/{name}', function($id, $name){
    echo "User ID: " . $id . "<br> User name: " . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('globaluser/{globalID}/{globalName}', function($globalID, $globalName){
    echo "Your globalID: " . $globalID . "<br>globalName: " . $globalName;
});
Route::get('test/{uname}/{psw}', 'PostController@test')->where(['name' => '[a-z]+', 'id' => '[0-9]+']);

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('check_token');

Route::get('/login', function(){
    return view('login');
});

Route::group(['middleware' => ['web']], function(){
    Route::get('/groups', function(){
        echo "Welcome";
        return view('welcome');
    });
});
Route::get('/parameter', function(){
    echo "Middleware parameters";
})->middleware('check_role:user');

//Homework Middleware
Route::get('/homework', function () {
    return view('homework');
})->middleware('homework');

Route::get('/homework','PostController@homework')->middleware('homework');
Route::post('/login', 'PostController@tohome');
//laravel requerst
Route::get('/demologin', function(){
    return view('demologin');
});
Route::post('/demologin', 'UserController@login');

//request method
Route::get('/requestmethod', function(Request $request){
    // echo "Request Path: " . $request->path() . "<br>";
    // echo "Request Url: " . $request->url() . "<br>";
    // echo "Request FullUrl: " . $request->fullUrl() . "<br>";
    // echo "Request IP: " . $request->ip() . "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "Request server: " . var_dump($request->server()) . "<br>";
});

Route::get('/users/updates/{id}', function($id){
    return view('profile', ['id' => $id]);
});
Route::post('/users/updates/{id}', 'UserController@update');
Route::get('red-pro', function(){
    return redirect()->route('abc', ['id' => 1]);
});

//redirect & response
Route::get('redirect', function(){
    return redirect('login');
});

Route::get('/location', function(){
    echo "Location";
    return view('welcome');
})->name('location');
Route::get('redi-loca', function(){
    return redirect()->route('location');
});