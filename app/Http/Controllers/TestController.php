<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\CustomClasses\MyClass;

class TestController extends Controller
{
    public function __construct() {}

    public function ok(Request $request,MyClass $param){ //inserted parameters can be inserted in any order but better to keep them in order
        //return response()->json($param);
        $param2 = app(MyClass::class);
        $param3 = app()->make(MyClass::class,["param"=>"anotherValue"]);
        $param4 = new MyClass("anotherDifferent Value");
        return response()->json([$param,$param2,$param3,$param4]);

    }
}
