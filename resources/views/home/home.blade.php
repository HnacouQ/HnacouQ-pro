@extends('layouts.home')

@section('content')
    <!-- begin-banner -->
        <div class="banner">
            <div class="owl-carousel owl-theme content">
                @foreach($banner as $ban)
                <div class="banner-item">
                    <img src="{{url('public/uploads/banner')}}/{{$ban->image}}" alt="">
                    <div class="banner-inside">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 banner-inside-left text-center">
                                    <div class="banner-inside-left-item">
                                        <h3 style="color: #fff">SAVE UP TO 50% OFF</h3>
                                    </div>
                                    <div class="banner-inside-left-item" style="color: #fff ; ">
                                        <h1>NEW COLLECTION WITH BEST PRICE</h1>
                                    </div>
                                    <div class="banner-inside-left-item">
                                        <a href="" class="btn btn-danger btn-banner">EXPLORE NOW</a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                                    <img src="{{url('public/home')}}/images/banners/banner-intro2.png" alt="">
                                    <div class="caption-intro-right-top">
                                        <h3 class="text-center">Shoes Colection</h3>
                                    </div>
                                </div>
                            <div class="col-md-8 intro-bot">
                                <img src="{{url('public/home')}}/images/banners/banner-intro3.png" alt="">
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
                                            <a href="#all" aria-controls="all" role="tab" data-toggle="tab">NEW</a>
                                        </li>
                                        <li role="presentation" class="active pro-tabs-item">
                                            <a href="#popular" aria-controls="tab" role="tab" data-toggle="tab">MEN</a>
                                        </li>
                                        <li role="presentation" class="pro-tabs-item">
                                            <a href="#trending" aria-controls="tab" role="tab" data-toggle="tab">WOMEN</a>
                                        </li>
                                        <li role="presentation" class="pro-tabs-item">
                                            <a href="#sell" aria-controls="tab" role="tab" data-toggle="tab">ASSESSORIS</a>
                                        </li>
                                    </ul>
                                
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane " id="all">
                                            <div class="row">
                                                <div class="pro-item">
                                                    @foreach($all as $al)
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <div class="pro-img">
                                                                <img src="{{url('public/uploads/product')}}/{{$al->image}}" alt="" width="">
                                                            </div>
                                                            <div class="caption text-center" style="padding: 40px 15px">
                                                                <h4>{{$al->name}}</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                @if($al->sale_price == 0)
                                                                    <p style="margin-top: 15px;">
                                                                        Price: {{number_format($al->price)}} đ
                                                                    </p>

                                                                
                                                                @else
                                                                <p  style="margin-top: 15px;">
                                                                    <s class="pull-left">Price:{{number_format($al->price)}} đ</s>
                                                                    <span class="pull-right">Sale-Price: {{number_format($al->sale_price)}} đ</span>
                                                                </p> 

                                                                
                                                                @endif
                                                                  
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href="{{route('view',['slug' => $al->slug])}}"><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('cart.add',['id'=>$al->id])}}"><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div> 
                                            </div> 
                                        </div> 
                                        <div role="tabpanel" class="tab-pane active" id="popular">
                                            <div class="row">
                                                <div class="pro-item">
                                                     @foreach($men as $mens)
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                            <div class="pro-img">
                                                                <img src="{{url('public/uploads/product')}}/{{$mens->image}}" alt="" width="">
                                                            </div>
                                                            <div class="caption text-center" style="padding: 40px 15px; height: 160px">
                                                                <h4>{{$mens->name}}</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                @if($mens->sale_price == 0)
                                                                    <p style="margin-top: 15px;">
                                                                        Price: {{number_format($mens->price)}} đ
                                                                    </p>

                                                                
                                                                @else
                                                                <p  style="margin-top: 15px;">
                                                                    <s class="pull-left">Price:{{number_format($mens->price)}} đ</s>
                                                                    <span class="pull-right">Sale-Price: {{number_format($mens->sale_price)}} đ</span>
                                                                </p> 

                                                                
                                                                @endif
                                                                  
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href="{{route('view',['slug' => $mens->slug])}}"><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('cart.add',['id'=>$mens->id])}}"><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div> 
                                            </div> 
                                        </div>  
                                        <div role="tabpanel" class="tab-pane " id="trending">
                                            <div class="row">
                                                <div class="pro-item">
                                                     @foreach($women as $wo)
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                        <div class="pro-img">
                                                                <img src="{{url('public/uploads/product')}}/{{$wo->image}}" alt="" width="">
                                                        </div>
                                                            <div class="caption text-center" style="padding: 40px 15px">
                                                                <h4>{{$wo->name}}</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                @if($wo->sale_price == 0)
                                                                    <p style="margin-top: 15px;">
                                                                        Price: {{number_format($wo->price)}} đ
                                                                    </p>

                                                                
                                                                @else
                                                                <p  style="margin-top: 15px;">
                                                                    <s class="pull-left">Price:{{number_format($wo->price)}} đ</s>
                                                                    <span class="pull-right">Sale-Price: {{number_format($wo->sale_price)}} đ</span>
                                                                </p> 

                                                                
                                                                @endif
                                                                  
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href="{{route('view',['slug' => $wo->slug])}}"><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('cart.add',['id'=>$wo->id])}}"><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                             </div> 
                                        </div>  
                                        <div role="tabpanel" class="tab-pane " id="sell">
                                            <div class="row">
                                                <div class="pro-item">
                                                     @foreach($asso as $as)
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <div class="thumbnail my-pro">
                                                           <div class="pro-img">
                                                                <img src="{{url('public/uploads/product')}}/{{$as->image}}" alt="" width="">
                                                           </div>
                                                            <div class="caption text-center" style="padding: 40px 15px; ">
                                                                <h4>{{$as->name}}</h4>
                                                                <img src="{{url('public/home')}}/images/icons/icon-star.png" alt="">
                                                                @if($as->sale_price == 0)
                                                                    <p style="margin-top: 15px;">
                                                                        Price: {{number_format($as->price)}} đ
                                                                    </p>

                                                                
                                                                @else
                                                                <p  style="margin-top: 15px;">
                                                                    <s class="pull-left">Price:{{number_format($as->price)}} đ</s>
                                                                    <span class="pull-right">Sale-Price: {{number_format($as->sale_price)}} đ</span>
                                                                </p> 

                                                                
                                                                @endif
                                                                  
                                                            </div>
                                                            <div class="pro-effect">
                                                                <div class="pro-effect-item">
                                                                    <ul>
                                                                        <li>
                                                                        <a href="{{route('view',['slug' => $as->slug])}}"><i class="fas fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('cart.add',['id'=>$as->id])}}"><i class="fas fa-shopping-cart"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=""><i class="far fa-heart"></i></a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                
                                            </div>
                                        </div>
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
                                        <img src="{{url('public/home')}}/images/Blog/blog2.png" alt="">
                                    </a>
                                    <p class="color-gray">january 19,2020 by <span class="color-black">admin</span></p>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Evelit</h4>
                                </div>

                            </div>
                            <div class="blog-new-item">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{url('public/home')}}/images/Blog/blog3.png" alt="">
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
@stop()
