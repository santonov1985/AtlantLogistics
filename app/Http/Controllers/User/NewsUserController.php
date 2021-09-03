<?php

namespace App\Http\Controllers\User;

use App\Models\News\Entity\News;

class NewsUserController
{
    public function index()
    {
        $news = News::query()->orderBy('updated_at', 'DESC')->paginate(4);

        return view('user.news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::query()->findOrFail($id);

        return view('user.news.show', compact('news'));
    }
}
