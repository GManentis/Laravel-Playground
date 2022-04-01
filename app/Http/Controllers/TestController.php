<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\CustomClasses\MyClass;
use App\Http\CustomClasses\MySecondClass;

class TestController extends Controller
{
    /*
    MyClass instance derived from Service Container. Laravel will check what happen in Providers
    what to do with MyClass Instance. If the Class is not in Providers, laravel Will use reflect
    */
    /*
    if you pass param as wildcard and then inject object with same, the object prevails.
    Only in case you inject model, the system will bring model that matches id
    ex: param passed {user} in router. if we do User $user inside the public function controller
    then the $user will be an object with id the user passed in wildcard
    */
    public function ok(Request $request, MyClass $param, MySecondClass $secondClass) //inserted parameters can be inserted in any order but better to keep them in order
    {
        $param2 = app(MyClass::class); //will check
        $param3 = app()->make(MyClass::class, ["param" => "anotherValue"]);
        $param4 = new MyClass("anotherDifferent Value");

        //
        $anotherVar = $secondClass; //no parameters passed
        $anotherVar2 = app(MySecondClass::class); //no parameters passed.The system wont find it in provider and will use reflect to find class and create instance
        $anotherVar3 = app()->make(MySecondClass::class, ["param" => "it has value"]); //no parameters passed.The system wont find it in provider and will use reflect to find class and create instance//syntax for input is: key is the param passed in constructor, value the value given
        $anotherVar4 = new MySecondClass("Altered Value");
        return response()->json([$param, $param2, $param3, $param4, $anotherVar, $anotherVar2, $anotherVar3, $anotherVar4]);
    }
}
