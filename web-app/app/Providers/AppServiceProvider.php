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
        $nav_top_items = $this->getNavItems('NavTop');
        view()->share('nav_top_items', $nav_top_items);

        $nav_left_items = $this->getNavItems('NavLeft');
        view()->share('nav_left_items', $nav_left_items);

        $nav_right_items = $this->getNavItems('NavRight');
        view()->share('nav_right_items', $nav_right_items);

        $nav_bottom_items = $this->getNavItems('NavBottom');
        view()->share('nav_bottom_items', $nav_bottom_items);
    }

    private function getNavItems($name) {
        $nav = Section::where('name', $name)->first();
        $nav_items = is_null($nav) || is_null($nav->sections) ? [] : $nav->sections;
        return $nav_items;
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
