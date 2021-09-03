@extends('admin.layouts.app')

@include('alerts.error-alert')
@include('alerts.message-alert')

@section('content')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h5>Новости</h5>
                </div>
                {{--Кнопка добавить--}}
                <div class="btn-toolbar">
                    <a class="btn btn-sm btn-primary" title="Добавить новость" href="{{ route('news.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                {{--Кнопка добавить--}}
            </div>

            <table class="table">
                <tr>
                    <th>Заголовок</th>
                    <th>Картинка</th>
                    <th>Описание</th>
                    <th>Источник</th>
                    <th></th>
                </tr>
                @foreach($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td><img class="img-thumbnail" style="width: 250px; height: auto" src="{{ $item->img }}" alt="Складирование грузов"></td>
                    <td>{!! $item->description_min !!}</td>
                    <td>{{ $item->source ?? '' }}</td>
                    <td width="9%">
                        <a class="btn btn-sm btn-warning" title="Редактировать" href="{{ route('news.edit', ['id' => $item->id]) }}">
                            <i class="fa fa-cog"></i>
                        </a>

                        <a class="btn btn-sm btn-danger" title="Удалить" href="{{ route('news.delete', ['id' => $item->id]) }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $news->links('pagination') }}
        </div>
    </div>
@endsection
