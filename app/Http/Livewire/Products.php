<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Color;
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
    public $showFormVisible2 = false;

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
    public $allCategories;
    public $allColors;

    public $productColor;
    public $desc;

    public $testValue = 1;


    public $prodId;



    public function mount(){
        $this->allCategories=Category::all();
        $this->allColors=Color::all();
    }


    public function  resetInputs(){
        $this->productName='';
        $this->productPrice='';
        $this->productColor='';
    }


    public function createShowModal(){
        $this->showFormVisible=true;
    }

    public function createShowModal2($id)
    {
        $this->showFormVisible2 = true;
        $data = Product::find($id);
        $this->productName = $data->productName;
        $this->productPrice = $data->productPrice;
        $this->desc = $data->productCategory;
        $this->productCategory = $data->productCategory;
        $this->productVideo = $data->productVideo;
        $this->productDescription=$data->productDescription;
        $this->prodId = $data->id;
    }


    public function updateProduct(){
        $categories="";
        $colors='';
        if (gettype($this->productCategory)=="array"){
            foreach ($this->productCategory as $cat=>$value){
                $categories .=$value.",";
            }
        }elseif (gettype($this->productCategory)=="string"){
            $categories=$this->productCategory;
        }



        if (gettype($this->productColor)=="array"){
            foreach ($this->productColor as $color=>$value){
                $colors .=$value.",";
            }
        }elseif (gettype($this->productColor)=="string"){
            $colors=$this->productColor;
        }



        Product::where('id',$this->prodId)
            ->update([
                'productName'=>$this->productName,
                'productPrice'=>$this->productPrice,
                'productDescription'=>$this->productDescription,
                'productVideo'=>$this->productVideo,
                'productColor'=>$colors,
                'productCategory'=>$categories
            ]);
        session()->flash('message','Product updated');
        $this->showFormVisible2=false;
    }



    public function addProduct(Request $request ){
        $validates=$this->validate([
            'productName'=>'required|string|unique:products',
            'productPrice'=>'required|integer',
            'productImage'=>'image|max:10240',
            'productDescription'=>'required|string|max:3000',
            'productVideo'=>'string',
            'productCategory'=>'array',
            'productColor'=>'array'
        ]);


        $prod=$this->productImage->store('photos');
        $validates['productImage']=$prod;
        $prodCode=strtoupper("Prod-".uniqid());
        $categories="";
        $colors='';
        foreach ($validates['productCategory'] as $cat=>$value){
            $categories .=$value.",";
        }
        foreach ($validates['productColor'] as $color=>$value){
            $colors .=$value.",";
        }

        $prooo=Product::create([
            'productName'=>$validates['productName'],
            'productPrice'=>$validates['productPrice'],
            'productImage'=>$prod,
            'productCode'=>$prodCode,
            'productColor'=>$colors,
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
