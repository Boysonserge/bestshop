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

    public $productColor=[];
    public $desc;

    public $testValue = 1;


    public $prodId;

public $selected;


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

        Product::where('id',$this->prodId)
            ->update([
                'productName'=>$this->productName,
                'productPrice'=>$this->productPrice,
                'productDescription'=>$this->productDescription,
                'productVideo'=>$this->productVideo,
            ]);

        $prod=Product::find($this->prodId);
        $prod->categories()->sync($this->productCategory);
        $prod->colors()->sync($this->productColor);

        session()->flash('message','Product updated');
        $this->showFormVisible2=false;
    }



    public function addProduct(Request $request ){
        $validates=$this->validate([
            'productName'=>'required|string|unique:products',
            'productPrice'=>'required|integer',
            'productImage'=>'image|max:10240',
            'productDescription'=>'required|string|max:3000',
            'productVideo'=>'',
            'productCategory'=>'array',
            'productColor'=>'array'
        ]);

        $file=$validates['productImage'];

        $img=Image::make($file);
        $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $water=Image::make('images/watermark.png');
        $water->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->insert($water,'center',10,10);
        $uni=uniqid();
        $img->save(storage_path("app/photos/$uni.".$file->extension()),70);
        $prod="photos/".$uni.".".$file->extension();
        $validates['productImage']=$prod;
        $prodCode=strtoupper("Prod-".uniqid());


        $product = new Product();
        $product->productName = $validates['productName'];
        $product->productPrice = $validates['productPrice'];
        $product->productImage = $prod;
        $product->productCode = $prodCode;
        $product->productSlug = Str::slug($validates['productName']);
        $product->productDescription = $validates['productDescription'];
        $product->productVideo = $validates['productVideo'];
        $product->save();
        $cats=$validates['productCategory'];
        $prodColors=$validates['productColor'];

        $product->categories()->attach($cats);
        $product->colors()->attach($prodColors);


        $p=$product->id;

        foreach ($this->productOtherImage as $item) {
            $file=$item;
            $img=Image::make($file);
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $water=Image::make('images/watermark.png');
            $water->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->insert($water,'center',10,10);
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
