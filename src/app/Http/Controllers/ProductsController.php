<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;

class ProductsController extends Controller
{
    //商品一覧画面の表示
    public function products()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    //商品登録画面の表示
    public function register()
    {
        return view('register');
    }
}
