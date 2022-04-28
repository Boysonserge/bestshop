<?php

namespace App\Http\Livewire;

use App\Models\OtherImages;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class Products extends Component
{
    use WithFileUploads;

    public $title="Add product";
    public $content;
    public $showFormVisible=false;
    public $productName,$productPrice,$productImage,$productOtherImage;
    public $allProducts;

    public $testValue=1;


    public function  resetInputs(){
        $this->productName='';
        $this->productPrice='';
    }


    public function createShowModal(){
        $this->showFormVisible=true;
    }



    public function addProduct(Request $request ){
            $validates=$this->validate([
                'productName'=>'required|string',
                'productPrice'=>'required|integer',
                'productImage'=>'image|max:10240'
            ]);




        $prod=$this->productImage->store('photos');
        $validates['productImage']=$prod;
        $prooo=Product::create($validates);
        $p=$prooo->id;

        foreach ($this->productOtherImage as $item) {
            $photo=$item->store('others');
            OtherImages::create([
                'product_id'=>$p,
                'imagePath'=>$photo
            ]);
        }

        session()->flash('message',"Product added! ");
        $this->resetInputs();
    }




    public function render()
    {
        $prods=Product::orderBy('id','DESC')->get();
        return view('livewire.products',['myProds'=>$prods]);
    }
}
