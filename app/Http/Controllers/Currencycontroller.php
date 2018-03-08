<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class Currencycontroller extends Controller
{
    public function index()
    {
        return view('welcome')->with('posts', $posts);;
    }

}
