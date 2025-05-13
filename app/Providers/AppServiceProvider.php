<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        $publicStorage = public_path('storage');
    $target = storage_path('app/public');

    if (!File::exists($publicStorage)) {
        File::link($target, $publicStorage);
    }   
    }
}
