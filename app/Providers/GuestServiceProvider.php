<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GuestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(!Auth::check()) {
            $userClass = config('auth.providers.users.model');
            Auth::setUser(new $userClass());
        }
    }
}
