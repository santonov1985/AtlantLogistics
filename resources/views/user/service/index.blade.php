@extends('user.layouts.app')

@section('content')

    <div class="pages"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <img src="{{ asset('/img/service/img-8.jpg') }}" alt="img-15">
        </div><!-- banner -->

        <div class="breadcrums"><!-- breadcrums -->
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="#">Услуги</a></li>
            </ul>
        </div><!-- breadcrums -->

        <div class="container">
            <h1>Услуги</h1>
            <p>
                Выбирая нашу компанию, вы получаете гарантию надежности и качества оказываемых услуг. Мы обслуживаем клиентов из различных отраслей промышленности и предлагаем решения, ориентируясь на потребности и приоритеты клиентов. Мы строим партнерские отношения в бизнесе, потому что для нас самое главное &ndash; ваше доверие.
            </p>

            <div class="services">
                @foreach($service as $item)
                <div class="services__block blue wow fadeInUpBig" data-wow-offset="0" data-wow-delay="0.2s">
                    <div class="services__block__icon"><img src="{{ asset('/img/service/delivery-truck-with-packages-behind.svg') }}" alt=""></div>
                    <h2>{{ $item->title }}
                        <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                    {!! $item->description !!}

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="banner-down"><!-- banner down -->
        <img src="{{ asset('/img/service/img-9.jpg') }}" alt="img-23">
    </div><!-- banner down -->
@endsection

