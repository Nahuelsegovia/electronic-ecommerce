<?php
namespace App\Services;

use App\Models\Product;
use Exception;
use Illuminate\Http\Response;

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
                return response(200);
            }
        } catch (\Exception $e) {
           throw $e;
        }
    }

    public function update($id, $request):string{
        $request->validate([
            'product_title' => 'required|max:30',
            'product_price' => 'required|max:30',
            'product_content' => 'required|max:225',
            'product_photo' => 'required|max:100',
        ]);
        
        $product = Product::findOrFail($id);
        try {
            if($product->update($request->all())){
                return response(200);
            }
        } catch (\Exception $e) {
           throw $e;
        }
    }

    public function destroy($id):string{
        
        $product = Product::findOrFail($id);
        try {
            if($product->delete()){
                return response(200);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    
    }

    public function show():string{
        return 'Show products';
    }
}