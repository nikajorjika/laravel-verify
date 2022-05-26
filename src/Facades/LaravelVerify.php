<?php

namespace Redberry\LaravelVerify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Redberry\LaravelVerify\LaravelVerify
 */
class LaravelVerify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-verify';
    }
}
