
@extends('layouts.main')

@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>
   
    <div class="slider-section slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                 @php
                    $candyImageUrl = '/assets/images/bg/' . $category . '.png';
                 @endphp
                <div class="swiper-slide single-slider-04 animation-style-04" style="height:75vh; background-image: url({{ $candyImageUrl }});">
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content-04">
                            <h1 class="slider-content-04__title text-white">{{str_replace("-", " ", $category)}}</h1>
                            <a class="slider-content-07__btn btn slider-btn-02 rounded-pill" href="{{url('/')}}"><span>Home</span></a>
                            <a class="slider-content-07__btn btn slider-btn-02 rounded-pill" href="{{url('/collection/candy')}}"><span>Candy</span></a>
                        </div>
                        <!-- Slider Content Start -->
                    </div>
                </div>
                <!-- Single Slider End -->
            </div>
        </div>
    </div>

    <!-- Product Section Start -->
    <div class="bg-color-01" style="background-image: url(/assets/images/background-1.png);">
        <div class="best-service section-padding-top-03">
            <div class="section-title-04 text-center">
                <h5 class="section-title-04__sub-title">{{str_replace("-", " ", $category)}}</h5>
                <h2 class="slider-content-04__title text-red">{{str_replace("-", " ", $category)}}</h2>
            </div>
        </div>
        <div class="shop-product-section sidebar-left overflow-hidden mt-minus-100">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-12 section-padding-04">
                        <!-- Product Section Start -->
                        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1 mb-n50">
                        @foreach ($products as $product) 
                            @php
                                $productName = $product->name;
                                $productPrice = $product->price;
                                $productCategory = $product->category;
                                $productTemp = $product->temp;
                                $imageUrl = '/assets/images/' . strtolower(str_replace(" ", "-", $productCategory)) . '/' . $productName . '.jpg'; 
                            @endphp
                            <div class="col mb-50">
                                <!-- Product Item Start -->
                                <div class="product-item text-center">
                                    @if($productTemp != null) 
                                        <div class="product-item__badge">{{$productTemp}}</div>
                                    @endif
                                    <div class="product-item__image border w-100">
                                        <a href="/product/{{$productName}}"><img width="450" height="450" src={{$imageUrl}} alt="Product"></a>
                                        <ul class="product-item__meta">
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content pt-5">
                                        <h5 class="product-item__title"><a href="/product/{{$productName}}">{{$productName}}</a></h5>
                                        <span class="product-item__price">${{$productPrice}}</span>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                        @endforeach
                        </div>
                        <!-- Product Section End -->
                    </div>
                </div>
            </div>
</div>
        </div>
    <!-- Product Section End -->
    </div>

    <!-- Scroll Top Start -->
    <a href="#/" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->
    @endsection
