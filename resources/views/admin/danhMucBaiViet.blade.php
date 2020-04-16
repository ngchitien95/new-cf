
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
            @if(Session::has('successUpdate'))
            <p class="alert alert-info">{{ Session::get('successUpdate') }}</p>
            @endif

            @if(Session::has('successCreate'))
            <p class="alert alert-info">{{ Session::get('successCreate') }}</p>
            @endif

            @if(Session::has('delBaiViet'))
            <p class="alert alert-info">{{ Session::get('delBaiViet') }}</p>
            @endif

            @if(Session::has('restoreBaiviet'))
            <p class="alert alert-info">{{ Session::get('restoreBaiviet') }}</p>
            @endif

            <h2>Các bài viết</h2>

            {{-- <a href="javascript:void(0);" class="btn btn-primary" title="Add Product" onclick="product.openModel()">
                <i class="fa fa-plus"></i>
                Add Product
            </a> --}}
            <div class="mt-2">
                <table id="tbProduct" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên bài viết</th>
                            <th>Actions</th>

                            {{-- <th>Desciption</th>
                            <th>Manufactory</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($baiviets as $baiviet)
                    <tr>
                        <td class="text-light bg-dark">{{$baiviet->title}}</td>
                        <td class="text-light bg-dark">
                            <a onclick="return confirm('bạn có muốn chỉnh sửa bài viết không ?')" href="{{ route('bai-viet.edit',$baiviet->id)}} " class="btn btn-primary">
                                <i class="fa fa-edit"></i></a>
                            {{-- <a href="{{ route('bai-viet.edit',$baiviet->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a> --}}
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa bài viết chứ ?? Bạn suy nghỉ kỉ chưa.??')" href="{{ route('admin.deleteBaiviet',$baiviet->id)}} " class="btn btn-primary">
                                <i class="fa fa-trash"></i></a>
                            {{-- <a href="{{ route('admin.deleteBaiviet',$baiviet->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a> --}}

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
<div class="float-right">
    {{ $baiviets->links() }}
</div>
@endsection
