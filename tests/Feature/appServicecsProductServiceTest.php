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
            ['product_title' => 'producto_de_prueba',
            'product_price' => '200000',
            'product_content' => 'Este producto es importado de italia',
            'product_photo' => 'imagen.png',]
        );
       
       $this->assertEquals($product->body(), 'Product has been created succesfully');
    }
}
