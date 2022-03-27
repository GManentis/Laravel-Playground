<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\CustomClasses\MyClass;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

         /*
         $parameters are needed in case with need to do sth according to input vars to app()->make(...)
         if we inject this in controller methods or constructor, this does not recognise the parameters, they are considers undefined
         */
        $this->app->bind(MyClass::class,function($app,$parameters){
            //if we need request object we can simply do $app->request->parameterOfRequest
            if(count($parameters) === 0){
                return new MyClass($app->request->route("param"));
            }

            return new MyClass($parameters['param']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
