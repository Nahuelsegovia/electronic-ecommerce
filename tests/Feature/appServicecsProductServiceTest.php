<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class appServicecsProductServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {   
        $product = Http::post('http://localhost:8000/api/admin/productos', 
            ['product_title' => 'producto ultimo',
            'product_price' => '200000',
            'product_content' => 'Este producto es importado de italia',
            'product_photo' => 'imagen.png',]
        );
       
       $this->assertEquals($product->status(), 200);
    }

   /*public function test_destroy()
    {
        $product = Http::delete('http://localhost:8000/api/admin/productos/6');
        $this->assertEquals($product->body(), 'Product has been deleted successfully');
    }*/

    public function test_update(){
        $product = Http::put('http://localhost:8000/api/admin/productos/7', [
            'product_title' => 'New titles',
        ]);
        $this->assertEquals($product->status(), 200);
    }
}
