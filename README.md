# SMSPortal Client
A PHP client for sending SMS messages from your Laravel project

## About
[SMSPortal](https://smsportal.com) is a popular business communications provider offering a bulk SMS messaging service through their intuitive web interface and API. This package is a PHP client for Laravel allowing you to send SMS messages from your Laravel project.

## Getting Started
To send bulk SMS, you need a SMSPortal account and SMS credits. You can register and purchase credits from [https://smsportal.com/](https://smsportal.com/). Once registered, you can follow the instructions to generate an API client ID and secret.

## Dependencies
1.	PHP 7.2 +
2.	[guzzlehttp/guzzle]( https://docs.guzzlephp.org)

## Installation
1.	You can install this package via composer using:
``` sh
composer require corcronje/laravel-smsportal
```
2.	Basic usage:
``` php
use CorCronje\LaravelSmsPortal;

$client = new Client('your-api-id', 'your-api-secret'); // init the client

$client->getBalance(); // return the remaining credit balance

$message = new Message('0812345678', 'Your message'); // create a new message

$client->send($message); // send the message
```

## Contributors
•	[Cor Cronje]( https://twitter.com/corcronje)
