@extends('layouts.app')

@section('header')
    @extends('layouts.header')
@endsection

@section('main_page')
    <a href="{{ route('lending') }}" class="nav__link active">Головна</a>
@endsection

@section('turntables_page')
    <a href="{{ route('turntables') }}" class="nav__link">Програвачі</a>
@endsection

@section('records_page')
    <a href="{{ route('records') }}" class="nav__link">Платівки</a>
@endsection

@section('footers')
    <a href="{{ route('footer') }}" class="nav__link">Контакти</a>
@endsection

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro_-title-first">Збери свою аудіо систему!</h1>

            <h2 class="intro_-title-second">Будь найкращим разом з нами</h2>

            <button class="button_more">
                <a href="{{ route('records') }}" class="purchase">
                    Детальніше</a>
            </button>
        </div>
    </div>
</div>


<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Програвачi вiнiлу</h2>
        </div>
        <div class="row row-cols-3">

            @foreach($turntables as $turntable)
                <div class="col-xxl col-xl col-md-6 col-sm-4 col-4">
                    <div class="about__item">
                        <div class="about__card-turntable">
                            <div class="images__turntable">
                                <img src="data:image/png;base64,{!! base64_encode($turntable->mainPhoto) !!}"
                                     alt="thorens" class="images ">


                            </div>
                            <div class="items">
                                <h4 class="manufacturer">{{ $turntable->brend }}</h4>
                                <p class="information__about">{{ $turntable->subText }}</p>
                            </div>
                            <div class="section__price">
                                <p class="price__number">{{ $turntable->price }} грн</p>
                                <div class="button_buy-pic">
                                    <button class="button__buy">
                                        <a href="{{ route('turntablePage', $turntable->id) }}" class="section__purchase">
                                            Купити</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="intro__programmers">
    <div class="container">
        <h1 class="intro__programmers-title-first">Не знайшов потрібного програвача?</h1>

        <button class="button_more__catalog">
            <a href="{{ route('turntables') }}" class="purchase__catalog">
                До катологу</a>
        </button>
    </div>
</div>

<section class="section_records">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Вiнiловi платiвки</h2>
        </div>
        <div class="row row-cols-4">
            @foreach($records as $record)

                <div class="col c1">
                    <div class="album__all">
                        <div class="about__albums__item">
                            <div class="images__albums">
                                <a href="{{ route('recordPage', $record->id) }}">
                                    <img src="data:image/png;base64,{!! base64_encode($record->mainPhoto) !!}"
                                         alt="sinatra">
                                </a>
                            </div>

                            <div class="items">
                                <p class="information__about__albums">{{ $record->name }} - {{ $record->title }}</p>
                            </div>

                            <div class="section__price">
                                <p class="price__number">{{ $record->price }} грн.</p>
                                <div class="button_buy-pic">
                                    <button class="button__buy">
                                        <a href="{{ route('recordPage', $record->id) }}" class="section__purchase">
                                            Купити</a>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

<div class="intro__records">
    <div class="container">
        <h1 class="intro__programmers-title-first">Будемо раді допомогти вам знайти записи!</h1>

        <button class="button_more__catalog">
            <a href="{{ route('records') }}" class="purchase__catalog">
                До катологу</a>
        </button>
    </div>
</div>

@section('footer')
    @extends('layouts.footer')
@endsection


