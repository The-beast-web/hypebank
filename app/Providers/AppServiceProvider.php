<?php

namespace App\Providers;

use App\Http\View\Composers\UserDataComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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



        Config::set('seotools.meta.defaults.title', setting('app_name'));
        Config::set('app.name', setting('app_name'));

        view()->composer('customer.layout.topbar', UserDataComposer::class);

        //
        Paginator::defaultView('vendor.pagination.default');
    }
}
