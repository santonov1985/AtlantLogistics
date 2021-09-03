<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\About\Store;
use App\Http\Requests\About\Update;
use App\Models\About\Entity\About;
use App\Models\About\Repository\AboutRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutController
{
    protected $repository;

    public function __construct(AboutRepository $aboutRepository)
    {
        $this->repository = $aboutRepository;
    }

    public function index()
    {
        $about = About::all();

        return view('admin.pages.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.pages.about.create');
    }

    public function store(Store $request)
    {
        try {

            $this->repository->getCreate($request);

        }catch (\Throwable $err) {
            Log::error("About: create new about company error. " . $err->getMessage() . $err->getTraceAsString());
            return  redirect()->back()->withErrors(['Ошибка создания информации о компании']);
        }

        return redirect()->route('about.index')->with('message','Информация о компании создана!');

    }

    public function edit($id)
    {
        $about = About::query()->findOrFail($id);

        return view('admin.pages.about.edit', compact('about'));
    }

    public function update(Update $request, $id)
    {
        $about = About::query()->findOrFail($id);

        try {
            $this->repository->getUpdate(
                $about,
                $request->input('title'),
                $request->input('description')
            );

        }catch (\Throwable $err) {
            Log::error("About: update about company error. " . $err->getMessage() . $err->getTraceAsString());
            return  redirect()->back()->withErrors(['Ошибка изменения информации о компании']);
        }

        return redirect()->route('about.index')->with('message','Информация о компании изменена!');
    }
}
