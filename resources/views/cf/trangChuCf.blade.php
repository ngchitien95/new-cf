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
                    <h2>Các sản phẩm cà phê</h2>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row product-list">
        <!-- PRODUCT ITEM START -->
            @foreach ($cfs as $cf)

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item" style="min-height:470px">
                    <div class="pi-img-wrapper">
                    <a style="display: block; box-sizing: border-box; height: 250px; width: 100%" href="/coffee/phintruyenthongclassicg-n13086"><img src="{{$cf->image}}" height="200" width="200" class="img-responsive" alt="PHIN TRUYỀN THỐNG/ CLASSIC 500G"></a>
                    </div>
                <h3><b><a style="height: 9rem; box-sizing: border-box; display:block;" href="/coffee/phintruyenthongclassicg-n13086">{{$cf->name}}</a></b></h3>
                {{-- <p style="padding-top:0px;margin-top:-10px"><b>{{$cf->unit}}</b></p> --}}
                    <div class="pi-price">{{$cf->promotion_price}} Đ /    {{$cf->unit}} </div>
                    <form action="{{route ('save_cart')}}" method="post">
                        @csrf
                        <button class="btn btn-info" >Thêm</button>
                    <input type="hidden" name="productid_hidden" value="{{$cf->id}}">
                    <input type="hidden" name="qty" value="1">

                    </form>
                    <a href="{{ route('cf.show', $cf->id) }}" class="btn btn-default add2cart">Chi tiết</a>
                <div style="float:left; text-align:justify; padding-top:10px">
                <p class="description" style="
                    display: -webkit-box;
                    box-sizing: border-box;
                    height: 5rem;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;">{{$cf->description}}</p></div>
                </div>
            </div>

            @endforeach

     </div>
    </div>
 </div>
</div>

   <div style="text-align: center">{{ $cfs->links() }} </div>


    @endsection
