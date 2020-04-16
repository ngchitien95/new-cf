@extends('layouts.app')
@section('content')
<br>
<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-8 col-sm-8 blog-posts">
                            @foreach ($baiviet as $post)
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" alt="" height="200" width="200" src="{{$post->image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href={{ route('bai-viet.show', $post->id) }}>{{$post->title}}</a></h2>
                                            <ul class="blog-info">
                                                {{-- <li><i class="fa fa-user"></i> Thảo</li> --}}
                                                <li><i class="fa fa-calendar"></i>{{$post->created_at}}</li>
                                                {{-- <li><i class="fa fa-eye"></i> 18</li> --}}
                                            </ul>
                                            <p>{{$post->describe}}</p>
                                            <a class="btn btn-success" href={{ route('bai-viet.show', $post->id) }} class="more">Đọc tiếp</a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                            @endforeach

                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ $baiviet->links() }}


@endsection
