<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\helper\Cart;

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
        //
        view()->composer('*',function($v){
            $v->with([
                'carts' => new Cart

            ]);

        });
    }
}
