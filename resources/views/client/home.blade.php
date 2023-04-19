@extends('layouts.app')
@section('content')
<section class="slider_section">
    <div class="banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                    <div class="text-bg">
                        <h1>Thiết kế <br> <strong class="black_bold">mới nhất</strong><br></h1>
                        <a href="{{route('shop')}}">Mua ngay <i class='fa fa-angle-right'></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-img">
                        <figure><img src="{{asset('asset/images/bg.jpg')}}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- discount -->
<div class="container">
    <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            {{-- <li data-target="#myCarousel" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>GIẢM 50%<br> <strong class="black_nolmal">cho bộ siêu tập mới nhất</strong>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('asset/images/discount.jpg')}}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('asset/images/freeship.webp')}}" /></figure>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>MIỄN PHÍ VẬN CHUYỂN<br> <strong class="black_nolmal">cho đơn hàng trên 1
                                            triệu</strong>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('asset/images/discount.jpg')}}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- end discount -->
<!-- trending -->
<div class="trending">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2><strong class="black">Danh mục</strong> yêu thích</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="{{asset('asset/images/1.jpg')}}" /></figure>
                    <h3>Ngoài trời</h3>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="trending-box">
                    <figure><img src="{{asset('asset/images/2.jpg')}}" /></figure>
                    <h3>Phòng khách</h3>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="{{asset('asset/images/3.jpg')}}" /></figure>
                    <h3>Phòng ngủ</h3>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end trending -->

<!-- our brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2><strong class="black">Sản phẩm</strong> mới nhất</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            @foreach($new_products as $new_product)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <a href="{{route('product.detail',[$new_product->slug])}}">
                    <div class="brand-box">
                        <img src="{{asset('asset/images/products/' . $new_product->image)}}" />
                        <h3>{{$new_product->name}}</h3>
                        <span class="new-price">{{$new_product->price}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end our brand -->
@endsection