<?php

namespace App\Http\Controllers;

use App\Models\OtherImages;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowProducts extends Controller
{
    public $openedOther=[];

    //
    public function getProducts($id){
        $openedOther=DB::table('other_images')
            ->join('products','products.id','other_images.product_id')
            ->where('products.productSlug',$id)
            ->get();

        $related=DB::table('products')
            ->where('products.productSlug','!=',$id)
            ->inRandomOrder()
            ->take(4)
            ->get();





        return view('product')->with('openedProd',Product::where('productSlug',$id)
                ->first())->with(['openedOther'=>$openedOther,'related'=>$related]);
    }
}
