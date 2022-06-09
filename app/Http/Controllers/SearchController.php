<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class SearchController extends Controller
{
    public $searchQuery;
    use WithPagination;


    public function index(){

    }

    public function search(Request $request){
        $this->searchQuery=Product::with('categories')
        ->where('productName','like',"%".$request->searchQuery."%")
            ->paginate(10);
//        dd($this->searchQuery);
        return view('search',
            ['search'=>$this->searchQuery,
                'query'=>$request->searchQuery]);

    }
}
