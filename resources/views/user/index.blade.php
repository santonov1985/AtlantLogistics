@extends('user.layouts.app')


@section('content')
    <div class="paralax">
        <div class="banner main-banner">
            <!-- banner -->
            <img src="{{ asset('/img/index/img-1.jpg') }}" alt="">
            <span class="banner__slogan main-slogan">
                    Надежно
                    <br>
                    <span>и быстро!</span>
                </span>
        </div>
        <!-- banner -->
    </div>
    <div class="main__list">
        <!-- main list -->
        <div class="container">

            <a href="">
                <span class="main__list__up">
                    <span class="main__list__up__img">
                        <img src="{{ asset('/img/index/file_1502250236_100547430.png') }}" alt="">
                    </span>
                </span>
                <span class="main__list__down">Быстрая доставка</span>
                <span class="main__list__down-hover">Быстрая доставка</span>
            </a>

            <a href="">
                <span class="main__list__up">
                    <span class="main__list__up__img">
                        <img src="{{ asset('/img/index/file_1502250230_669737855.png') }}" alt="">
                    </span>
                </span>
                <span class="main__list__down">Страхование груза</span>
                <span class="main__list__down-hover">Страхование груза</span>
            </a>

            <a href="">

                    <span class="main__list__up">
                        <span class="main__list__up__img">
                            <img src="{{ asset('/img/index/file_1502250224_274387039.png') }}" alt="">
                        </span>
                    </span>
                <span class="main__list__down">Гарантия сроков</span>
                <span class="main__list__down-hover">Гарантия сроков</span>
            </a>

            <a href="">

                    <span class="main__list__up">
                        <span class="main__list__up__img">
                            <img src="{{ asset('/img/index/file_1502250219_132291753.png') }}" alt="">
                        </span>
                    </span>
                <span class="main__list__down">Доступная цена</span>
                <span class="main__list__down-hover">Доступная цена</span>
            </a>

            <a href="">

                    <span class="main__list__up">
                        <span class="main__list__up__img">
                            <img src="{{ '/img/index/file_1502250213_274574585.png' }}" alt="">
                        </span>
                    </span>
                <span class="main__list__down">Работаем 24/7</span>
                <span class="main__list__down-hover">Работаем 24/7</span>
            </a>

        </div>
    </div>
    <!-- main list -->
    <div class="main__about">
        <!-- main about -->
        <div class="container">
            <h1>Atlant Logistics Company</h1>

            @foreach($service as $item)
            <a href="{{ route('service') }}" class="main__about__block">
                <img src="{{ $item->icon }}" alt="img-2">
                <span class="main__about__block__text">
                    <h3>{{ $item->title }}</h3>
                    <p>
                        {!! $item->description !!}
                    </p>

                </span>
                @endforeach
            </a>
        </div>
    </div>
    <!-- main about -->
    <div class="main__company">
        <!-- main company -->
        <div class="main__company__img image-cover">
            <img src="{{ asset('/img/index/img-6.jpg') }}" alt="img-6">
        </div>
        <div class="main__company__right dark">
            @foreach($about as $item)
            <h2>
                <a href="{{ route('about') }}">
                    {{ $item->title }}
                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                    </span>
                </a>
                {!! $item->description !!}
            @endforeach
        </div>
    </div>
    <!-- main company -->
    <div class="main__map">
        <!-- main map -->
        <div class="container">
            <h2>
                Представительства alc

                <span class="decor-line">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
            </h2>
            <p style="text-align: center;">
                TOO &laquo;Atlant Logistics Company&raquo; &ndash; транспортно-экспедиторская компания, работающее по высоким стандартам качества.</p>
            <p>
                &nbsp;</p>

            <select id="category" class="dropdown">
                <option>Выбрать город</option>
                <option value="#interactive-block-1">Актобе</option>
                <option value="#interactive-block-2">Астана</option>
                <option value="#interactive-block-4">Алматы</option>
                <option value="#interactive-block-3">Шымкент</option>
            </select>
            <div class="main__map__interactive">
                <!-- main interactive map -->
                <img src="{{ asset('/img/index/map.jpg') }}" alt="">
                <a id="dots-1" class="city city-1" href="#">Актобе</a>
                <a id="dots-2" class="city city-2" href="#">Астана</a>
                <a id="dots-3" class="city city-3" href="#">Шымкент</a>
                <a id="dots-4" class="city city-4" href="#">Алматы</a>

                <div id="interactive-block-1" class="main__map__interactive__hide block-1">

                    <ul>
                        <li>Адрес: г. Алматы, Илийский тракт 11, офис № 2</li>
                        <li>
                            Телефон:
                            <a href="tel:+77019813334">+7 (701) 981-33-34 </a>
                        </li>
                        <li>
                            Email:
                            <a href="mailto:info@atlantlogistics.kz">info@atlantlogistics.kz</a>
                        </li>
                    </ul>
                </div>

                <div id="interactive-block-2" class="main__map__interactive__hide block-2">

                    <ul>
                        <li>Адрес: г. Актобе, ул. Жетиген 28/2 </li>
                        <li>
                            Телефон:
                            <a href="tel:+77019813330">+7 (701) 981 33 30 </a>
                        </li>
                    </ul>
                </div>

                <div id="interactive-block-3" class="main__map__interactive__hide block-3">
                    <ul>
                        <li>Адрес: г. Астана, ул. Жетиген 28/2</li>
                        <li>
                            Телефон:
                            <a href="tel:+77019813330">+7 (701) 981 33 30 </a>
                        </li>
                        <li>
                            Email:
                            <a href="mailto:info@atlantlogistics.kz">info@atlantlogistics.kz</a>
                        </li>
                    </ul>
                </div>

                <div id="interactive-block-4" class="main__map__interactive__hide block-4">
                    <ul>
                        <li>Адрес: г. Актобе, ул. Аз Наурыз 11, Терминал 1</li>
                        <li>
                            Телефон:
                            <a href="tel:+77019813330">+7 (701) 981 33 30 </a>
                        </li>
                        <li>
                            Email:
                            <a href="mailto:info@atlantlogistics.kz">info@atlantlogistics.kz</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- main interactive map -->
        </div>
    </div>
    <!-- main map -->
    <div class="main__leader">
        <!-- main leader -->
        <div class="container">
            <div class="main__leader__img">
                <img src="{{ asset('/img/index/logo-1.png') }}" alt="logo-1">
            </div>
            <div class="main__leader__right">
                <h2>
                    Лидер отрасли 2016

                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                    </span>
                </h2>
                <p>
                    В&nbsp; 2016 году наша компания TOO &laquo;Atlant Logistics Company&raquo; в соответсвии с результатами полного перечня субъектов хозяйственной деятельности Республики Казахстан, была удостоена почетного звания и получила национальный сертификат &laquo;Лидер отрасли 2016&raquo;.&nbsp;</p>

            </div>
        </div>
    </div>
    <!-- main leader -->
    <div class="main__news">
        <!-- main news -->
        <div class="container">
            <h2>
                <a href="{{ route('news') }}">
                    Новости
                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                    </span>
                </a>
            </h2>

            @foreach($news as $item)
            <div class="main__news__block">
                <span class="main__news__block__date">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</span>
                <a href="{{ route('news.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                <p>{!! $item->description_min !!}</p>
            </div>
            @endforeach

            {{ $news->links('pagination') }}
        </div>
    </div>
    <div class="banner-down"><!-- banner down -->
        <img src="{{ asset('/img/index/img-7.jpg') }}" alt="img-23">
    </div><!-- banner down -->
@endsection
