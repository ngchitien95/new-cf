<?php

namespace App\Http\Controllers;
use App\Product;
// use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class CartController extends Controller
{
    public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quantity = $request->qty;

        $product_info= product::find($productId);

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        // return $product_info;

        $data['id'] = $productId;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->name;
        $data['price'] = $product_info->promotion_price;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->image;
        Cart::add($data);
        return redirect()->back();
    }

    public function show_cart(){
        return view('page.cart');

    }

    public function destroy()
    {
        Cart::destroy();

        return redirect()->route('trang-chu');
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');

    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');

    }
    //lấy thông tin từ users vào khách hàng




}
