<?php

namespace App\Providers;

use App\Exceptions\Handler;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            Handler::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
