@extends('user.layouts.app')

@section('content')

    <div class="pages"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae856df6a163f78f3ff250dcbc47b0502063d31314865fd4ec806e0b54e38e2cf&width=100%10&height=400&lang=ru_RU&scroll=false"></script>
        </div><!-- banner -->

        <div class="container">
            <h1>Контакты</h1>

            <div class="contacts">
                <div class="contacts__col blue">
                    <h6>Головной офис - г. Алматы</h6>
                    <ul>
                        <li class="address">
                            <strong>Адрес</strong>
                            г. Алматы, Илийский тракт 11, офис №2
                        </li>
                        <li class="tel">
                            <strong>Телефон</strong>
                            <a href="tel:+77272901265">+7 (727) 290-12-65 </a>
                            <a href="tel:+77019813334">+7 (701) 981-33-34 </a>
                        </li>
                        <li class="email">
                            <strong>E-mail</strong>
                            <a href="mailto:info@atlantlogistics.kz">info@atlantlogistics.kz</a>

                        </li>
                    </ul>
                </div>
                <div class="contacts__col border-right">
                    <h6>Филиал - г. Астана</h6>
                    <ul>
                        <li class="address">
                            <strong>Адрес</strong>
                            ул. Жетиген 28/2

                        </li>
                        <li class="tel">
                            <strong>Телефон</strong>
                            <a href="tel:+77019813330">+7 (701) 981 33 30 </a>
                        </li>
                    </ul>
                </div>
                <div class="contacts__col">
                    <h6>Филиал - г. Актобе</h6>
                    <ul>
                        <li class="address">
                            <strong>Адрес</strong>
                            ул. Аз Наурыз 11, Терминал 1

                        </li>
                        <li class="tel">
                            <strong>Телефон</strong>
                            <a href="tel:+77019813330">+7 (701) 981 33 30 </a>
                        </li>
                    </ul>
                </div>
                <h2>Написать нам
                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </h2>
                <form method="POST" class="form">

                    <input name="name" class="form__input" type="text" placeholder="Ваше имя" required="required">
                    <input name="phone" class="form__input input-half left number" type="text" placeholder="Телефон" required="required">
                    <input name="email" class="form__input input-half right" type="email" placeholder="E-mail" required="required">
                    <textarea name="mess" cols="30" rows="6" placeholder="Сообщение" required="required"></textarea>
                    <input type="submit" name="submit" value="Отправить" class="btn">
                </form>
            </div>
        </div>
    </div><!-- pages content -->

    <div class="banner-down"><!-- banner down -->
        <img src="{{ asset('/img/contacts/img-21.jpg') }}" alt="img-23">
    </div><!-- banner down -->

@endsection
