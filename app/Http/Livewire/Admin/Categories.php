<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    public $title = "Add Categories";
    public $content;
    public $showFormVisible = false;
    public $productCategory;
    public $allCategories;

    public $increment=1;

    public $testValue = 1;


    public function incrementVal(){
        $this->increment +=1;
}

    public function  resetInputs(){
        $this->productCategory='';
    }

    public function createShowModal(){
        $this->showFormVisible=true;
    }

    public function addCategory(Request $request ){
        $validates=$this->validate([
            'productCategory'=>'required|string'
        ]);

        $prooo=Category::create([
            'productCategory'=>$validates['productCategory']
        ]);

        if ($prooo){
            session()->flash('message',"Category added! ");
            $this->resetInputs();
            sleep(2);
            $this->showFormVisible=false;
        }

    }

    public function deleteCategory($id){
        Category::where('id',$id)
            ->delete();
        session()->flash('message','Category deleted');
    }
    public function render()
    {
        $cats=Category::orderBy('id')->paginate(10);
        return view('livewire.admin.categories',['myCategories'=>$cats]);
    }
}
