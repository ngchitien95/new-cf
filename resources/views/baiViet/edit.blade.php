@extends('home')
@section('admin_content')

<div class="col-12 col-md-12">

    <div class="row">
       <div class="col-12"><h1>CHỈNH SỬA BÀI VIẾT   </h1></div>
       <div class="col-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('bai-viet.update', $baiViet->id) }}">
          @csrf
          <div class="form-group">
          <label>Tiêu đề</label>
          <input type="text" class="form-control" name="title" value="{{ $baiViet->title }}" required>
          </div>
          <div class="form-group">
             <label>Miêu tả</label>
             <input type="text" class="form-control" name="describe" value="{{ $baiViet->describe }}" required></div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nội Dung</label>
             <textarea name="content" id="editor" class="form-control"> {{ $baiViet->content }} </textarea>
             {{-- <input type="text" class="form-control" name="content" value="{{ $baiViet->content }}" required> --}}
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Photo</label>
            <img src="{{ $baiViet->image }}" alt="" height="50px" width="50px" >
            <input type="file" name="image" class="form-control-file" >
     </div>

          <button type="submit" class="btn btn-outline-danger">Chỉnh sửa</button>
          <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
       </form>
       </div>
      </div>
 </div>

 <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
 <script>
     CKEDITOR.replace( 'editor' );
     CKEDITOR.config.entities = false;
     CKEDITOR.config.height = 500;
 </script>

 @endsection
