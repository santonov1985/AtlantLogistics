<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About\Entity\About;
use App\Models\News\Entity\News;
use App\Models\Service\Entity\Service;

class MainController extends Controller
{
    public function index()
    {   $about = About::all();
        $news = News::query()->orderBy('created_at', 'DESC')->paginate(4);
        $service = Service::all();
        return view('user.index', compact(
            'news',
            'service',
            'about'
        ));
    }

    public function about()
    {
        return view('user.about');
    }
}
