<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Currency;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{

    public function index()
    {
        $val = DB::table('currencies')->where('code',$_COOKIE['currency'])->first();
        $brand = Brand::take(3)->orderBy('id', 'desc')->get();
        $hits = Product::take(8)->where('status', '=', '1')->where('hit', '=', '1')->get();
        return view('pages.index', ['brand' => $brand, 'hits' => $hits, 'val' => $val]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('product'));
    }
}
