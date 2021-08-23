
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
                <a href="/ru/form/" class="btn header-row__issue">Оформить заявку</a>

                <a href="#" class="header-row__phone-btn"></a>
                <a href="#" class="header-row__lang-btn"></a>
            </div>
            <div class="header-row down">
                <nav class="nav">
                    <!-- header nav -->
                    <ul>
                        <li class="active">
                            <a href="{{ route('index') }}">Главная</a>
                        </li>
                        </li>
                        <li>

                            <a href="{{ route('about') }}">О компании</a>
                        </li>
                        <li>

                            <a href="/ru/services/">Услуги</a>
                        </li>
                        <li>

                            <a href="/ru/1091-vopros_otvet.html">Вопрос-ответ</a>
                        </li>
                        <li>

                            <a href="/ru/news/">Новости</a>
                        </li>
                        <li>

                            <a href="/ru/contacts/">Контакты</a>
                        </li>
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
