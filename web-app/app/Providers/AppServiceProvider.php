<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Section;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $nav_top_items = Section::where('name', 'NavTop')->first();
        view()->share('nav_top_items', $nav_top_items->sections);

        $nav_left_items = Section::where('name', 'NavLeft')->first();
        view()->share('nav_left_items', $nav_left_items->sections);

        $nav_right_items = Section::where('name', 'NavRight')->first();
        view()->share('nav_right_items', $nav_right_items->sections);

        $nav_bottom_items = Section::where('name', 'NavBottom')->first();
        view()->share('nav_bottom_items', $nav_bottom_items->sections);
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
