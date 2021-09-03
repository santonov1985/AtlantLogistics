@extends('admin.layouts.app')

@section('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('/js/highlight.min.js') }}"></script>
    <script src="{{ asset('/js/xml.min.js') }}"></script>
    <script src="{{ asset('/js/quill.js') }}"></script>
    <script src="{{ asset('/js/quill.htmlEditButton.min.js') }}"></script>
    <script src="{{ asset('/js/editor.js') }}"></script>
@endsection

@include('alerts.error-alert')
@include('alerts.message-alert')

@section('content')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h5>Изменение новости:</h5>
                </div>
                {{--Кнопка добавить--}}
                <div class="btn-toolbar">
                    <a class="btn btn-sm btn-primary" title="Назад" href="{{ route('about.index') }}">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
                {{--Кнопка добавить--}}
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('about.update', ['id' => $about->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        {{--Заголовок--}}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Заголовок новости:</label>
                                    <input type="text" name="title" value="{{ $about->title }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        {{--Заголовок--}}

{{--                        --}}{{--Картинка--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <div>Изображение:</div>--}}
{{--                                    <input id="image_input" type="file" name="image" class="form-control" accept="image/*" onchange="readUrl(this)">--}}
{{--                                    <img id="tiding_image" src="{{ $news->img }}" alt="" class="mt-3">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--Картинка--}}

                        {{--Контент--}}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input name="description" class="quill" required type="hidden">
                                    <label>Контент:</label>
                                    <div id="texteditor" style="width: 100%; height: 500px">
                                        {!! $about->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Контент--}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Сохранить</button>
                                    <a href="{{ route('about.index') }}" class="btn btn-light">Отмена</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection
