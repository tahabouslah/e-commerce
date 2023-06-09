<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


class ProductController extends Controller
{
    public function index(){
        $data = product::all();
        return view("product", ['products' => $data]);
    }

    public function detail($id){
        $dt = Product::find($id);
        return view("details", ["product"=>$dt]);
    }


    public function search(Request $req) {
       
        $data = product::where('name', 'like', '%'.$req->input('query'). '%')->get();
        return view('search', ['product'=>$data]);
    }

    public function add_to_cart(Request $req) {
         if($req->session()->has("user")){
            $cart = new Cart;
            $cart->user_id = $req->session()->get("user")['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
         }else {
            return redirect('/login');
         }
        
    }
}
