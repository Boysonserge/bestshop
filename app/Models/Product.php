<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    use HasTrixRichText;
    protected $guarded;

    public function categories(){
        return $this->belongsToMany(Category::class,'category_product');
    }

    public function colors(){
        return $this->belongsToMany(Color::class,'color_product');
    }
}
