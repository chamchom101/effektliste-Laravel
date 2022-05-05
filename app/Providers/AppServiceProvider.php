<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Arr;
//use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        
        View::share('settingTitel', Setting::find(1));
        View::share('settingLogo', Setting::find(2));
        
    }
}
