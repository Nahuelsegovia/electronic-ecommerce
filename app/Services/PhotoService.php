<?php
namespace App\Services;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class PhotoService{

    public function create($request){
        if($request->file('product_photo')){
            $file = $request->file('product_photo');
            $path = $file->store('public/images/');
            $image = Image::make(Storage::get($path));
            $image->resize(400, 400);
            Storage::put($path, (string) $image->encode('jpg', 100));
            return $file->hashName();
        }
    }
}