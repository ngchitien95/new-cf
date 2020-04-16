<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\ProductType;

class PageController extends Controller
{

    public function getIndex(){
        // $new_productType = ProductType::all();
        $new_productType1 = ProductType::where('id',1)->get();
        // dd($new_productType1);
        $new_productType2 = ProductType::where('id',2)->get();
        $new_product = Product::where('id_type',1)->get();
        $new_product2 = Product::where('id_type',2)->get();


        return View('trangchu',compact('new_productType1','new_productType2','new_product','new_product2'));

    }

    public function cfType($id){
        $new_productType = ProductType::where('id',$id)->get();
        // $new_productType2 = ProductType::where('id',2)->get();
        // $new_product1 = Product::where('id_type',1)->get();
        $new_product = Product::where('id_type',$id)->get();

        return View('cf.showProducType',compact('new_productType','new_product'));

    }


    public function getQuanCfNgon(){
        return View('page.quancfngon');
    }

    public function getCf(){
        return View('page.cf');
    }
    public function getBaiViet(){
        return View('page.bai-viet');
    }
    public function getLienHe(){
        return View('page.lien-he');
    }
}
