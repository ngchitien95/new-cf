@extends('layouts.app')
@section('content')
<br>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li ><a href="#" class="btn btn-success">Home</a></li>
              <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <?php
            $content = Cart::content();

            // echo '<pre>';
            //     print_r($content);
            // echo '<pre>';


                ?>


            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image"></td>
                        <td class="description">Tên</td>
                        <td class="price">đơn giá</td>
                        <td class="quantity">số lượng</td>
                        <td class="total">tổng tiền</td>
                        <td></td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $v_content)

                    <tr>
                        <td class="cart_product">
                        <a href=""><img src="{{$v_content->image}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                            {{-- <p>Web ID: 1089772</p> --}}
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).''.'vnđ'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">

                            <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{ csrf_field() }}
                                {{-- <a class="cart_quantity_up" href=""> + </a> --}}
                                <input size="3" class="cart_quantity_input" type="number" min="1" max="1000" name="cart_quantity" value="{{$v_content->qty}}">
                            <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                            {{-- <input placeholder="Số" name="qty" required type="number" value="" min="1" max="1000"/> --}}

                                <input type="submit" value="Cập Nhật" name="update_qty" class="btn btn-primary btn-sm">

                                {{-- <a class="cart_quantity_down" href=""> - </a> --}}
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                        <p class="cart_total_price">
                            <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal).''.'vnđ';

                            ?>

                        </p>
                        </td>
                        <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i>Bỏ</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
       <a class="btn btn-warning" style="margin-left: 800px" href="{{  route('cart.destroy') }}">Hủy Đơn</a>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action" >
    <div class="container" style="margin-left: 800px" >
        {{-- <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div> --}}
        <div class="row">
                       <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tổng  <span>{{Cart::subtotal().''.'vnđ' }}</span></li>

                        {{-- <li>Thuế <span>{{Cart::tax().''.'vnđ' }}</span></li> --}}
                        <li>Phí vận chuyển <span>Free</span></li>
                        <li>thành tiền <span>{{Cart::subtotal().''.'vnđ' }}</span></li>
                        <a class="btn btn-danger" href="{{URL::to('/payment')}}">Thanh toán</a>

                    </ul>
                        {{-- <a class="btn btn-default update" href="">Update</a> --}}
                </div>
            </div>
        </div>
    </div>
    <br>

</section>
<!--/#do_action-->



@endsection


