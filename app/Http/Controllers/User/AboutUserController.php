<?php

namespace App\Http\Controllers\User;

use App\Models\About\Entity\About;

class AboutUserController
{
    public function index()
    {
        $about = About::all();

        return view('user.about.index', compact('about'));
    }
}
