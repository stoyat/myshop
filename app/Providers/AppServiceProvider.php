<?php

namespace App\Providers;

use App\Currency;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function getCurrency($currencies)
    {
        if(isset($_COOKIE['currency'])){
            $currencies = DB::table('currencies')->where('code',$_COOKIE['currency'])->first();
        }
        else{
            $currencies = DB::table('currencies')->first();
        }
        return $currencies;
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('pages.header', function($view){
            $currencies = Currency::all();
            $view->with('currencies', $currencies);
            $view->with('res', $this->getCurrency($currencies));
        });
    }
}
