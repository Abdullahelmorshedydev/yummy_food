<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class FilesHelper
{
    public static function store(UploadedFile $file, string $publicStoragePath)
    {
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path($publicStoragePath);
        $file->move($destinationPath, $fileName);

        return $publicStoragePath . '/' . $fileName;
    }

    public static function delete(?string $path)
    {
        if(File::exists(public_path($path))) {
            File::delete(public_path($path));
            return true;
        }
        return false;
    }
}
