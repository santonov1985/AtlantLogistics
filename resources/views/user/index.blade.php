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

            <a href="/services/" class="main__about__block">

                <img src="{{ asset('/img/index/image.jpeg?w=540&h=290&image=/cms/uploads/file_1502423347_452243306.jpg') }}" alt="img-2">
                <span class="main__about__block__text">
                    <h3>Складирование грузов</h3>
                    <p>
                        Мы предлагаем обширный спектр услуг по складированию и хранению грузов:</p>
                    <ul>
                        <li>
                                Краткосрочное и долгосрочное хранение;</li>
                        <li>
                                Погрузку и разгрузку;</li>
                        <li>
                                Грузовую маркировку и упаковку;</li>
                        <li>
                                Упаковочные услуги...</li>
                    </ul>
                </span>
            </a>

            <a href="/services/" class="main__about__block">

                <img src="{{ asset('/img/index/image1.jpeg?w=540&h=290&image=/cms/uploads/file_1502423347_452243306.jpg') }}" alt="img-2">
                <span class="main__about__block__text">
                    <h3>Ж/д перевозки</h3>
                    <p>
                        Наши услуги по железнодорожным перевозкам включают в себя следующее:</p>
                    <ul>
                        <li>
                                Разработка оптимальных маршрутов поставки;</li>
                        <li>
                                Расчет ж/д тарифов и оптимизация транспортных издержек;</li>
                        <li>
                                Оформление товаросопроводительных документов...</li>
                    </ul>
                </span>
            </a>

            <a href="/services/" class="main__about__block">

{{--                <img src="/cms/image.php?w=540&h=290&image=/cms/uploads/file_1502423347_452243306.jpg" alt="img-2">--}}
                <img src="{{ asset('/img/index/image2.jpeg?w=540&h=290&image=/cms/uploads/file_1502423347_452243306.jpg') }}" alt="img-2">
                <span class="main__about__block__text">
                        <h3>Авиаперевозки</h3>
                        <p>
                        	Компания &laquo;Atlant Logistics Company&raquo; предоставляет полный комплекс логистических услуг по авиаперевозкам:</p>
                        <ul>
                            <li>
                            		Квалифицированная консультация по вопросам организации перевозок авиатранспортом;</li>
                            <li>
                            		Разработка оптимальной логистической цепочки доставки грузов;</li>
                            <li>
                            		Оперативный расчет стоимости авиаперевозки...</li>
                        </ul>

                    </span>
            </a>

            <a href="/services/" class="main__about__block">

                <img src="{{ asset('/img/index/image3.jpeg?w=540&h=290&image=/cms/uploads/file_1502423347_452243306.jpg') }}" alt="img-2">
                <span class="main__about__block__text">
                        <h3>Автоперевозки</h3>
                        <p>
                        	Наши услуги по автоперевозке включают в себя:</p>
                        <ul>
                            <li>
                            		Доставка грузов по территории Республики Казахстан &laquo;от двери до двери&raquo;;</li>
                            <li>
                            		Организация международных автомобильных перевозок;</li>
                            <li>
                            		Консолидация...</li>
                        </ul>
                </span>
            </a>

        </div>
    </div>
    <!-- main about -->
    <div class="main__company">
        <!-- main company -->
        <div class="main__company__img">
            <img src="{{ asset('/img/index/img-6.jpg') }}" alt="img-6">
        </div>
        <div class="main__company__right dark">
            <h2>
                <a href="/ru/about/">

                    О компании

                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>

                </a>
            </h2>
            <p>
                <strong>Мы рады приветствовать Вас на официальном сайте TOO &laquo;Atlant Logistics Company&raquo;</strong>
            </p>
            <p>
                Atlant Logistics Company активно развивающаяся, транспортно-экспедиторская компания, основана в 2013 году. За время непрерывной работы мы разработали и успешно применили уникальный логистический механизм и современную систему организации перевозки по всей территории Казахстана, которые не имеют аналогов на рынке транспортных услуг.</p>
            <p>
                Вежливый персонал, компетентно ответит на все ваши вопросы и просьбы. Вовремя сообщит и представит необходимую информацию о ваших отправлениях, обеспечит необходимое качество услуг и достойный сервис обслуживания.</p>
            <p>
                TOO &laquo;Atlant Logistics Company&raquo; &mdash; это надежный и ответственный партнер в Вашем бизнесе, гарантирующий высокое качество услуг по организации транспортно &ndash; складских услуг.</p>

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
                <a href="/ru/news/">
                    Новости
                    <span class="decor-line">
                            <span></span>
                            <span></span>
                            <span></span>
                    </span>
                </a>
            </h2>

            <div class="main__news__block">
                <span class="main__news__block__date">03.09.2018</span>
                <a href="/ru/news/1223-zheleznyje_dorogi_v_kyrgyzstane_sozdajut_70_problem_dla_eksporterov/">Железные дороги в Кыргызстане создают 70% проблем для экспортеров</a>
                <p>Большинство проблем у бизнесменов, которые возят товары из Казахстана и России в Кыргызстан, возникает из-за местных железных дорог.</p>
            </div>

            <div class="main__news__block">
                <span class="main__news__block__date">27.08.2018</span>
                <a href="/ru/news/1222-objem_perevozok_vyros_na_7_za_god_v_kazahstane/">Объем перевозок вырос на 7% за год в Казахстане</a>
                <p>Треть всех грузоперевозок в РК приходится на ВКО и Карагандинскую область.</p>
            </div>

            <div class="main__news__block">
                <span class="main__news__block__date">23.08.2018</span>
                <a href="/ru/news/1221-objem_kontejnernyh_perevozok_cherez_kazahstan_za_sem_mesacev_vyros_na_40__mir_rk/">Объем контейнерных перевозок через Казахстан за семь месяцев вырос на 40% — МИР РК</a>
                <p>Вместе с тем достигнут плановый показатель по транспортному комплексу. ИФО за период январь-июль составил 104,9%.</p>
            </div>

            <div class="main__news__block">
                <span class="main__news__block__date">13.08.2018</span>
                <a href="/ru/news/1220-rossija_postroit_avtomagistral_kotoraja_svazhet_kazahstan_i_belarus/">Россия построит автомагистраль, которая свяжет Казахстан и Беларусь</a>
                <p>Утвержден срок начала строительства — 2019 год.</p>
            </div>

        </div>
    </div>
@endsection
