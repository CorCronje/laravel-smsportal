<?php

namespace CorCronje\LaravelSmsPortal\Facades;

use Illuminate\Support\Facades\Facade;

class SmsPortal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsportal';
    }
}