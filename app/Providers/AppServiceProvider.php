<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//importando o view para que a informação definida na fução boot seja carregada em todas as views
use Illuminate\Support\Facades\View;
//importanto o blade para usar o alert de erro como atalho
use Illuminate\Support\Facades\Blade;

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
        //informação que irá aprecer nas view
        View::Share('versao','1.0');
        //declarando o blade para usar o componente de alert
        Blade::component('components.alert','alert');
    }
}
