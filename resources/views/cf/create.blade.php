
@extends('home')
@section('admin_content')


<div class="col-12 col-md-12">
    <div class="row">
       <div class="col-12">
           <h1> Thêm Mới Sản Phẩm</h1>
       </div>
       <div class="col-12">
          <form method="post" action="{{ route('cf.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
             <label>Tên sản phẩm</label>
             <input type="text" class="form-control" name="name"  placeholder="Nhập tên sản phẩm" >
             @error('name')
             <p class="text-danger">{{ $errors->first('name') }}</p>
             @enderror
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Miêu Tả</label>
              <input type="text" class="form-control" name="description" placeholder="Nhập Miêu tả" >
              @error('description')
              <p class="text-danger">{{ $errors->first('description') }}</p>
              @enderror
            </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Nội Dung</label>
             <textarea cols="30" rows="10" class="form-control" name="content" placeholder="Nhập Nội dung"></textarea>
             @error('content')
             <p class="text-danger">{{ $errors->first('content') }}</p>
             @enderror
            </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input type="text" class="form-control" name="promotion_price" placeholder="Nhập giá sản phẩm" >
            @error('promotion_price')
             <p class="text-danger">{{ $errors->first('promotion_price') }}</p>
             @enderror
        </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Loại sản phẩm</label>
            <select class="form-control" name="type" id="">
                @foreach (App\ProductType::all() as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Đơn vị </label>
            <input type="text" class="form-control" name="unit" placeholder="Nhập đơn vị" >
            @error('unit')
             <p class="text-danger">{{ $errors->first('unit') }}</p>
             @enderror
        </div>

          <div class="form-group">
                <label for="exampleFormControlFile1">Photo</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                @error('image')
                <p class="text-danger">{{ $errors->first('image') }}</p>
                @enderror
            </div>
          <button type="submit" class="btn btn-danger">XÁC NHẬN</button>
          </form>
        </div>
      </div>
    </div>

    @endsection
