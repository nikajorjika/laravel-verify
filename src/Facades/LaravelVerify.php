<?php

namespace Nikajorjika\LaravelVerify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nikajorjika\LaravelVerify\LaravelVerify
 */
class LaravelVerify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-verify';
    }
}
