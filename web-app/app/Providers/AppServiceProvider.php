<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Section;
use App\Models\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $main_menu = Menu::where('name','MainMenu')->first();
        view()->share('main_menu', $main_menu);
    }

    private function getNavItems($name) {
        $nav = Section::where('name', $name)->first();
        $nav_items = is_null($nav) || is_null($nav->sections) ? [] : $nav->sections;
        return $nav_items;
    }

    private function getNavPages($name) {
        $nav = Section::where('name', $name)->first();
        $nav_items = !is_null($nav) && !is_null($nav->pages) ? $nav->pages : [];
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
