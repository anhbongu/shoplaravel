<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use DB;

class HomeController extends MainController
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $product_new    = ProductModel::where('pro_active', 1)->orderby('id', 'desc')->limit(6)->get();
        $article        = DB::table('articles')->where('a_active', 1)->limit(3)->get();

        $pro_sale       = DB::table('products')->where('pro_active', 1)->orderby('pro_sale', 'desc')->limit(5)->get();


        $best_selling_products = DB::table('products')->where('pro_active', 1)->orderby('pro_hot', 'desc')->limit(6)->get();
        return view('home.index', [
            'product_new'=>$product_new,
            'article'=>$article,
            'pro_sale'=>$pro_sale, 
            'best_selling_products'=>$best_selling_products
        ]);
    }
}
