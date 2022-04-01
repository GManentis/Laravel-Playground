<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*-------------One to Many---------------- */
/*This Works with one to many
    $service = Service::whereHas("products",function($q) {
        $q->where("id",20);
    })->first();
    return $service;
    */

/*This works ok
    $service = Service::find(1);
    $product = $service->products()->find(20); //IT WORKS
    return $product;
    */

/*This will work ok service 1-->N products
    $product = Product::find(20);
    $product->service()->update(["service_en"=>"Test"]);
    return $product->service;
    */

/*This will work one to many 1 service --> N products
    $service = Service::where("id",1)->first();
    $service->products()->where('id', 20)->update(['price' => 10000]);//returns bool;
    return $service;
    */

/*1->N
    $service = Service::where("id",1)->first();
    $service->products()->update(['price' => 10]);//returns bool update will affect all products related to categories;
    return $service;
    */



/*-------------Many to Many---------------- */
/*This wont Work in many to many
     $appointments = Appointment::wherehas("products",function($q){
        $q->where("id",20);
    })->first();
    return $appointments;
    */

/*this will work in N --> N    */
// $appointments = Appointment::wherehas("products",function($q){
//         $q->where("product_id",25);
//     })->with('products')->first();
//     return $appointments;

/*also this will work
    $product = Product::find(25);
    $product->appointments()->find(128);
    return $product;
    */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Or better Route::get("/test/{param}",[TestController::class,"ok"]);
Route::get("/test/{param}", "App\Http\Controllers\TestController@ok");



Route::group(['prefix' => '/testo/{testo}'], function () {

    //in comparison to node both wildcards as passed. in express js the param testo would have been lost and it should be binded to middleware for its maintainance
    Route::get("/hash/{hash}", function ($testo, $hash) {
        return $testo . " " . $hash;
    });
});
