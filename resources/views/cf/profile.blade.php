@extends('layouts.app')
@section('content')

<div class="main">
    <div class="container">

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            {{-- <div class="sidebar col-md-3 col-sm-5">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                            <li class="list-group-item clearfix"><a href="/coffee/caphedacsanhue-5021"><i class="fa fa-angle-right"></i>C&#192; PH&#202; ĐẶC SẢN HUẾ</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/khuyenmaitet2020-5022"><i class="fa fa-angle-right"></i>KHUYẾN M&#195;I TẾT 2020</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/cacsanphamcaphe-5"><i class="fa fa-angle-right"></i>C&#225;c sản phẩm c&#224; ph&#234;</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/caphephintruyenthong-1018"><i class="fa fa-angle-right"></i>C&#224; ph&#234; phin truyền thống</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/caphechai-4021"><i class="fa fa-angle-right"></i>C&#192; PH&#202; CHAI</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/caphedulichphingiay-1016"><i class="fa fa-angle-right"></i>C&#224; ph&#234; du lịch phin giấy</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/capheviennen-3020"><i class="fa fa-angle-right"></i>C&#224; ph&#234; vi&#234;n n&#233;n</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/caphequatangspecialcoffee-4020"><i class="fa fa-angle-right"></i>C&#192; PH&#202; QU&#192; TẶNG/ SPECIAL COFFEE</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/caphechoquan-2019"><i class="fa fa-angle-right"></i>C&#224; ph&#234; cho qu&#225;n</a></li>
                            <li class="list-group-item clearfix"><a href="/coffee/quancaphengon-3019"><i class="fa fa-angle-right"></i>Qu&#225;n c&#224; ph&#234; Ngon</a></li>
                </ul>

            </div> --}}
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->



<!-- BEGIN CONTENT -->
<input type="hidden" value="13086" id="pId" />
<div class="col-md-9 col-sm-7">
<div class="product-page">
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <div class="product-main-image">
            <img src="{{$cf->image}}" height="300" width="300" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="http://greenfieldscoffee.com/Uploads/Photos/PHIN/TT.png">
            </div>
            <div class="product-other-images">
                                                    </div>
        </div>

        <div class="col-md-7 col-sm-7">
        <h1>{{$cf->name}}</h1>
            <div class="price-availability-block clearfix">
            <div class="col-md-12"><h3>{{$cf->unit}}</h3></div>
                <div class="price col-md-12">

                    <br />
                <strong>{{$cf->promotion_price}} Đ</strong>
                </div>
            <form action="{{URL::to('/save-cart')}}" method="POST">
                {{ csrf_field() }}
                <div class="product-page-cart col-md-12" style="float:left; border:none;padding-top:20px;float:left">
                    <div class="product-quantity">
                        <input placeholder="Số" name="qty" required type="number" value="" min="1" max="1000"/>
                    <input placeholder="Số" name="productid_hidden" required type="hidden" value="{{$cf->id}}"/>

                    </div>
                    <button class="btn btn-primary" type="submit" onclick="addCart()">Thêm vào giỏ</button>
                </div>
            </form>
            </div>
                <div>
                    <ul style=""><li style="">Tích điểm nhận quà chương trình "TRI ÂN KHÁCH HÀNG GREENFIELDS COFFEE"<br></li><li style="">Miễn phí giao hàng tận nơi<br></li><li style="">Giảm ngay 5%/ đơn hàng khi đặt hàng tại website greenfieldscoffee.com</li></ul>
                </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="description">
                <p>
                    <p style="text-align: right;"></p><div style="text-align: left;">
                        <span style="font-weight: bold;">{{$cf->name}}
                        </span>
                </div>
                    <div style="text-align: left;"><span style="font-weight: bold;"><br></span></div><div style="text-align: left;"><img src="http://greenfieldscoffee.com/Uploads/Photos/PHIN/TT.png" style="width: 174.25px; height: 174.25px;"><img src="http://greenfieldscoffee.com/Uploads/Photos/PHIN/MP-TT.png" style="width: 153.179px; height: 174.573px;"><img src="http://greenfieldscoffee.com/Uploads/Photos/PHIN/MT-TT.png" style="width: 153.261px; height: 174.667px;"><img src="http://greenfieldscoffee.com/Uploads/Photos/PHIN/MS-TT.png" style="width: 152.384px; height: 173.667px;"><br>
                    </div>
                        <div style="text-align: left;"><br>
                        </div>
                        <span style="font-weight: bold;">
                        </span>
                        <p></p><p><span style="font-weight: bold;"></span></p><p>{{$cf->content}}</p><p>
                        <span style="font-weight: bold;">Hướng dẫn sử dụng</span>
                    </p>
                    <p>Hạt cà phê pha phin được xay thô nên khi pha chúng ta cần nấu nước sôi ở nhiệt độ từ 97 đến 100 độ C để đảm bảo chiết xuất hết chất trong bột cà phê. </p>
                    <p class="Paragraph SCXW75269649" paraid="189388015" paraeid="{f35e54ab-9ee0-4102-9ba3-d0b66059e399}{200}" style="margin-bottom: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline;">B1. Tráng nhẹ phin và ly sứ bằng nước sôi</p><p class="Paragraph SCXW75269649" paraid="189388015" paraeid="{f35e54ab-9ee0-4102-9ba3-d0b66059e399}{200}" style="margin-bottom: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline;">B2. Lấy 25 g cà phê cho vào phin</p><p class="Paragraph SCXW75269649" paraid="189388015" paraeid="{f35e54ab-9ee0-4102-9ba3-d0b66059e399}{200}" style="margin-bottom: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline;">B3. Ủ cà phê với 50 g/ml nước sôi</p><p class="Paragraph SCXW75269649" paraid="189388015" paraeid="{f35e54ab-9ee0-4102-9ba3-d0b66059e399}{200}" style="margin-bottom: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline;">B4. Pha thêm 40 g/ml nước sôi vào phin</p>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END CONTENT -->


            <!-- END SIDEBAR & CONTENT -->

        </div>
    </div>
</div>
<!-- END SIDEBAR & CONTENT -->



@endsection
