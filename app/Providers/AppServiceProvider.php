<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('general_settings')) {
            $general_setting = GeneralSetting::first();
            $categories = \App\Models\Category::where('status', 1)->get();
            View::share('settings', $general_setting);
            View::share('categories', $categories);
        }
        View::share('title', 'By Khyrul Kabir');
    }
}
