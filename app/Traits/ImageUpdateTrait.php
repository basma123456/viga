<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait ImageUpdateTrait
{
    use ImageTrait;

    /**
     * @param $requestName file of photo come from request
     * @param  $storageName -> the file in config -> file
     * @param  $folderName -> the file will stored in
     * @param  $colDB -> the name of image in database table to delete from file Or Request If He Not Updated New Image
     * @param Request $request
     * @return string
     */
    public function UpdateImage($requestName,$storageName,$folderName,$colDB,Request $request) {
        if($request->hasFile($requestName)) {
            $iconMap = $this->imageStore($request->$requestName, $storageName,$folderName);
            $this->imageDestroy($storageName,$folderName, $colDB);
        }else {
            $iconMap = $colDB;
        }// End Check For Icon Map Isset Or Not

        return $iconMap;
    }

}
