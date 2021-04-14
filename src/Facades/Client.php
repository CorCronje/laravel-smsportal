<?php

namespace CorCronje\LaravelSmsPortal\Facades;

use Illuminate\Support\Facades\Facade;

class Client extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsportal-client';
    }
}