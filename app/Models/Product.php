<?php

namespace App\Models;

use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'name','price','description','image_path' , 'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function bills()
    {
        return $this->hasMany(Bill::class, 'product_id');
    }
}
