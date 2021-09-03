<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\Store;
use App\Models\News\Entity\News;
use App\Models\News\Repository\NewsRepository;
use App\Models\News\Service\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    protected $repository;
    protected  $service;

    public function __construct(
        NewsRepository $newsRepository,
        NewsService $newsService
    )
    {
        $this->repository = $newsRepository;
        $this->service = $newsService;
    }

    public function index()
    {
        $news = News::query()->orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.pages.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.pages.news.create');
    }

    public function store(Store $request)
    {
        $img = null;

        if ($request->hasFile('image')) {
            $img = $this->service->uploadImage($request->file('image'));
        }

        $description_min = $this->service->descriptionMin($request->input('description'));

        try {
            $this->repository->getCreate(
                $request->input('title'),
                $img,
                $description_min,
                $request->input('description'),
                $request->input('source')
            );
        }catch (\Throwable $err) {
            Log::error("News: create new news error. " . $err->getMessage() . $err->getTraceAsString());
            return  redirect()->back()->withErrors(['Ошибка создания новости']);
        }

        return redirect()->route('news.index')->with('message','Новость создана!');
    }

    public function edit($id)
    {
        $news = News::query()->findOrFail($id);

        return view('admin.pages.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $img = null;
        $news = News::query()->findOrFail($id);

        if ($request->hasFile('image')) {
            $img = $this->service->uploadImage($request->file('image'));
        }

        $description_min = $this->service->descriptionMin($request->input('description'));

        $this->repository->getUpdate(
            $news,
            $request->input('title'),
            $description_min,
            $request->input('description'),
            $request->input('source'),
            $img
        );

        return redirect()->route('news.index')->with('message','Новость обнавлена!');
    }

    public function destroy($id)
    {
        $news = News::query()->findOrFail($id);
        $news->delete();

        return redirect()->back()->with('message', 'Новость удалена!');
    }
}
