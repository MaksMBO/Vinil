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
                <a href="#!" class="purchase">
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


        </div>
        <div class="page__number">
            <img src="./image/svg/Polygon left.svg" alt="left" class="number">
            <a href="#!" class="number active">1</a>
            <a href="#!" class="number">2</a>
            <a href="#!" class="number">3</a>
            <img src="./image/svg/Polygon right.svg" alt="right" class="number">
        </div>
    </div>
</section>

<div class="intro__programmers">
    <div class="container">
        <h1 class="intro__programmers-title-first">Не знайшов потрібного програвача?</h1>

        <button class="button_more__catalog">
            <a href="turntables.blade.php" class="purchase__catalog">
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
            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/frank-sinatra-ultima 1.svg" alt="sinatra">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Frank Sinatra - Ultimate Christmas</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 650грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/Nirvana.svg" alt="Nirvana">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Nirvana – Feels Like The First Time</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 899грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/pink floyd.svg" alt="pink floyd">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Pink Floyd - The Dark Side Of The Moon</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 500грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/tyler-the-creator-ig 1.svg" alt="tyler-the-creator">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Tyler, The Creator - Igor</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 350грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/The Weeknd.svg" alt="The Weeknd">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">The Weeknd - Starboy</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 899грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/zemfira-zemfira-vend 1.svg" alt="zemfira">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Земфира - Вендетта</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 950грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/Adele.svg" alt="Adele">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Adele - 21</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 150грн.</p>
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

            <div class="col">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="{{ route('information') }}">
                                <img src="./image/svg/albums/three-days-grace-out 1.svg" alt="three-days-grace">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Three Days Grace - Outsider </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 450грн.</p>
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
        </div>
        <div class="page__number">
            <img src="./image/svg/Polygon left.svg" alt="left" class="number">
            <a href="#!" class="number active">1</a>
            <a href="#!" class="number">2</a>
            <a href="#!" class="number">3</a>
            <img src="./image/svg/Polygon right.svg" alt="right" class="number">
        </div>
    </div>
</section>

<div class="intro__records">
    <div class="container">
        <h1 class="intro__programmers-title-first">Будемо раді допомогти вам знайти записи!</h1>

        <button class="button_more__catalog">
            <a href="records.blade.php" class="purchase__catalog">
                До катологу</a>
        </button>
    </div>
</div>

@section('footer')
    @extends('layouts.footer')
@endsection


