<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\helper\Cart;
use App\models\Order;
use App\models\Product;
use App\models\Banner;
use App\User;
use App\models\Category;
use Illuminate\Support\Facades\Schema;


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

        Schema::defaultStringLength(191);

        view()->composer('*',function($v){
            $v->with([
                'carts' => new Cart,
                'or_news_count' => Order::where('status', 0 )->count(),
                'order_count' => Order::all()->count(),
                'product_count' => Product::all()->count(),
                'banner_count' => Banner::all()->count(),
                'user_count' => User::all()->count(),
                'category_count' => Category::all()->count(),

            ]);

        });

        
    }
}
