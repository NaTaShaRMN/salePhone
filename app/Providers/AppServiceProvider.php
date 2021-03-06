<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Brand;
use App\StorageM;
use App\Operating_system;
use App\Ex;
use Cart;

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
        Schema::defaultStringLength(191);
        View::share('brand',Brand::all());
        View::share('storage',StorageM::all());
        View::share('operating_system',Operating_system::all());
        View::share('col',Ex::where('type','1')->take(3)->get());
        $silde = Ex::where('type','2')->get();
        if(count($silde)){
            View::share('silde',$silde[0]);    
        }else{
            $silde->image= '';
            $silde->text = 'Mua hàng của chúng tôi';
            $silde->link = 'index';
            View::share('silde',$silde);    
        }
         if(Cart::content()) {
            $cart = Cart::content();
             View::share([
                'cart'      => $cart,                    
            ]);
            }
    }
}
