<?php

namespace App\facades;


use Illuminate\Support\Facades\Facade;

class ApiMarvel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Api-Marvel';
    }
}



