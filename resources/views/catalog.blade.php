@extends('layouts.app')

@section('content')
    <section class="sec-padd-default-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">Товары</h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="shop-product-holder bmargin">
                            <a href="{{route('app.product', $product)}}">
                                <div class="image-holder">
                                    <div class="hoverbox"><i class="fa fa-link"></i></div>
                                    <img src="http://placehold.it/300x400" alt="" class="img-responsive" />
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1 roboto-slab"><a href="{{route('app.product', $product)}}">{{$product->name}}</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet</p>
                        <h5 class="text-red-4">{{$product->price}} ₽</h5>
                        <a class="btn btn-orange-2  dark btn-xround " href="#">Add to cart</a>
                        <div class="clearfix"></div>
                        <br />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
