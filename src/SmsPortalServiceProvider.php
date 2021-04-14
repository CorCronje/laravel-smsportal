<?php

namespace CorCronje\LaravelSmsPortal;

use CorCronje\SmsPortal\Client;
use CorCronje\SmsPortal\Message;
use Illuminate\Support\ServiceProvider;

class SmsPortalServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('smsportal-client', function () {
            return new Client(config('smsportal.id'), config('smsportal.secret'));
        });

        $this->app->bind('smsportal-message', function () {
            return new Message('', '');
        });
    }
}
