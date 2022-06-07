<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait Image2Trait
{


    function deleteImg($file , $model_image){
        if($file::exists($model_image)){
            unlink($model_image);
        }
    }


    function storeImg($requestImg , $uploade_path){
        $image_name = md5(rand(1000, 10000));
        $file = $requestImg;
        $ext = strtolower($file->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $image_url = $uploade_path . $image_full_name;
        $file->move($uploade_path, $image_full_name);
//        $image_url = Storage::disk('app-assets')->putFileAs('images/slider', $requestImg, $image_full_name);
        return $image_url;

    }

}
