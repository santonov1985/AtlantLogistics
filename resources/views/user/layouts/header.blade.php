
<!-- header -->
    <div class="container">
        <a href="{{ route('index') }}" class="header-logo">
            <img class="header-logo-vis" src="{{ asset('/img/index/logo.png') }}" alt="logo">
            <img class="header-logo-hide" src="{{ asset('/img/index/logo-type-1.png') }}" alt="logo">
        </a>
        <div class="header-right">
            <div class="header-row up">
                <div class="header-row__phone">
                    <!-- header phones -->
                    <ul>
                        <li>
                            <a href="tel:+77272901265">
                                +7 (727) 290-12-65
                                <span>/</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+77019813334">+7 (701) 981-33-34 </a>
                        </li>

                    </ul>
                </div>
                <!-- header phones -->
                <a href="http://tracking.atlantlogistics.kz/" target="_blank" class="btn header-row__track">Отследить груз </a>
                <a href="{{ route('order') }}" class="btn header-row__issue">Оформить заявку</a>

                <a href="#" class="header-row__phone-btn"></a>
                <a href="#" class="header-row__lang-btn"></a>
            </div>
            <div class="header-row down">
                <nav class="nav">
                    @php
                        $routs = [
                            [
                                "title" => "Главная",
                                "link" => "index"
                            ],
                            [
                                "title" => "О компании",
                                "link" => "about"
                            ],
                            [
                                "title" => "Услуги",
                                "link" => "service"
                            ],
                            [
                                "title" => "Новости",
                                "link" => "news"
                            ],
                            [
                                "title" => "Контакты",
                                "link" => "contact"
                            ],
                        ];
                    @endphp
                    <!-- header nav -->
                    <ul>
                        @foreach($routs as $route)
                            @if (Route::is($route["link"]))
                                <li class="active">
                            @else
                                <li>
                            @endif
                                <a href="{{ route($route["link"]) }}">{{ $route["title"] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- header nav -->
                <button class="nav-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
<!-- header -->
