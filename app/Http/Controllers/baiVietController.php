<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class baiVietController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $baiviet = BaiViet::paginate(3);

        // return View('baiViet.trangChuBaiViet',compact('baiviet'));
        return View('baiViet.trangChuBaiViet', ['baiviet' => BaiViet::latest()->paginate(2)]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baiViet.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,
        //     [
        //     'title' => 'required',
        //     'content' => 'required',
        //     'describe' => 'required'
        //     ],
        //     ['title.required' => 'Vui lòng nhập title',
        //     'content.required' => 'Vui lòng nhập content',
        //     'describe.required' => 'Vui lòng nhập describe']);

        $image = request('image');
        $image = base64_encode(file_get_contents($image));
        $image = 'data:image/png;base64,' . $image;
        // return $image;

        $baiViet = new BaiViet();
        // $baiViet->create($this->validateAttribute());
        $baiViet->title = $request->input('title');
        $baiViet->content = $request->input('content');
        $baiViet->image = $image;
        $baiViet->describe = $request->input('describe');
        $baiViet->save();

        //dung session de dua ra thong bao
      Session::flash('successCreate', 'Tạo mới bài viết thành công');
      //tao moi xong quay ve trang bai viet
      return redirect()->route('admin.danhMucBaiviet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productType = ProductType::all();
        $baiViet = BaiViet::find($id);
           return view('baiViet.profile',compact('baiViet','productType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baiViet = BaiViet::findOrFail($id);
        return view('baiviet.edit', compact('baiViet'));
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
    //     $this->validate($request,
    //         [
    //         'title' => 'required',
    //         'content' => 'required',
    //         'describe' => 'required'
    //     ],
    //     ['title.required' => 'Vui lòng nhập title',
    //     'content.required' => 'Vui lòng nhập content',
    //     'describe.required' => 'Vui lòng nhập describe']
    // );
        $baiViet = BaiViet::findOrFail($id);
        // $baiViet->update($this->validateAttribute());
        $baiViet->title = $request->input('title');
        $baiViet->content = $request->input('content');
        $baiViet->describe = $request->input('describe');
        if($request->hasFile('image')){
            $image = base64_encode(file_get_contents($request->file('image')));
            $image = 'data:image/png;base64,' . $image;
            $baiViet->image = $image;
        }
        $baiViet->save();


        //dung session de dua ra thong bao
        Session::flash('successUpdate', 'Cập nhật bài viết thành công');
        //cap nhat xong quay ve trang bài viết
        return redirect()->route('admin.danhMucBaiviet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $baiViet = BaiViet::findOrFail($id);
    //     $baiViet->delete();

    //     //dung session de dua ra thong bao
    //     Session::flash('success', 'Xóa bài viết thành công');

    //     //xoa xong quay ve trang danh sach bài viết
    //     return redirect()->route('admin.danhMucBaiviet');
    // }


}
