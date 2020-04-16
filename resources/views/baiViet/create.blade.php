
@extends('home')
@section('admin_content')


<div class="col-12 col-md-12">
    <div class="row">
       <div class="col-12">
           <h1> Thêm Mới Bài Viết</h1>
       </div>
       <div class="col-12">
          <form method="post" action="{{ route('bai-viet.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
             <label>Tiêu đề</label>
             <input type="text" class="form-control" name="title"  placeholder="Nhập Tiêu đề" >
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Miêu Tả</label>
              <input type="text" class="form-control" name="describe" placeholder="Nhập Miêu tả" >
          </div>
          {{-- <div class="form-group">
             <label for="exampleInputEmail1">Nội Dung</label>
             <textarea  cols="30" rows="10" class="form-control" name="content" placeholder="Nhập Nội dung"></textarea>
          </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nội Dung</label>
               <textarea name="content" id="editor" class="form-control"></textarea>
           </div>
          <div class="form-group">
                <label for="exampleFormControlFile1">Photo</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
         </div>
          <button type="submit" class="btn btn-danger">XÁC NHẬN</button>
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
