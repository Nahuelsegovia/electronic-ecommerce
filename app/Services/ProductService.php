<?php
namespace App\Services;

use App\Models\Product;
use Exception;
use Illuminate\Http\Response;
use App\Services\PhotoService as Photoservice;
use Illuminate\Support\Facades\Validator;

class ProductService{

    private $photoservice;

    public function __construct()
    {
        $this->photoService = new Photoservice();
    }

    public function create($request){
        /*$validation = $request->validate([
            'product_title' => 'required|max:30',
            'product_price' => 'required|max:30',
            'product_content' => 'required|max:225',
            'product_photo' => 'required|max:225',
        ]);*/

        $validator = Validator::make($request->all(), [
            'product_title' => 'string|required|min:5|max:30',
            'product_price' => 'numeric|required|min:1|max:30',
            'product_content' => 'string|required|min:5|max:40',
            'product_photo' => 'required|mimes:jpeg,jpg,png,gif',
        ]);
        
        if($validator->fails()){
            dd('nop');
        }

        try {

            $product = new Product();
            $product->product_title = $request->product_title;
            $product->product_price = $request->product_price;
            $product->product_content = $request->product_content;
            $product->product_photo = $this->photoService->create($request);
            $product->save();
            return $product;

        } catch (\Exception $e) {
           throw $e;
        }
    }

    public function update($id, $request):string{
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

    public function show($id){
        $product = Product::findOrFail($id);
        return $product;
    }
}