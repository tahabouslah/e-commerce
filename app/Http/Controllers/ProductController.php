<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
