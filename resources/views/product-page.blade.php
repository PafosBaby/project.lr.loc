@extends('layouts.app')

@section('content')
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="product_preview_left bmargin">
                        <div class="gallery">
                            <div class="full">
                                <!-- first image is viewable to start -->
                                <img src="http://placehold.it/500x500" alt="" />
                            </div>
                            <div class="previews">
                                <br>
                                <a><img src="http://placehold.it/120x130" alt="" /></a>
                                <a><img src="http://placehold.it/120x130" alt="" /></a>
                                <a><img src="http://placehold.it/120x130" alt="" /></a>
                                <a><img src="http://placehold.it/120x130" alt="" /></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end left-->

                <div class="col-md-6 col-sm-12 col-xs-12 bmargin">
                    <h3 class=" raleway">{{ $product->name }}</h3>
                    <div class="divider-line solid light opacity-6"></div>
                    <br />
                    <div class="col-md-8 col-sm-6">
                        <h3 class="text-red-4">{{ $product->price }} ₽</h3>
                    </div>
                    <div class="col-md-4 col-sm-6 text-right product-review-stars"> <span><i
                                class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i
                                class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i
                                class="fa fa-star"></i></span><br />
                        (24 customer reviews) </div>
                    <div class="clearfix"></div>
                    <br />
                    <p>{{$product->description}}</p>
                    <br />
                    <a class="btn btn-red-4 less-padding" href="#">Add to cart</a>
                    <div class="clearfix"></div>
                    <br />
                    <br />
                    <ul class="product-details">
                        <li><span>Product ID :</span></li>
                        <li><span>Category :</span></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
