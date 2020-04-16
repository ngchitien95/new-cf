<?php
namespace App\Http\Controllers;
use App\Product;
use Cart;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckOutController extends Controller
{
    public function payment(){
        return view('page.payment.payment');
    }
}
