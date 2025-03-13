<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    protected $fillable = [
        'src', 'details', 'name', 'more_details', 'price', 'discount_percentage', 'brand_id'
    ];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
