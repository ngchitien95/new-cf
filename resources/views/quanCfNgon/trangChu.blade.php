@extends('layouts.app')
@section('content')
<br>
{{-- <div class="main"> --}}
    <div class="container">

        <!-- BEGIN SIDEBAR & CONTENT -->
        {{-- <div class="row margin-bottom-40"> --}}
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-8 col-sm-8 blog-posts">
                            @foreach ($quancfngon as $quan)
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img class="img-responsive" height="200" width="200" alt="" src="{{$quan->image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2 ><a href="{{ route('quan-cf-ngon.show', $quan->id) }}">{{ $quan->title}}</a></h2>
                                            <ul class="blog-info">
                                                {{-- <li><i class="fa fa-user"></i> Thảo</li>
                                                <li><i class="fa fa-calendar"></i> 18/10/2019</li>
                                                <li><i class="fa fa-eye"></i> 0</li> --}}
                                            </ul>
                                            <p>{{ $quan->describe}}</p>
                                            <a class="btn btn-success" href= "{{ route('quan-cf-ngon.show', $quan->id) }}"  >Đọc tiếp </a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">
                            @endforeach

                        </div>
                        <!-- END LEFT SIDEBAR -->
                        <!-- BEGIN RIGHT SIDEBAR -->
                        {{-- <div class="col-md-4 col-sm-4 blog-sidebar">
                            <!-- CATEGORIES START -->

                            <!-- CATEGORIES END -->
                            <!-- BEGIN RECENT NEWS -->
                            <h5>Thiết kế trang web</h5>
                            <h2>Mr Tiến: 0935 096 425</h2>

                            <div class="recent-news margin-bottom-10">
                                    <p></p>

                            </div>
                            <!-- END RECENT NEWS -->
                            <hr />
                            <!-- BEGIN MOST READ -->
                            <h5>HÃY GHÉ THĂM XƯỞNG RANG CỦA CHÚNG TÔI TẠI:</h5>
                            <div class="recent-news margin-bottom-10">
                                    <p>Địa chỉ: 118 Lý Nam Đế, phường Kim Long, thành phố Huế, TT Huế, Việt Nam
                                    </p>
                            </div>
                            <!-- END MOST READ -->
                        </div> --}}
                        <!-- END RIGHT SIDEBAR -->
                    </div>
                </div>
                {{ $quancfngon->links() }}

            </div>
            <!-- END CONTENT -->
        {{-- </div> --}}
        <!-- END SIDEBAR & CONTENT -->
    </div>
{{-- </div> --}}

@endsection
