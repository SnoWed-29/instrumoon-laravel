<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity','total_price','product_id','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with the "products" table
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
