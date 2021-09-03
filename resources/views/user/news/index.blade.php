@extends('user.layouts.app')

@section('content')

    <div class="pages"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <img src="{{ asset('/img/img-15.jpg') }}" alt="img-15">
        </div><!-- banner -->

        <div class="breadcrums"><!-- breadcrums -->
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="#">Новости</a></li>
            </ul>
        </div><!-- breadcrums -->

        <div class="container">
            <h1>Новости</h1>
            <div class="main__news"><!-- main news -->
                <div class="services">
                    @foreach($news as $item)
                        <div class="main__news__block wow fadeInUpBig" data-wow-offset="0" data-wow-delay="0.4s">
                            <a href="{{ route('news.show', ['id' => $item->id]) }}"><img src="{{ $item->img }}" alt="img-17"></a>
                            <span class="main__news__block__date">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</span>
                            <a href="{{ route('news.show', ['id' => $item->id]) }}"> {{ $item->title }}</a>
                            <p>{!! $item->description_min !!}</p>
                        </div>
                    @endforeach
                </div>
            </div><!-- main news -->

            {{ $news->links('pagination') }}

        </div>
    </div>
@endsection
