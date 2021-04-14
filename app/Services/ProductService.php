<?php
namespace App\Services;

use App\Models\Product;

class ProductService{

    public function create($request){
        $dataValidation = $request->validate([
            'product_title' => 'required|max:30',
            'product_price' => 'required|max:30',
            'product_content' => 'required|max:225',
            'product_photo' => 'required|max:100',
        ]);

        try {
            if(Product::create($dataValidation)){
                echo 'Product has been created succesfully';
            }
        } catch (\Exception $e) {
           return $e;
        }
    }

    public function edit():string{
        return 'Edit Product';
    }

    public function delete():string{
        return 'Delete Product';
    }

    public function show():string{
        return 'Show products';
    }
}