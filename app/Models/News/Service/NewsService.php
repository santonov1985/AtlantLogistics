<?php

namespace App\Models\News\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsService
{
    public function uploadImage($file)
    {
        $folder = date('Y-m-d');
        $filename = Str::random(10). '.' . $file->extension();;

        $file->move(public_path("/img/upload/{$folder}"), $filename);

        return "/img/upload/{$folder}/" . $filename;
    }

    public function descriptionMin(string  $description)
    {
        if (Str::length($description) > 10) {

            return Str::limit($description,250);
        }
    }
}
