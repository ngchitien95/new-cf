<?php

namespace App\Http\Controllers;

use App\ProductType;
use App\QuanCfNgon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class QuanCfNgonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // $new_productType = ProductType::all();
        // $quancfngon = QuanCfNgon::all();
        // dd($new_productType);

        // return View('quanCfNgon.trangChu',compact('quancfngon'));
        return View('quanCfNgon.trangChu', ['quancfngon' => QuanCfNgon::latest()->paginate(2)]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanCfNgon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = request('image');
        $image = base64_encode(file_get_contents($image));
        $image = 'data:image/png;base64,' . $image;
        // return $image;

        $quancfngon = new QuanCfNgon();
        $quancfngon->title = $request->input('title');
        $quancfngon->content = $request->input('content');
        $quancfngon->image = $image;
        $quancfngon->describe = $request->input('describe');
        $quancfngon->save();

        //dung session de dua ra thong bao
      Session::flash('successCreate', 'Tạo mới quán cà phê thành công');
      //tao moi xong quay ve trang quán cf ngon
      return redirect()->route('admin.danhMucQuanCf');

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
         $cfs = QuanCfNgon::find($id);
            return view('quanCfNgon.profile',compact('cfs','productType'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quancfngon = QuanCfNgon::findOrFail($id);
        return view('quanCfNgon.edit', compact('quancfngon'));
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


        $quancfngon = QuanCfNgon::findOrFail($id);
        $quancfngon->title = $request->input('title');
        $quancfngon->content = $request->input('content');
        // $quancfngon->image = $image;
        $quancfngon->describe = $request->input('describe');
        if($request->hasFile('image')){
            $image = base64_encode(file_get_contents($request->file('image')));
            $image = 'data:image/png;base64,' . $image;
            $quancfngon->image = $image;
        }
        $quancfngon->save();


        //dung session de dua ra thong bao
        Session::flash('successUpdate', 'Cập nhật quán cà phê ngon thành công');
        //cap nhat xong quay ve trang quán cf ngon
        return redirect()->route('admin.danhMucQuanCf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quancfngon = QuanCfNgon::findOrFail($id);
        $quancfngon->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach quán cf ngon
        return redirect()->route('admin.danhMucQuanCf');

    }
}
