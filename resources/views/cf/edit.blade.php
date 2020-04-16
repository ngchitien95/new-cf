@extends('home')
@section('admin_content')


<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>CHỈNH SỬA SẢN PHẨM </h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('cf.update', $cf->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="{{ $cf->name }}" >
                    @error('name')
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Miêu tả</label>
                    <input type="text" class="form-control" name="description" value="{{ $cf->description }}" >
                    @error('description')
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea cols="30" rows="10" class="form-control" name="content"
                        >{{ $cf->content }}</textarea>
                    @error('content')
                    <p class="text-danger">{{ $errors->first('content') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>giá</label>
                    <input type="text" class="form-control" name="promotion_price" value="{{ $cf->promotion_price }}"
                        >
                    @error('promotion_price')
                    <p class="text-danger">{{ $errors->first('promotion_price') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control" name="type" id="">
                        @foreach (App\ProductType::all() as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>đơn vị</label>
                    <input type="text" class="form-control" name="unit" value="{{ $cf->unit }}" >
                    @error('unit')
                    <p class="text-danger">{{ $errors->first('unit') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Photo</label>
                    <img src="{{ $cf->image }}" alt="" height="50px" width="50px">
                    <input type="file" name="image" class="form-control-file">
                    @error('image')
                    <p class="text-danger">{{ $errors->first('image') }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-outline-danger">Chỉnh sửa</button>
                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>

@endsection
