@extends('user.layouts.app')

@section('content')


    <div class="pages"><!-- pages content -->
        <div class="banner"><!-- banner -->
            <img src="{{ asset('/img/img-22.jpg') }}" alt="img-22">
        </div><!-- banner -->


        <div class="breadcrums"><!-- breadcrums -->
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="#">Оформить заявку</a></li>
            </ul>
        </div><!-- breadcrums -->
        <div class="container">
            <h1>Оформить заявку</h1>
            <div class="pages__form">
                <form method="post" class="form" id="blankForm">
                    <div class="form__row">
                        <p>Имя <span>*</span></p>
                        <input class="form__input" type="text" placeholder="Иванов Иван Иванович" required="required" name="name">
                    </div>
                    <div class="form__row">
                        <p>Телефон <span>*</span></p>
                        <input class="form__input number" type="text" placeholder="+7 (___) ___-____" required="required" name="phone">
                    </div>
                    <div class="form__row">
                        <p>E-mail</p>
                        <input class="form__input" type="email" placeholder="E-mail" required="required" name="email">
                    </div>
                    <div class="form__row">
                        <p>Пункт отправления <span>*</span></p>
                        <input class="form__input" type="text" placeholder="Алматы" required="required" name="from">
                    </div>
                    <div class="form__row">
                        <p>Пункт назначения <span>*</span></p>
                        <input class="form__input" type="text" placeholder="Астана" required="required" name="to">
                    </div>
                    <div class="form__row">
                        <p>Наименование груза <span>*</span></p>
                        <input class="form__input" type="text" placeholder="Мебель, личные вещи" required="required" name="itemName">
                    </div>
                    <div class="form__row">
                        <p>Вес, кг <span>*</span></p>
                        <input class="form__input" type="text" placeholder="50" required="required" name="weight">
                    </div>
                    <div class="form__row">
                        <p>Дополнительные <br>комментарии</p>
                        <textarea cols="30" rows="4" placeholder="Сообщение" required="required" name="comment"></textarea>
                    </div>
                    <input type="submit" value="Отправить" class="btn">
                </form>
            </div>
        </div>
    </div><!-- pages content -->

    <div class="banner-down"><!-- banner down -->
        <img src="{{ asset('/img/img-23.jpg') }}" alt="img-23">
    </div><!-- banner down -->

@endsection
