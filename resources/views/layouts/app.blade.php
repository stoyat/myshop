<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/front.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-9 header-left">
                    <div class="top-nav">
                        <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                            <li class="grid"><a href="#">Men</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="#">Women</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="#">Kids</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="typo.html">Blog</a>
                            </li>
                            <li class="grid"><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 header-right">
                    <div class="search-bar">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('public/js/front.js') }}"></script>
</body>
</html>
