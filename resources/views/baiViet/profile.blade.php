@extends('layouts.app')
@section('content')
<br>
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
                        <div class="col-md-8 col-sm-8 blog-item">
                        <h2 class="text-primary">{{$baiViet->title}}</h2>
                            <ul class="blog-info">
                                {{-- <li><i class="fa fa-user"></i> Thảo</li> --}}
                            <li><i class="fa fa-calendar"></i> {{$baiViet->created_at}}</li>
                                {{-- <li><i class="fa fa-eye"></i> 0</li> --}}
                            </ul>

                            {{-- <img src="{{$baiViet->image}}" height="200" width="200" alt=""> --}}


                        <p><span style="color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: bold;">{!! $baiViet->content !!}</a></span><br></p>

                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                        <br>
                        <br>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

                        <div class="pt-5 mt-5">
                            <h3 class="mb-5"><span class="glyphicon glyphicon-comment"></span> Comments
                                ({{ $baiViet->commentBaiviet()->count() }}) </h3>
                            @foreach($baiViet->commentBaiviet as $comment)
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}"
                                            class="author-image">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <div class="meta mb-3">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</div>
                                        <p>{{ $comment->content }}</p>
                                        {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                                    </div>
                                </li>
                            </ul>
                            @endforeach

                        <div class="col-md-8 col-sm-8 blog-posts pt-5">
                            <h3 class="mb-5">Bình luận</h3>
                            <form action="{{ route('comment.store', $baiViet->id)}}" method="POST" class="p-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label style="color : red">Message*</label>
                                    <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                                    {{-- @error('comment')
                                     <p class="text-danger">{{ $errors->first('comment') }}</p>
                                    @enderror --}}
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>

                        </div>


                    </div>
                        <!-- END LEFT SIDEBAR -->
                        <!-- BEGIN RIGHT SIDEBAR -->
                        <div class="col-md-4 col-sm-4 blog-sidebar">

                            <hr />
                            <!-- BEGIN MOST READ -->
                        <h2 class="text-danger">Loại sản phẩm</h2>
                            <div class="recent-news margin-bottom-10">
                                @foreach ($productType as $product)
                                        <div class="row margin-bottom-10">
                                                <h3><a href="{{route('cf.cfType',$product->id)}}">{{$product->name}}</a></h3>
                                                <p>{{$product->description}}</p>

                                        </div>
                                @endforeach


                            </div>
                            <!-- END MOST READ -->
                        </div>
                        <!-- END RIGHT SIDEBAR -->
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>


        <!-- BEGIN STEPS -->

@endsection
