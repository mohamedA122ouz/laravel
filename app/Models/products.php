<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    public int $id;
    public string $src;
    public string $details;
    public string $name;
    public string $more_details;
    public float $price;
    public float $discount_percentage;
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
