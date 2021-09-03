@extends('admin.layouts.app')

@include('alerts.error-alert')
@include('alerts.message-alert')

@section('content')

    <section class="py-2 text-center container">
        <div class="row py-lg-2">
            <div class="col-lg-8 col-md-8 mx-auto">
                <h1 class="fw-light">Услуги</h1>
                    <a href="{{ route('service.create') }}" class="btn btn-primary my-2">Добавить услугу</a>
            </div>
        </div>
    </section>

    <div class="album py-2 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                @foreach($service as $item)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-header mb-4">
                            {{ \Illuminate\Support\Str::upper($item->title) }}
                        </div>
                        <div class="d-flex justify-content-center">
                            <img  style="width: 250px; height: auto" src="{{ $item->icon }}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">{!! $item->description !!}</p>
                            <div class="d-flex justify-content-between align-items-center action-btn">
                                <div class="btn-group">
                                    <a href="{{ route('service.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-outline-warning">Редактировать</a>
                                    <a href="{{ route('service.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-outline-danger">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

        <style>
            .shadow-sm {
                height: calc(100% - 24px);
                position: relative;
            }
            .action-btn {
                position: absolute;
                bottom: 20px;
            }
        </style>

@endsection
