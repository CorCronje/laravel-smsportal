<?php

namespace CorCronje\LaravelSmsPortal;

use CorCronje\SmsPortal\Client;
use Illuminate\Support\ServiceProvider;

class SmsPortalServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('smsportal', function () {
            return new Client(config('smsportal.id'), config('smsportal.secret'));
        });
    }
}
