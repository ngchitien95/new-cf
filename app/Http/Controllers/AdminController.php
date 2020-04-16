<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\QuanCfNgon;
use App\BaiViet;
use App\Bill;
use App\BillDetail;
use App\customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function danhMucSp(){
        return View('admin.danhMucSp', ['cfs' => Product::paginate(5)]);
    }
    public function danhMucQuanCf(){
        return View('admin.danhMucQuanCf', ['quanCf' => QuanCfNgon::paginate(5)]);
    }
    public function danhMucBaiviet(){
        return View('admin.danhMucBaiviet', ['baiviets' => baiviet::paginate(5)]);
    }
    public function quanLyDonHang(){
        return View('admin.quanLyDonHang', [ 'customers' => customer::all(),'bills' => Bill::all(), 'BillDetails' => BillDetail::all()]);

    }
    public function showDonHang($id){
        $bills = Bill::find($id);
        // $billdetais = BillDetail::find($id);
        // $customers = customer::find($id);
        // $products = Product::find($id);
           return view('admin.showDonHang',compact('bills'));
    }

    public function search(){
        $keyword = request('key');
        $customers = customer::where('name', 'like', '%'.$keyword.'%')->orWhere('address', 'like', '%'.$keyword.'%')->orWhere('phone_number', 'like', '%'.$keyword.'%')->get();
        $bills = Bill::all();
        return view('admin.search', compact('customers','bills'));

    }

    public function deleteProduct($id){
        Product::destroy($id);
            session::flash('delProduct', 'xóa sản phẩm thành công');
            return redirect()->back();

    }

    public function deletedProduct(){
        $deleted = Product::onlyTrashed()->get();
        return view('admin.deletedProduct', compact('deleted'));

    }
    public function restoreProduct($id){
        $restore = Product::onlyTrashed()->where('id', '=', $id)->restore();
        session::flash('restoreProduct', 'Khôi phục sản phẩm thành công');
        return redirect()->route('admin.danhMucSp');

    }
    public function deleteBaiviet($id){
        BaiViet::destroy($id);
            session::flash('delBaiViet', 'xóa bài viết thành công');
            return redirect()->back();
    }

    // public function deletedPost(){
    //     $deleted = BaiViet::onlyTrashed()->get();
    //     return view('admin.deletedBaiviet',compact('deleted'));
    // }

    public function deletedPost(){
        $deleted = BaiViet::onlyTrashed()->get();
        return view('admin.deletedBaiviet', compact('deleted'));
    }
    public function restoreBaiviet($id){
        BaiViet::onlyTrashed()->where('id', '=', $id)->restore();
        session::flash('restoreBaiviet', 'Khôi phục bài viết thành công');

        return redirect()->route('admin.danhMucBaiviet');

    }

    public function deleteQuanCfNgon($id){
            QuanCfNgon::destroy($id);
            session::flash('deleteQuanCfNgon', 'xóa quán cf ngon thành công');

            return redirect()->back();
    }



    public function deletedQuanCfNgon(){
        $deleted = QuanCfNgon::onlyTrashed()->get();
        return view('admin.deletedQuanCfNgon',compact('deleted'));
    }
    public function restoreQuanCfNgon($id){
        QuanCfNgon::onlyTrashed()->where('id', '=', $id)->restore();
        session::flash('restoreQuanCfNgon', 'Khôi phục quán cf ngon thành công');
        return redirect()->route('admin.danhMucQuanCf');
    }
    // thanh toán đơn hàng
     public function paymenBill($id){
        DB::table('bills')->where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function debit_order($id){
        DB::table('bills')->where('id', $id)->update(['status' => 1]);
        return redirect()->back();
    }

    // xóa và khôi phục đơn hàng
    public function deleteDonHang($id){
        Bill::destroy($id);
        customer::destroy($id);
        session::flash('message', 'xóa đơn hàng thành công');
        return redirect()->back();
    }

    public function deletedDonHang(){
        $customers = customer::onlyTrashed()->get();
        $bills = Bill::onlyTrashed()->get();
        return view('admin.deletedDonHang',compact('bills','customers'));
    }
    public function restoreDonHang($id){
        $restore = Bill::onlyTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('admin.quanLyDonHang');
    }


}
