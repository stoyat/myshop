<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    protected $currencies;
    protected $currency;

    public function index()
    {
        $currencies = Currency::all();
        $res = $this->getCurrency($currencies);
        return view('welcome', ['currencies'  =>  $currencies, 'res' => $res]);
    }

        public function getCurrency($currencies)
        {
            if(isset($_COOKIE['currency'])){
                $currencies = DB::table('currencies')->where('code',$_COOKIE['currency'])->first();
            }
            else{
                $currencies = DB::table('currencies')->where('base',1)->first();
            }
           return $currencies;
        }

    public function change(){
        dd('11');
        $currency = !empty($_GET['curr']) ? $_GET['curr'] : null;
        if($currency){
            $curr = DB::table('currencies')->where('currency',$currency)->first();
            if(!empty($curr)){
                setcookie('currency', $currency, time() + 3600*24*7, '/');
            }
        }
        return redirect()->back();
    }
}
