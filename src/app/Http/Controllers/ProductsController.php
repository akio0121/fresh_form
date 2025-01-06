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
        $products = Product::Paginate(6);
        return view('products', ['products' => $products]);
    }

    //商品登録画面の表示
    public function register()
    {
        return view('register');
    }

    //登録ボタンを押下後、DBにデータを追加して商品一覧画面に戻る
    public function create(ProductsRequest $request)
    {
        $form = $request->all();
        Product::create($form);
        return redirect('/');
    }

    //商品詳細画面の表示
    public function productId()
    {
        return view('productId');
    }

    //検索画面の表示
    public function search(Request $request)
    {
        $searchword = $request->searchword;
        return view('/search',['searchword'=>$searchword]);
    }
}
