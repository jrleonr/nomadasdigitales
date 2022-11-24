<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Gate::define('viewMailcoach', function ($user = null) {
            //return optional($user)->admin;
            if($user->email == 'jrleon84@gmail.com') return true;
        });
    }
}
