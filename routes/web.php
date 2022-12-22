<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    testFunction();
    //return view('welcome');
});

/*
Auth check in controller section/function for web : All processes in the example below work as expected. Probably that's how web works.
In case of laravel passport(used in api) a strange case occurs. Please check api.php for more info
*/
Route::get("/foo",function(){
    return view("testlogin");
});

Route::post('/login',function(Request $request){
    if(!Auth::attempt(["email" => $request->email,"password"=>$request->password])){
        return "not ok";
    }
    return redirect("/check");
});

Route::get("/check",function(Request $request){
    if(Auth::check()){ //checking if seesion all ok
        return $request->user(); //will return user properly
    }

    return "OK";
});
/*the auth case web ends here. Proceed to api.php for laravel passport case*/
