<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Partner;

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
        $Setting = Setting::first(); View::share('setting', $Setting);
        $Category = Category::get(); View::share('categories', $Category);
        $Partner = Partner::get(); View::share('partners', $Partner);
    }
}
