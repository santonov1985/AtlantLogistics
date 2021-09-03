<?php

namespace App\Models\News\Repository;

use App\Models\News\Entity\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsRepository
{
    public function getCreate(
        string $title,
        string $img,
        string $description_min,
        string $description_max,
        string $source = null
    )
    {
        $news = new News();

        $news->title = $title;
        $news->img = $img;
        $news->description_min = $description_min;
        $news->description_max = $description_max;
        $news->source = $source;
        $news->saveOrFail();

        return $news;
    }

    public function getUpdate(
        News $news,
        string $title,
        string $description_min,
        string $description_max,
        string $source = null,
        string $img = null
    )
    {
        $news->title = $title;
        $news->description_min = $description_min;
        $news->description_max = $description_max;
        $news->source = $source;

        if ($img !== null) {
            $news->img = $img;
        }

        $news->saveOrFail();

        return $news;
    }
}
