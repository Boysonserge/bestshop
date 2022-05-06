<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Test extends Controller
{
    public $title = "Add product";
    public $content;
    public $showFormVisible = false;
    public $productName,
        $productPrice,
        $productImage,
        $productOtherImage,
        $productCode,
        $productSlug,
        $productDescription,
        $productCategory,
        $productVideo;
    public $allProducts;

    public $testValue = 1;
    //
    public function store(Request $request)
    {
        $products = Product::findOrFail($request->input('product_id'));
        Cart::add($products->id,
            $products->productName,
            1,
            $products->productPrice,
        );
        return redirect()->route('home')->with('message', 'Product added to the cart');
    }

    public function deleteCart($rowId){
        Cart::remove($rowId);
    }


    public function testAdd(Request $request)
    {
        $validates = $request->validate([
            'productName' => 'required|string',
            'productCode' => 'required|integer',
            'productSlug' => 'required',
            'productPrice' => 'required|integer',
            'productDescription' => 'required|string',
            'productCategory' => 'required|string',
            'productVideo' => 'required|string'
        ]);
        $pmame = $validates['productName'];
        $count = Str::wordCount($pmame);

        if ($count > 1) {
            $this->productSlug = Str::slug($pmame);
        } else {
            $n = $pmame . " original";
            $this->productSlug = Str::slug($n);
        }


        $prooo = Product::create([
            'productName' => $validates['productName'],
            'productCode' => "Prod" . uniqid(),
            'productSlug' => $this->productSlug,
            'productPrice' => $validates['productPrice'],
            'productDescription' => $validates['productDescription'],
            'productCategory' => $validates['productCategory'],
            'productVideo' => $validates['productVideo'],

        ]);
    }
}
