@extends('layouts.home')

@section('content')
    <!-- begin-banner -->
        <div class="banner">
            <div class="banner-item">
                <img src="{{url('public/home')}}/images/banners/banner.png" alt="">
                <div class="banner-inside">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 banner-inside-left">
                                <div class="banner-inside-left-item">
                                    <h3>SAVE UP TO 50% OFF</h3>
                                </div>
                                <div class="banner-inside-left-item">
                                    <h1>NEW COLLECTION WITH BEST PRICE</h1>
                                </div>
                                <div class="banner-inside-left-item">
                                    <a href="" class="btn btn-danger btn-banner">EXPLORE NOW</a>
                                </div>
                                
                            </div>
                            <div class="col-md-6 banner-inside-right">
                                <img src="{{url('public/home')}}/images/banners/banner-inside.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-banner -->

        <!--begin main-content-home -->
        <div class="main-content-home">
            <div class="container">
                <div class="row">
                    <!--begin home-support -->
                    <div class="main-content-home-sp">
                        <div class="col-md-4">
                            <img src="{{url('public/home')}}/images/icons/Icon-sp1.png" alt="">
                            <h4 class="area-heading">Free Shipping & Return</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('public/home')}}/images/icons/Icon-sp2.png" alt="">
                            <h4 class="area-heading" >30 Days Return</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('public/home')}}/images/icons/Icon-sp3.png" alt="">
                            <h4 class="area-heading">24/7 Strong Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus</p>
                        </div>
                    </div>
                    <!-- end home-support -->

                    <!-- begin home-intro -->
                    <div class="main-content-home-intro">
                        <div class="main-content-home-intro-item">
                            <div class="row">
                                <div class="col-md-8 intro-top">
                                    <img src="{{url('public/home')}}/images/banners/banner-intro.png" alt="">
                                    <div class="caption-intro-top">
                                        <div class="caption-intro-top-item ">
                                            <h3 class="color-red">SPECIAL PROMO</h3>
                                        </div>
                                        <div class="caption-intro-top-item">
                                            <h1 class="color-black">STYLES FOR MEN FASHION</h1>
                                        </div>
                                        <div class="caption-intro-top-item">
                                            <p class="color-gray">20% Discount for Male Product In Summer</p>
                                        </div>
                                        <div class="caption-intro-top-item">
                                            <a href="" class="btn btn-danger btn-banner" >EXPLORE MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 intro-top">
                                    <img src="{{url('public/home')}}/images/banners/banner-intro1.png" alt="">
                                    <div class="caption-intro-right-top">
                                        <h3 class="text-center">Accessoris</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-content-home-intro-item">
                            <div class="row">
                                <div class="col-md-4 intro-bot">
                                    <img src="{{url('public/home')}}/images/banners/banner-intro1.png" alt="">
                                    <div class="caption-intro-right-top">
                                        <h3 class="text-center">Shoes Colection</h3>
                                    </div>
                                </div>
                            <div class="col-md-8 intro-bot">
                                <img src="{{url('public/home')}}/images/banners/banner-intro.png" alt="">
                                <div class="caption-intro-top">
                                    <div class="caption-intro-top-item">
                                        <h3 class="color-red">STYLES FASHION</h3>
                                    </div>
                                    <div class="caption-intro-top-item">
                                        <h1 class="color-black">NEW ARRIVAL 2020</h1>
                                    </div>
                                    <div class="caption-intro-top-item">
                                        <p class="color-gray">Buy & Enjoy our Specials Offer!</p>
                                        </div>
                                    <div class="caption-intro-top-item">
                                        <a href="" class="btn btn-danger btn-banner" >EXPLORE MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end home-intro -->

                    <!-- begin our-product -->              
                    <div class="main-content-home-our-product">
                        <div class="row">
                            <div class="our-product-item text-center">
                                <h1>OUR PRODUCTS</h1>
                            </div>
                            <div class="our-product-item text-center">
                                <p class="color-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <div class="our-product-item text-center">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs pro-tabs text-center" role="tablist">
                                        <li role="presentation" class="pro-tabs-item">
                                            <a href="#all" aria-controls="all" role="tab" data-toggle="tab">ALL</a>
                                        </li>
                                        <li role="presentation" class="active pro-tabs-item">
                                            <a href="#popular" aria-controls="tab" role="tab" data-toggle="tab">POPULAR</a>
                                        </li>
                                        <li role="presentation" class="pro-tabs-item">
                                            <a href="#trending" aria-controls="tab" role="tab" data-toggle="tab">TRENDING</a>
                                        </li>
                                        <li role="presentation" class="pro-tabs-item">
                                            <a href="#sell" aria-controls="tab" role="tab" data-toggle="tab">BEST SELL</a>
                                        </li>
                                    </ul>
                                
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane " id="all">
                                            <div class="row">
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="popular">
                                            <div class="row">
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane " id="trending">
                                            <div class="row">
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane " id="sell">
                                            <div class="row">
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pro-item">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <img src="{{url('public/home')}}/images/product/product.png" alt="">
                                                            <div class="caption text-center">
                                                                <h4>Baby Girl Dress Design</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                <p>
                                                                    $20.00
                                                                </p>
                                                                
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href=""><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end our-product -->
                    
                    <!-- begin content-blog -->
                    <!-- end content-blog -->
                </div>
            </div>
        </div>
        <div class="main-content-blog">
            <div class="container">
                <div class="row">
                    <div class="blog-news text-center">
                        <h1>BLOG & NEWS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="blog-new-item">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{url('public/home')}}/images/Blog/blog.png" alt="">
                                    </a>
                                    <p class="color-gray">january 19,2020 by <span class="color-black">admin</span></p>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Evelit</h4>
                                </div>

                            </div>
                            <div class="blog-new-item">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{url('public/home')}}/images/Blog/blog.png" alt="">
                                    </a>
                                    <p class="color-gray">january 19,2020 by <span class="color-black">admin</span></p>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Evelit</h4>
                                </div>

                            </div>
                            <div class="blog-new-item">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{url('public/home')}}/images/Blog/blog.png" alt="">
                                    </a>
                                    <p class="color-gray">january 19,2020 by <span class="color-black">admin</span></p>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Evelit</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!--end main-content-home -->
@endsection
