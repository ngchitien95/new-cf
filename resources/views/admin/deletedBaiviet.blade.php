
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
            <h2>Các bài viết đã xóa</h2>
            <div class="mt-2">
                <table id="tbProduct" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên bài viết</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deleted as $del)
                    <tr>
                        <td class="text-light bg-dark">{{$del->title}}</td>
                        <td class="text-light bg-dark">
                            {{-- <a href="{{ route('bai-viet.edit',$baiviet->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a> --}}
                            <a href="{{ route('admin.restoreBaiviet',$del->id)}}" class="btn btn-primary" ><i>Khôi phục</i></a>

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
