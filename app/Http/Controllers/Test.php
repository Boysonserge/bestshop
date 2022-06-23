<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
            $request->input('quantity'),
            $products->productPrice,
        );
        return redirect()->route('home')->with('message', 'Product added to the cart');
    }

    public function deleteCart($rowId){
        Cart::remove($rowId);
    }


    public function testAdd(Request $request)
    {
        $img=Image::make($request->file('filename'));
        $img->insert("images/watermark.png",'center',10,10);
        $img->save(public_path('images/new-image.png'));
        return "saved";
    }
}
