<?php

namespace Nikajorjika\LaravelVerify\Commands;

use Illuminate\Console\Command;

class LaravelVerifyCommand extends Command
{
    public $signature = 'laravel-verify';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
