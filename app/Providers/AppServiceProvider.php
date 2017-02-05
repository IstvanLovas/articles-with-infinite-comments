<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.layout.admin-header', function ($view) {
            $view->with('notifications', \App\Notification::latest()->unread()->get());
        });

        view()->composer('admin.dashboard', function ($view) {
            $view->with('notifications', \App\Notification::latest()->unread()->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
