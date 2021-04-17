<?php

namespace Tests\Feature;

use Facade\FlareClient\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class appServicesProductServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {   
        $image_path = 'storage/app/public/images/E1mlso3ZuBILBwGpVn0ZR2unjdEHwFkP3Q9VVUFV.png';
        //$file = mb_convert_encoding(Storage::disk('local')->get('public/images/E1mlso3ZuBILBwGpVn0ZR2unjdEHwFkP3Q9VVUFV.png'),'UTF-8', 'UTF-8');        
        $product = Http::post('http://localhost:8000/api/admin/productos', 

            [
                'product_title' => 'Product test',
                'product_price' => '200000',
                'product_content' => 'dadada',
                'multipart' => [
                        [   
                            'name'     => 'product_photo',
                            'contents' => fopen($image_path, 'r'),
                        ]
                    ],
                'content-type' => 'application/x-www-form-urlencoded'
            ]
        );
       
       $this->assertEquals($product->status(), 200);
    }

   /*public function test_destroy()
    {
        $product = Http::delete('http://localhost:8000/api/admin/productos/14');
        $this->assertEquals($product->status(), 200);
    }

    public function test_update(){
        $product = Http::put('http://localhost:8000/api/admin/productos/8', [
            'product_title' => 'New titless',
        ]);
        $this->assertEquals($product->status(), 200);
    }

    public function test_show(){
        $data = json_encode([
            "product_title" => "producto_de_prueba",
                "product_price" => 200000,
                "product_content" => "Este producto es importado de italia",
                "product_photo" => "imagen.png",
                "id" => 39,
                "created_at" => "2021-04-15T17:07:48.000000Z",
                "updated_at" => "2021-04-15T17:07:48.000000Z",
                ]);
        $product = Http::get('http://localhost:8000/api/admin/productos/39');
        $this->assertEquals($product->body(), $data);
    }*/
}
