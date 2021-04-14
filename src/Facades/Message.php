<?php

namespace CorCronje\LaravelSmsPortal\Facades;

use Illuminate\Support\Facades\Facade;

class Message extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsportal-message';
    }
}