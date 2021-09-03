<?php

namespace App\Models\About\Repository;

use App\Models\About\Entity\About;
use Illuminate\Http\Request;

class AboutRepository
{
    public function getCreate(Request $request)
    {
        $about = new About();

        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->saveOrFail();

        return $about;
    }

    public function getUpdate(
        About $about,
        string $title,
        string $description
    ) : About
    {
        $about->title = $title;
        $about->description = $description;
        $about->saveOrFail();

        return $about;
    }
}
