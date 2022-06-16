@extends('layouts.app')


<div class="container">
    <div class="back_to_shop">
        <a href="{{ route('lending') }}" class="back_to__records">
            <img src="{{ asset('./image/svg/backToShop1.svg') }}" alt="bakc">
        </a>
    </div>
</div>

@if (session('buy') != null)
    <div class="container">
        <div class="all__basket">

            @foreach(session('buy') as $buy)
                <div class="one__basket">
                    <div class="this__image">
                        <img src="data:image/png;base64,{!! base64_encode($buy->mainPhoto) !!}" alt="image_basket"
                             class="icon__basket">
                    </div>

                    <div class="description">
                        <p class="title__basket">{{ $buy->name }}</p>
                        <p class="subtitle__basket">
                            {{ $buy->title }}
                        </p>
                    </div>

                    <form class="second__description" method="post" action="{{ route('numberBasket', $buy->id) }}">
                        @csrf

                        <p class="title__basket">Кількість</p>
                        <label class="checc">
                            <select name="user_profile_color_1" onchange="this.form.submit()">
                                <option
                                    @if(session("countRecord.$buy->id") == null or session("countRecord.$buy->id") == 1 ) selected
                                    @endif
                                    value="1">1
                                </option>

                                <option
                                    @if(session("countRecord.$buy->id") != null and session("countRecord.$buy->id") == 2 ) selected
                                    @endif value="2">2
                                </option>
                                <option
                                    @if(session("countRecord.$buy->id") != null and session("countRecord.$buy->id") == 3 ) selected
                                    @endif  value="3">3
                                </option>
                                <option
                                    @if(session("countRecord.$buy->id") != null and session("countRecord.$buy->id") == 4 ) selected
                                    @endif  value="4">4
                                </option>
                                <option
                                    @if(session("countRecord.$buy->id") != null and session("countRecord.$buy->id") == 5 ) selected
                                    @endif  value="5">5
                                </option>
                                <option
                                    @if(session("countRecord.$buy->id") != null and session("countRecord.$buy->id") == 10 ) selected
                                    @endif  value="10">10
                                </option>


                            </select>
                        </label>
                    </form>

                    <div class="third__description">
                        <p class="title__basket">Ціна</p>
                        <p class="subtitle__basket">
                            {{ $buy->price }} грн.
                        </p>
                    </div>


                    <form action="{{ route('dellOne', $buy->id) }}" method="post" class="formm">
                        @csrf
                        <label>
                            <input type="image"
                                   src="{{ asset('./image/jpg/альбом/cross-black-circular-button_icon-icons.com_73054.png') }}"
                                   class="button__in__basket" alt="delete">
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

@endif
@if(session('buyTurn') != null)
    <div class="container">
        <div class="all__basket">

            @foreach(session('buyTurn') as $buy)
                <div class="one__basket">
                    <div class="this__image">
                        <img src="data:image/png;base64,{!! base64_encode($buy->mainPhoto) !!}" alt="image_basket"
                             class="icon__basket">
                    </div>

                    <div class="description">
                        <p class="title__basket">{{ $buy->name }}</p>
                        <p class="subtitle__basket">
                            {{ $buy->title }}
                        </p>
                    </div>


                    <form class="second__description" method="post"
                          action="{{ route('numberBasketTurn', $buy->id) }}">
                        @csrf
                        <p class="title__basket">Кількість</p>
                        <label class="checc">
                            <select name="user_profile_color_2" onchange="this.form.submit()">
                                <option
                                    @if(session("countTurn.$buy->id") == null or session("countTurn.$buy->id") == 1 ) selected
                                    @endif
                                    value="1">1
                                </option>

                                <option
                                    @if(session("countTurn.$buy->id") != null and session("countTurn.$buy->id") == 2 ) selected
                                    @endif value="2">2
                                </option>
                                <option
                                    @if(session("countTurn.$buy->id") != null and session("countTurn.$buy->id") == 3 ) selected
                                    @endif  value="3">3
                                </option>
                                <option
                                    @if(session("countTurn.$buy->id") != null and session("countTurn.$buy->id") == 4 ) selected
                                    @endif  value="4">4
                                </option>
                                <option
                                    @if(session("countTurn.$buy->id") != null and session("countTurn.$buy->id") == 5 ) selected
                                    @endif  value="5">5
                                </option>
                                <option
                                    @if(session("countTurn.$buy->id") != null and session("countTurn.$buy->id") == 10 ) selected
                                    @endif  value="10">10
                                </option>


                            </select>
                        </label>
                    </form>

                    <div class="third__description">
                        <p class="title__basket">Ціна</p>
                        <p class="subtitle__basket">
                            {{ $buy->price }} грн.
                        </p>
                    </div>


                    <form action="{{ route('dellOneTurn', $buy->id) }}" method="post" class="formm">
                        @csrf
                        <label>
                            <input type="image"
                                   src="{{ asset('./image/jpg/альбом/cross-black-circular-button_icon-icons.com_73054.png') }}"
                                   class="button__in__basket" alt="delete">
                        </label>
                    </form>
                </div>
            @endforeach
        </div>



    </div>
@endif

@if(session('buyTurn') == null and session('buy') == null)
    <div class="container">
        <h1 class="notInBasket">Нажаль в кошику нічого немає :(</h1>

        <div class="flex topp">
            <button class="showMore">
                <a href="{{ route('turntables') }}" rel="next" class="relative">
                    До програвачів
                </a>
            </button>

            <button class="showMore">
                <a href="{{ route('records') }}" rel="next" class="relative">
                    До платівок
                </a>
            </button>
        </div>

    </div>
@else
    <div class="container">
        <form action="{{ route('dellBuy') }}" method="post" class="information__basket">
            @csrf

            <p>Загальна сума: {{ session('price')[0] }} грн.</p>
            <button class="button__buy__basket">Купити</button>

        </form>
    </div>

@endif

