@extends('user.layouts.app')

@section('content')
    <div class="pages about"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <img src="{{ asset('/img/about/img-10.jpg') }}" alt="">
        </div><!-- banner -->


        <div class="breadcrums"><!-- breadcrums -->
            <ul>
                <li><a href="/ru/">Главная</a></li>
                <li><a href="#">О нас</a></li>
            </ul>
        </div><!-- breadcrums -->
        <div class="container">
            <h1>О ALC</h1>


            <div class="about__slider">


                <a href="{{ asset('/img/about/file_1507011828_506300648.jpeg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image.jpeg') }}" alt="img-11">
                    <p>Лидер года 2017</p>
                </a>


                <a href="{{ asset('/img/about/file_1507011764_373045781.jpg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image1.jpeg') }}" alt="img-11">
                    <p>Специалист Года</p>
                </a>


                <a href="{{ asset('/img/about/file_1507011754_990417442.jpg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image2.jpeg') }}" alt="img-11">
                    <p>Руководитель года</p>
                </a>


                <a href="{{ asset('/img/about/file_1507011736_29883553.jpg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image3.jpeg') }}" alt="img-11">
                    <p>Лидер Года 2017</p>
                </a>


                <a href="{{ asset('/img/about/file_1502423749_197387939.jpg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image4.jpeg') }}" alt="img-11">
                    <p>Лучший руководитель 2016</p>
                </a>


                <a href="{{ asset('/img/about/file_1502423730_773854278.jpg') }}" class="fancy" rel="group">

                    <img src="{{ asset('/img/about/image5.jpeg') }}" alt="img-11">
                    <p>Лидер отрасли 2016 года</p>
                </a>

            </div>
            <h6>
                Мы рады приветствовать Вас на официальном сайте TOO &laquo;Atlant Logistics Company&raquo;!</h6>
            <p>
                ТОО &laquo;Atlant Logistics Company&raquo; активно развивающаяся, транспортно-экспедиторская компания, основана в 2013 году. За время непрерывной работы мы разработали и успешно применили уникальный логистический механизм и современную систему организации перевозки по всей территории Казахстана, которые не имеют аналогов на рынке транспортных услуг.</p>
            <p class="decor-text">
                <strong>TOO &laquo;Atlant Logistics Company&raquo;</strong> &mdash; это надежный и ответственный партнер в Вашем бизнесе, гарантирующий высокое качество услуг по организации транспортно &ndash; складских услуг.</p>
            <p class="about-quotes-text">
                <strong>Наша цель</strong> &ndash; укрепление позиций TOO &laquo;Atlant Logistics Company&raquo; в логистической и транспортной сфере.</p>
            <p>
                &nbsp;</p>
            <p>
                &nbsp;</p>
            <p>
                &nbsp;</p>

        </div>
        <div class="about__advantages dark"><!-- about advantages -->
            <div class="container">
                <h2>Наши преимущества
                    <span class="decor-line">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </h2>
                <div class="about__advantages__block">
                    <div class="about__advantages__block__img wow bounceIn" data-wow-offset="0" data-wow-delay="0s" data-wow-duration="0.5s">
                        <img src="{{ asset('/img/about/felial.svg') }}" alt="">
                    </div>
                    <p>Стратегически<br> правильно выстроенная<br> сеть филиалов</p>
                </div>
                <div class="about__advantages__block">
                    <div class="about__advantages__block__img wow bounceIn" data-wow-offset="0" data-wow-delay="0.3s" data-wow-duration="0.5s">
                        <img src="{{ asset('/img/about/sklad.svg') }}" alt="">
                    </div>
                    <p>Склады<br> для обработки <br> и хранения груза</p>
                </div>
                <div class="about__advantages__block">
                    <div class="about__advantages__block__img wow bounceIn" data-wow-offset="0" data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <img src="{{ asset('/img/about/park.svg') }}" alt="">
                    </div>
                    <p>Собственный<br> парк автомобилей</p>
                </div>
                <div class="about__advantages__block">
                    <div class="about__advantages__block__img wow bounceIn" data-wow-offset="0" data-wow-delay="0.9s" data-wow-duration="0.5s">
                        <img src="{{ asset('/img/about/otslejivanie.svg') }}" alt="">
                    </div>
                    <p>Отслеживание <br> отправлений на всем<br> пути следования </p>
                </div>
                <img class="about__advantages__img" src="{{ asset('/img/about/img.png') }}" alt="img">
            </div>
        </div><!-- about advantages -->
        <div class="about__car-park"><!-- about car park -->
            <div class="container">
                <h2>Наш автопарк
                    <span class="decor-line">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </h2>
                <p>В нашей работе мы используем только надежную и проверенную технику: автомашины Scania и Isuzu.</p>
                <p>Автопарк компании позволяет осуществлять следующие  типы перевозок, имея в наличии и рефрижераторные и изотермический грузовики ведущих европейский и японских производителей</p>
                <h6>Основные параметры:</h6>
                <ul class="ul-square blue">
                    <li><strong>Рефрижераторные перевозки</strong>. Температурные режимы от +20 до -20 °C, объем 33 паллета, длина 13,6 м, грузоподъемность 20 тонн (FTL). Основной тип перевозимых грузов: грузы, требующие соблюдения определенного температурного режима (продукты, косметика, цветы и прочие). </li>
                    <li><strong>Изотермические перевозки</strong>. Вместимость 7 паллет, длина 6 м, грузоподъемность 4 тонны . Основной тип перевозимых грузов: продольственные (не требующие соблюдения  температурного режима) </li>
                </ul>
                <div class="about__car-park__img">
                    <img src="{{ asset('/img/about/img-12.jpg') }}" alt="">
                    <img src="{{ asset('/img/about/img-13.jpg') }}" alt="">
                </div>
            </div>
        </div><!-- about car park -->
    </div><!-- pages content -->
    <div class="banner-down"><!-- banner down -->
        <img src="{{ asset('/img/about/img-14.jpg') }}" alt="img-14">
    </div><!-- banner down -->
@endsection
