<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Create() {
        request()->validate([
            "name" => ["required", "min:4"],
            "shortDescription" => ['required'],
            "longDescription" => ['required'],
            "dicount" => ['required', "between:0,100", "decimal:0,2"],
            "price" => ['required', "decimal:0,2"],
            "src" => ["required", "image"]
        ]);
        if (request()->hasFile('src')) {
            $image = request()->file('src');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'storage/images/' . $imageName;
            $image->move(public_path('storage/images'), $imageName);
        }
        $discount = (request("dicount")/100);
        products::create(
            [
                "brand_id"=>request("brand_id"),
                "name" => request("name"),
                "details" => request("shortDescription"),
                "more_details" => request("longDescription"),
                "discount_percentage" => $discount,
                "price" => request("price"),
                "src" => $imagePath ?? "Not exist"
            ]
        );
        return redirect()->back()->with('success', 'Product created successfully!');
    }
    public function Input()  {
        $brands = Brand::all();
        return view('input',["brands"=>$brands]);
    }
    public function EditGet (products $product) {
        $brands = Brand::all();
        return view('input',["brands"=>$brands,"product"=>$product]);
    }
    public function EditPost (products $currentProduct) {
        // $currentProduct = products::find($id);
        $path = public_path($currentProduct["src"]);
        if (file_exists($path)) {
            unlink($path);
        }
        request()->validate([
            "name" => ["required", "min:4"],
            "shortDescription" => ['required'],
            "longDescription" => ['required'],
            "dicount" => ['required', "between:0,100", "decimal:0,2"],
            "price" => ['required', "decimal:0,2"],
            "src" => ["required", "image"]
        ]);
        if (request()->hasFile('src')) {
            $image = request()->file('src');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'storage/images/' . $imageName;
            $image->move(public_path('storage/images'), $imageName);
        }
        $discount = (request("dicount")/100);
        $currentProduct->update(
            [
                "brand_id"=>request("brand_id"),
                "name" => request("name"),
                "details" => request("shortDescription"),
                "more_details" => request("longDescription"),
                "discount_percentage" => $discount,
                "price" => request("price"),
                "src" => $imagePath ?? "Not exist"
            ]
        );
        return redirect("/");
    }
    public function Index(){
        return view('index', ["products" => products::all()]);
    }
    public function Delete (products $currentProduct){
        // $currentProduct = products::find($id);
        $path = public_path($currentProduct["src"]);
        if (file_exists($path)) {
            unlink($path);
        }
        $currentProduct->delete();
        return redirect("/");
    }
    public function Products (products $products){
        return view("product", ["product" => $products]);
    }
}
