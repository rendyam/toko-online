<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function showAll()
    {
        $data_product_dari_model = Product::all();
        return view('product.display', ["products" => $data_produk_dari_model]);
    }

    public function saveNew()
    {

    }

    public function show($id)
    {

    }

    public function create(Request $request)
    {
        $data = $request->all();

        $data = $request->except(["_token", "field_lain"]);

        $product_name = $request->get("product_name");
        $product_stock = $request->get("stock");
        $product_desc = $request->get("description");
        $product_price = $request->get("price");
    }

    public function search(Request $request)
    {
        $keyword = $request->get("product_name");
    }
}
