<?php

namespace Redberry\CodeVerify\Contracts;

use Redberry\LaravelVerify\Models\VerificationCode;

interface LaravelVerify
{
    public static function generateCode(int $length): string;

    public static function getFreshCode(mixed $notifiable): string;

    public static function saveCode(string $email, string $code): VerificationCode;
}
