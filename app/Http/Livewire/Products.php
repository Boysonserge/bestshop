<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Color;
use App\Models\OtherImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use function Livewire\str;
use function PHPUnit\Framework\isNan;

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
        $productVideo;
    public $allProducts;
    public $productCategory=[];
    public $productSlug;
    public $allCategories;
    public $allColors;

    public $productColor;
    public $desc;

    public $testValue = 1;


    public $prodId;

public $selected;


    public function mount(){
        $this->allCategories=Category::all();
        $this->allColors=Color::all();
        $this->productCategory=["Coffee materials","hide"];

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
        $this->selected=123;
        $this->productName = $data->productName;
        $this->productPrice = $data->productPrice;
        $this->desc = $data->productDescription;
        $this->productCategory=$data->categories()->get();
        $cats="";
        foreach ($this->productCategory as $pr => $value){
            $cats .=$value->id.",";
        }
        $cats=substr($cats,0,-1);
        $cats=explode(',',$cats);

        $this->productCategory=$cats;

        $this->productVideo = $data->productVideo;
        $this->productDescription=$data->productDescription;
        $this->prodId = $data->id;
    }


    public function updateProduct(){
        $categories="";
        $colors='';

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
            ]);

        $prod=Product::find($this->prodId);
        $prod->categories()->sync($this->productCategory);

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


        $file=$validates['productImage'];
        $img=Image::make($file);
        $img->insert("images/watermark.png",'center',10,10);
        $uni=uniqid();
        $img->save(storage_path("app/photos/$uni.".$file->extension()),70);
        $prod="photos/".$uni.".".$file->extension();
        $validates['productImage']=$prod;
        $prodCode=strtoupper("Prod-".uniqid());
        $colors='';

        foreach ($validates['productColor'] as $color=>$value){
            $colors .=$value.",";
        }

        $product = new Product();
        $product->productName = $validates['productName'];
        $product->productPrice = $validates['productPrice'];
        $product->productImage = $prod;
        $product->productCode = $prodCode;
        $product->productColor = $colors;
        $product->productSlug = Str::slug($validates['productName']);
        $product->productDescription = $validates['productDescription'];
        $product->productVideo = $validates['productVideo'];
        $product->save();
        $cats=$validates['productCategory'];
        $product->categories()->attach($cats);


        $p=$product->id;

        foreach ($this->productOtherImage as $item) {
            $file=$item;
            $img=Image::make($file);
            $img->insert("images/watermark.png",'center',10,10);
            $uni=uniqid();
            $img->save(storage_path("app/others/$uni.".$file->extension()),70);
            $prod="others/".$uni.".".$file->extension();
            $photo=$prod;
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
        $prod=Product::find($id);
        $prod->categories()->detach();
        $prod->delete();

        session()->flash('message','Product deleted');
    }




    public function render()
    {
        $prods=Product::orderBy('id','DESC')->paginate(10);
        return view('livewire.products',['myProds'=>$prods]);
    }
}
