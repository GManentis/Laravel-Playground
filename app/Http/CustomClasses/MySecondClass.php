<?php

namespace App\Http\CustomClasses;

class MySecondClass
{
    public $variable;
    public function __construct($param = null)
    {
        $this->variable = $param;
    }
}
