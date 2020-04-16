@extends('home')
@section('admin_content')

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="content/site.css">
    </head>
    <body>
        <div class="container">
            @if(Session::has('success'))
            <p class="alert alert-info">{{ Session::get('success') }}</p>
            @endif
            <h2>Kết quả tìm kiếm</h2>
            <h5>Đã tìm thấy {{ $customers->count() }} đơn hàng</h5>
            {{-- <a href="javascript:void(0);" class="btn btn-primary" title="Add Product" onclick="product.openModel()">
                <i class="fa fa-plus"></i>
                Add Product
            </a> --}}
            <div class="mt-2">
                <table id="tbProduct" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Điện thoại</th>
                            <th>Ghi chú</th>
                            <th>Thời gian</th>
                            <th>Tổng tiền</th>
                            <th>Tình trạng</th>
                            <th>action</th>



                            {{-- <th>Desciption</th>
                            <th>Manufactory</th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-warning">
                        @foreach ($customers as $cus)

                    <tr>
                        <td class="text-light bg-dark">{{$cus->name}}</td>
                        <td class="text-light bg-dark">{{$cus->phone_number}}</td>
                        <td class="text-light bg-dark">{{$cus->note}}</td>
                        <td class="text-light bg-dark">{{$cus->created_at}}</td>
                        @foreach ($cus->bills as $bill)

                        <td class="text-light bg-dark">{{$bill->total}}</td>
                        @endforeach

                        {{-- <td class="text-light bg-dark">{{$cus->status}}</td> --}}
                        {{-- thử cái nút trạng thái --}}
                        <td class="text-light bg-dark">
                             <span class="text-ellipsis">
                            <?php
                             if($cus->status==1)
                             {
                            ?>
                            <a onclick="return confirm('Thanh toán đơn hàng')" href="{{route('admin.paymenBill',$cus->id)}} " class="btn btn-primary">
                             <i>Chưa duyệt đơn</i></a>

                            <?php
                            }else{
                             ?>
                            <a href="{{route('admin.debit_order',$cus->id)}}"class="btn btn-primary">
                            <i>đã duyệt đơn</i></a>
                             <?php
                            }
                            ?>
                            </span>
                        </td>

                         <td class="text-light bg-dark">
                            <a href="{{ route('admin.showDonHang',$cus->id)}}" class="btn btn-primary"><i class="fa fa-search"></i></a>


                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div>

    </body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="scripts/product.js"></script>
</html>


@endsection
