@extends('layouts.app')

@section('header')
    @extends('layouts.header')
@endsection

@section('main_page')
    <a href="{{ route('lending') }}" class="nav__link">Головна</a>
@endsection

@section('turntables_page')
    <a href="{{ route('turntables') }}" class="nav__link active">Програвачі</a>
@endsection

@section('records_page')
    <a href="{{ route('records') }}" class="nav__link">Платівки</a>
@endsection

@section('footers')
    <a href="{{ route('footer') }}" class="nav__link">Контакти</a>
@endsection

<div class="intro__first_container">
    <div class="container">
        <h1 class="title__first_container">
            Програвачі вінілу
        </h1>
    </div>
</div>

@include('layouts.turntables.turntablesFilter')

<section class="turntable_section">
    <div class="container">

        <div class="row row-cols-3">

            @if(count($turntables))

            @foreach($turntables as $turntable)
                    <div class="col">
                        <div class="about__item">
                            <div class="about__card-turntable">
                                <div class="images__turntable">
                                    <img src="data:image/png;base64,{!! base64_encode($turntable->mainPhoto) !!}" alt="thorens" class="images ">
                                </div>
                                <div class="items">
                                    <h4 class="manufacturer">{{ $turntable->brend }}</h4>
                                    <p class="information__about">{{ $turntable->subText }}</p>
                                </div>
                                <div class="section__price">
                                    <p class="price__number">{{ $turntable->price }} грн</p>
                                    <div class="button_buy-pic">
                                        <button class="button__buy">
                                            <a href="{{ route('information') }}" class="section__purchase">
                                                Купити</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

                <div class="section__show_all">
                    <button class="button__show_all">
                        <a href="#!" class="section__show_all">Завантажити ще</a>
                    </button>
                </div>

            @else

                <div class="error">Нажаль в нас немає такого програвача :(</div>

            @endif



        </div>
    </div>
</section>


@include('layouts.turntables.firstContainerTurntables')
@include('layouts.turntables.secondContainerTurntables')

@section('footer')
    @extends('layouts.footer')
@endsection



