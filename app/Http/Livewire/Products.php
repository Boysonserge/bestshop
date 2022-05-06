<?php

namespace App\Http\Livewire;

use App\Models\OtherImages;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use function Livewire\str;

class Products extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title = "Add product";
    public $content;
    public $showFormVisible = false;
    public $productName,

        $productPrice,
        $productImage,
        $productOtherImage,
        $productCode,
        $productDescription,
        $productCategory,
        $productVideo;
    public $allProducts;
    public $productSlug;

    public $testValue = 1;


    public function  resetInputs(){
        $this->productName='';
        $this->productPrice='';
    }


    public function createShowModal(){
        $this->showFormVisible=true;
    }



    public function addProduct(Request $request ){
        $validates=$this->validate([
            'productName'=>'required|string|unique:products',
            'productPrice'=>'required|integer',
            'productImage'=>'image|max:10240',
            'productDescription'=>'required|string|max:3000',
            'productVideo'=>'string',
            'productCategory'=>'array'
        ]);


        $prod=$this->productImage->store('photos');
        $validates['productImage']=$prod;
        $prodCode=strtoupper("Prod-".uniqid());
        $categories="";
        foreach ($validates['productCategory'] as $cat=>$value){
            $categories .=$value.",";
        }

        $prooo=Product::create([
            'productName'=>$validates['productName'],
            'productPrice'=>$validates['productPrice'],
            'productImage'=>$prod,
            'productCode'=>$prodCode,
            'productSlug'=>Str::slug($validates['productName']),
            'productDescription'=>$validates['productDescription'],
            'productVideo'=>$validates['productVideo'],
            'productCategory'=>$categories
        ]);
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
        sleep(2);
        $this->showFormVisible=false;
    }


    public function deleteProduct($id){
        Product::where('id',$id)
            ->delete();
        session()->flash('message','Product deleted');
    }




    public function render()
    {
        $prods=Product::orderBy('id','DESC')->paginate(10);
        return view('livewire.products',['myProds'=>$prods]);
    }
}
