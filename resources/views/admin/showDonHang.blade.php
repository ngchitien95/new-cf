@extends('home')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      thông tin khách hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Ghi chú</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            <?php
                // dd($customers)
            ?>

          <tr>
            <td>{{$bills->customer->name}}</td>
            <td>{{$bills->customer->email}}</td>
            <td>{{$bills->customer->address}}</td>
            <td>{{$bills->customer->phone_number}}</td>
            <td>{{$bills->customer->note}}</td>

            {{-- <td>{{$customers->email}}</td>
            <td>{{$customers->address}}</td>
            <td>{{$customers->phone_number}}</td> --}}
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      chi tiết sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá Sản Phẩm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ( $products as $pro) --}}
          @foreach ($bills->bill_detail as $detail)

          <tr>
          {{-- <th>{{$products->name}}</th> --}}
          <th>{{$detail->product->name}}</th>
          <th>{{$detail->quanlitin}}</th>
          <th>{{$detail->unit_price}}</th>

          {{-- <th>{{$detail->quanlitin}}</th>
          <th>{{$detail->unit_price}}</th>
          <th>{{$detail->bill->total}}</th> --}}
        </tr>
        @endforeach
        <th>Tổng tiền</th>
        <th></th>
    <th>{{$bills->total}}</th>
          {{-- @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>




@endsection
