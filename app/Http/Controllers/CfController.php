<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('cf.trangChuCf', ['cfs' => Product::paginate(6)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cf.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateAttribute();
        // $atri = $request->all();
        // dd($atri);
        $image = request('image');
        $image = base64_encode(file_get_contents($image));
        $image = 'data:image/png;base64,' . $image;
        // return $image;

        $cf = new Product();
        // $cf->create($this->validateAttribute());
        $cf->name = $request->input('name');
        $cf->content = $request->input('content');
        $cf->image = $image;
        $cf->description = $request->input('description');
        $cf->promotion_price = $request->input('promotion_price');
        $cf->unit = $request->input('unit');
        $cf->id_type = $request->input('type');
        $cf->save();

        //dung session de dua ra thong bao
      Session::flash('success', 'Tạo mới bài viết thành công');
      //tao moi xong quay ve trang cf
      return redirect()->route('admin.danhMucSp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cf = Product::find($id);
           return view('cf.profile',compact('cf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cf = Product::findOrFail($id);
        return view('cf.edit', compact('cf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $val = request()->validate([
            'name' => 'required|min:5',
            'content' => 'required',
            'description' => 'required',
            'promotion_price' => 'required',
            'unit' => 'required',
            'image'  => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);


        $cf = Product::findOrFail($id);
        $cf->update($val);
        // $cf->update($this->validateAttribute());
        $cf->name = $request->input('name');
        $cf->content = $request->input('content');
        // $cf->image = $image;
        $cf->description = $request->input('description');
        $cf->promotion_price = $request->input('promotion_price');
        $cf->unit = $request->input('unit');
        $cf->id_type = $request->input('type');
        if($request->hasFile('image')){
            // $image = request('image');
            $file = $request->file('image');
            $image = base64_encode(file_get_contents($file));
            $image = 'data:image/png;base64,' . $image;
            $cf->image = $image;
        }
            $cf->image = $cf->image;

        $cf->save();


        //dung session de dua ra thong bao
        Session::flash('successUpdate', 'Cập nhật sản phẩm thành công');
        //cap nhat xong quay ve trang cf
        return redirect()->route('admin.danhMucSp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $cf = Product::findOrFail($id);
    //     $cf->delete();

    //     //dung session de dua ra thong bao
    //     Session::flash('success', 'Xóa sản phẩm thành công');

    //     //xoa xong quay ve trang danh sach bài viết
    //     return redirect()->route('admin.danhMucSp');
    // }

    public function validateAttribute(){
        return request()->validate([
            'name' => 'required|min:5',
            'content' => 'required',
            'description' => 'required',
            'promotion_price' => 'required',
            'unit' => 'required',
            'image'  => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]
    );
    }

    public function search(){
        $keyword = request('key');
        $products = Product::where('name', 'like' , '%'.$keyword.'%')->get();
        return view('cf.search', compact('products'));
    }
}
