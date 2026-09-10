<?php

declare(strict_types=1);

namespace Vectorial1024\LaravelGmail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

/**
 * @noinspection PhpUnused
 */
class LaravelGmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Mail::extend('gmail', function (array $config = []) {
            // todo return new instance of the gmail transport
        });
    }
}
