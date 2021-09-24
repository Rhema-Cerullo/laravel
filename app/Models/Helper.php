<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    use HasFactory;

/**
 * @description : function to upload files
 * @author : Landry John Meli
 */

    public static function uploadFile($inputImg, $savePath, $imageName, $objectId)
    {
        $ext = $inputImg->extension();
        $date = now();
        $imageName = implode('.', [$imageName, $objectId, $date->format('YmdHis'), $ext]);
        $inputImg->move(public_path($savePath),$imageName);
        return $savePath . "/" . $imageName;
    }
/**
 * @description : Simple function to delte, upload files
 * @author Landry John Meli
 */
    public static function deleteFile($imagePath)
    {
        unlink(public_path($imagePath));
    }
}
