@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<!--Preloader-->
<div class="preloader">
    <div class="spinner"></div>
</div>

<!-- Mainmenu-Area -->
<!--Header-Area-->

<!--Header-Area-/-->


<!-- About-Area -->
<section class="" id="about-area">
    <div class="container">
        <div style="display: flex; flex-direction: row">
            @foreach ($new_productType1 as $type)

            <div style="flex-grow: 1; margin-right: 3rem; text-align: justify">
                <div class="page-title">
                    <h2 class="title wow fadeInUp">{{$type->name}}</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <p>{{$type->description}}</p>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.7s">
                    <a href="{{route('cf.cfType',$type->id)}}" class="bttn bttn-primary">Xem toàn bộ sản phẩm</a>
                </div>
            </div>
            <div style="width: 300px; height: auto; flex-shrink: 0; flex-grow: 0">
                <img src="classic/images/about-image.png" alt="">
            </div>
            @endforeach
        </div>

        <div class="row prices tab-content">
            @foreach ($new_product as $product)

            <div id="monthly" class="tab-pane fade in active">
                <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="price-box">
                        <a style="height: 6rem; box-sizing: border-box; display:block;"
                            href="{{route('cf.show', $product->id) }}">{{ $product->name}}</a>
                        <a href="single.html"><img src="{{$product->image}}" alt="Image" class="img-fluid"></a>
                        <div style="text-align:center;">
                            <form action="{{route ('save_cart')}}" method="post">
                                @csrf
                                <br>
                                <button class="btn btn-info">Add to Cart</button>
                                <input type="hidden" name="productid_hidden" value="{{$product->id}}">
                                <input type="hidden" name="qty" value="1">
                            </form>
                            {{-- <h3 class="amount">{{ $product->promotion_price}}/<span>Pack</span></h3> --}}
                            <strong>{{ $product->promotion_price}} VND / Pack</strong>
                            {{-- <ul class="price-list"> --}}
                            {{-- <li>{{ $product->description}}</li> --}}
                            <p class="description" style="display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">{{ $product->description}}</p>
                            {{-- </ul> --}}
                            <a href="{{route('cf.show', $product->id) }}" class="bttn bttn-sm bttn-default">Tìm hiểu
                                thêm</a>
                        </div>

                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- About-Area / -->

<!-- About-Area -->
<section class="" id="about-area">
    <div class="container">
        <div style="display: flex; flex-direction: row">
            @foreach ($new_productType2 as $type)

            <div style="flex-grow: 1; margin-right: 3rem; text-align: justify">
                <div class="page-title">
                    <h2 class="title wow fadeInUp">{{$type->name}}</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <p>{{$type->description}}</p>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.7s">
                    <a href="{{route('cf.cfType',$type->id)}}" class="bttn bttn-primary">Xem toàn bộ sản phẩm</a>
                </div>
            </div>
            <div style="width: 300px; height: auto; flex-shrink: 0; flex-grow: 0">
                <img src="classic/images/phingiay.png" alt="">
            </div>
            @endforeach
        </div>

        <div class="row prices tab-content">
            @foreach ($new_product2 as $product)

            <div id="monthly" class="tab-pane fade in active">
                <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="price-box">
                        <a style="height: 6rem; box-sizing: border-box; display:block;"
                            href="{{route('cf.show', $product->id) }}">{{ $product->name}}</a>
                        <a href="single.html"><img src="{{$product->image}}" alt="Image" class="img-fluid"></a>
                        <div style="text-align:center;">
                            <form action="{{route ('save_cart')}}" method="post">
                                @csrf
                                <br>
                                <button class="btn btn-info">Add to Cart</button>
                                <input type="hidden" name="productid_hidden" value="{{$product->id}}">
                                <input type="hidden" name="qty" value="1">
                            </form>
                            {{-- <h3 class="amount">{{ $product->promotion_price}}/<span>Pack</span></h3> --}}
                            <strong>{{ $product->promotion_price}} VND / Pack</strong>
                            {{-- <ul class="price-list"> --}}
                            {{-- <li>{{ $product->description}}</li> --}}
                            <p class="description" style="display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;">{{ $product->description}}</p>
                            {{-- </ul> --}}
                            <a href="{{route('cf.show', $product->id) }}" class="bttn bttn-sm bttn-default">Tìm hiểu
                                thêm</a>
                        </div>

                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- About-Area / -->


</html>


@endsection
