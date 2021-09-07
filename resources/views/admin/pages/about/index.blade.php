@extends('admin.layouts.app')

@include('alerts.error-alert')
@include('alerts.message-alert')

@section('content')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h5>О Компании</h5>
                </div>
                {{--Кнопка добавить--}}
                @if($about->isEmpty())
                <div class="btn-toolbar">
                    <a class="btn btn-sm btn-primary" title="Добавить новость" href="{{ route('about.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                @endif
                {{--Кнопка добавить--}}
            </div>

            <table class="table">
                <tr>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th></th>
                </tr>
                @foreach($about as $item)
                <tr>
                    <td width="20%">{{ $item->title }}</td>
                    <td>{!! $item->description !!}</td>

                    <td>
                        <a class="btn btn-sm btn-warning" title="Редактировать" href="{{ route('about.edit', ['id' => $item->id]) }}">
                            <i class="fa fa-cog"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
