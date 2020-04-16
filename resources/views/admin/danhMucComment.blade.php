@extends('home')
@section('admin_content')
<div class="container">
<br>
<br>
    <h2 style="color:red;">Quản Lý Comment</h2>
    {{-- <form action="{{route('customers.search')}}" method="get">
        <input type="search"  name="key" class="form-control" placeholder="Nhập từ khóa...">
    </form>
<a href="{{Route('customers.create')}}" class="btn btn-success"><i class="fa fa-plus-square"> Create</i></a>
@if(Session::has('successCreate'))
<p class="alert alert-info">{{ Session::get('successCreate') }}</p>
@endif --}}


    <div>
        <table id="tbProduct" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Người dùng</th>
                    <th>Nội dung</th>
                    <th>Bài viết</th>
                    <th>Ngày đăng</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comment as $com)
            <tr class="table table-striped">
                <td>{{$com->user->name}}</td>
                <td>{{$com->content}}</td>
                <td>{{$com->baiviet->title}}</td>
                <td>{{$com->created_at}}</td>

                <td>
                    {{-- <a  onclick="return confirm('Bạn đã chắc chưa?')" href="{{Route('customers.destroy',$cus->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a> --}}
                    {{-- <a href="{{ route('QuanCfNgon.destroy',$quan->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a> --}}

            </td>

            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

