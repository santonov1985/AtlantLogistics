@extends('user.layouts.app')

@section('content')

    <div class="pages"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <img src="{{ asset('/img/img-15.jpg') }}" alt="">
        </div><!-- banner -->

        <div class="breadcrums"><!-- breadcrums -->
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('news') }}">Новости</a></li>
                <li><a href="#">{{ $news->title }}</a></li>
            </ul>
        </div><!-- breadcrums -->

        <div class="container">

            <h1>{{ $news->title }}</h1>
            <span class="main__news__block__date">{{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y') }}</span>
            <p>
                <img alt="Услуги автоперевозок по Казахстану" src="{{ $news->img }}" style="margin: 2px 0 2px 15px; float: right; " />
                {!! $news->description_max !!}
            </p>
            <h2>
                <a href="http://www.atlantlogistics.kz/ru/services/" target="_self"><span style="font-size:14px;">Услуги автоперевозок по Казахстану</span></a></h2>
            <p style="text-align: right;">
                Источник: {{ $news->source }}</p>
        </div>
    </div>


@endsection
