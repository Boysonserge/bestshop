<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    //
    use WithPagination;
    public $openedCategory;
    public $myProds;
    public $perPage=1;

    public function index($product_slug){
        $this->openedCategory=Category::where('category_slug',$product_slug)
            ->firstOrFail();
        $this->myProds =Category::orderBy('id')->with('products')->where('category_slug',$product_slug)
            ->paginate();


        return view('category',
            ['openedCategory'=>$this->openedCategory,
                'myProds'=>$this->myProds]);
    }


}
