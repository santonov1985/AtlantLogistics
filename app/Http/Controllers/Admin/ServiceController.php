<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Service\Store;
use App\Http\Requests\Service\Update;
use App\Models\News\Service\NewsService;
use App\Models\Service\Entity\Service;
use App\Models\Service\Repository\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController
{
    protected $repository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->repository = $serviceRepository;
    }

    public function index()
    {
        $service = Service::all();
        return view('admin.pages.service.index', compact('service'));
    }

    public function create()
    {
        return view('admin.pages.service.create');
    }

    public function store(Store $request)
    {
        $img = null;

        if ($request->hasFile('image')) {
            $img = (new NewsService())->uploadImage($request->file('image'));
        }

            try {
                $this->repository->getCreate(
                    $request->input('title'),
                    $img,
                    $request->input('description')
                );
            }catch (\Throwable $err) {
                Log::error("Service: create new service error. " . $err->getMessage() . $err->getTraceAsString());
                return  redirect()->back()->withErrors(['Ошибка создания услуги']);
            }

        return redirect()->route('service.index')->with('message','Услуга создана!');
    }

    public function edit($id)
    {
        $service = Service::query()->findOrFail($id);

        return view('admin.pages.service.edit', compact('service'));
    }

    public function update(Update $request, $id)
    {
        $img = null;
        $service = Service::query()->findOrFail($id);

        if ($request->hasFile('image')) {
            $img = (new NewsService())->uploadImage($request->file('image'));
        }

        try {
            $this->repository->getUpdate(
                $service,
                $request->input('title'),
                $img,
                $request->input('description')
            );
        }catch (\Throwable $err) {
            Log::error("Service: update service error. " . $err->getMessage() . $err->getTraceAsString());
            return  redirect()->back()->withErrors(['Ошибка сохранения услуги']);
        }

        return redirect()->route('service.index')->with('message','Услуга изменена!');
    }

    public function destroy($id)
    {
        $service = Service::query()->findOrFail($id);
        $service->delete();

        return redirect()->back()->with('message', 'Услуга удалена!');
    }
}
