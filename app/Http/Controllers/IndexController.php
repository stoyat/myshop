<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Currency;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    protected $currencies;
    protected $currency;

    public function index()
    {
        $brand = Brand::take(3)->orderBy('id', 'desc')->get();
        $hits = Product::take(8)->where('status', '=', '1')->where('hit', '=', '1')->get();
        return view('pages.index', ['brand' => $brand, 'hits' => $hits]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('product'));
    }




    public function change(){
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
