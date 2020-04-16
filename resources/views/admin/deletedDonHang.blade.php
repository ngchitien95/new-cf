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

            <h2>Đơn hàng đả xóa</h2>

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
                        @foreach ($bills->where('customer_id', $cus->id) as $bill)
                        <td class="text-light bg-dark">{{$bill->total}}</td>

                        {{-- <td class="text-light bg-dark">{{$cus->status}}</td> --}}
                        {{-- cái nút trạng thái --}}
                        <td class="text-light bg-dark">
                             <span class="text-ellipsis">
                            <?php
                             if($bill->status==1)
                             {
                            ?>
                            <a onclick="return confirm('Duyệt đơn hàng')" href="{{route('admin.paymenBill',$bill->id)}} " class="btn btn-primary">
                             <i>Chưa duyệt đơn</i></a>

                            <?php
                            }else{
                             ?>
                            <a onclick="return confirm('Bỏ duyệt đơn hàng')" href="{{route('admin.debit_order',$bill->id)}}"class="btn btn-danger">
                            <i>Đã duyệt đơn</i></a>
                             <?php
                            }
                            ?>
                            </span>
                        </td>
                        @endforeach


                         <td class="text-light bg-dark">
                            {{-- <a href="{{ route('admin.showDonHang',$cus->id)}}" class="btn btn-primary"><i class="fa fa-search"></i></a>
                            <a href="{{ route('admin.deleteDonHang',$cus->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a> --}}
                            {{-- <a href="{{ route('admin.restore',$del->id)}}" class="btn btn-primary" ><i>Khôi phục</i></a> --}}
                            <a href="{{ route('admin.restoreDonHang',$cus->id)}}" class="btn btn-primary" ><i>Khôi phục</i></a>



                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
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
