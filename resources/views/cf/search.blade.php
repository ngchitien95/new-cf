@extends('layouts.app')
@section('content')
{{-- <div class="main"> --}}
<div class="container pt-5">
    <div class="row margin-bottom-40">
    <div class="col-md-9 col-sm-7">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="content-search margin-bottom-20">
                <div class="row">
                <div class="col-md-12">
                <h2>Kết quả tìm kiếm</h2>
                <h5>Đã tìm thấy {{ $products->count() }} Sản phẩm</h5>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row product-list">
        <!-- PRODUCT ITEM START -->
            @foreach ($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item" style="min-height:470px">
                    <div class="pi-img-wrapper">
                    <a href="/coffee/phintruyenthongclassicg-n13086"><img src="{{$product->image}}" height="200" width="200" class="img-responsive" alt="PHIN TRUYỀN THỐNG/ CLASSIC 500G"></a>
                    </div>
                <h3><b><a href="/coffee/phintruyenthongclassicg-n13086">{{$product->name}}</a></b></h3>
                {{-- <p style="padding-top:0px;margin-top:-10px"><b>{{$cf->unit}}</b></p> --}}
                    <div class="pi-price">{{$product->promotion_price}} Đ /    {{$product->unit}} </div>
                    <a href="javascript:void(0)" onclick="addCart(13086)" class="btn btn-default add2cart">
                        <span class="glyphicon glyphicon-shopping-cart">
                        </span>Thêm</a>
                    <a href="{{ route('cf.show', $product->id) }}" class="btn btn-default add2cart">Chi tiết</a>
                <div style="float:left; text-align:justify; padding-top:10px"><p>{{$product->description}}</p></div>
                </div>
            </div>

            @endforeach
     </div>
    </div>
 </div>
</div>

    @endsection
