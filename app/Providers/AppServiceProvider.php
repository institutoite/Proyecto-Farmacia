<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin\Menu;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer("theme.aside", function ($view) {
            $menus = Menu::getMenu(true);
           //$menus="hola";
            $view->with('menusComposer', $menus);
        });
        View::share('theme','lte');
    }
    public function register()
    {
        
    }

    
}
