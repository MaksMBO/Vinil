@extends('layouts.app')


<div class="container">
    <div class="back_to_shop">
        <a href="{{ route('lending') }}" class="back_to__records">
            <img src="{{ asset('./image/svg/backToShop1.svg') }}" alt="bakc">
        </a>
    </div>
</div>


<div class="container">
    <div class="all__basket">

        @foreach(session('buy') as $buy)
            <div class="one__basket">
                <img src="data:image/png;base64,{!! base64_encode($buy->mainPhoto) !!}" alt="image_basket"
                     class="icon__basket">
                <div class="description">
                    <p class="title__basket">{{ $buy->name }}</p>
                    <p class="subtitle__basket">
                        {{ $buy->title }}
                    </p>
                </div>

                <div class="second__description">
                    <p class="title__basket">Кількість</p>
                    <label>
                        <select name="user_profile_color_1" onchange="this.form.submit()">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </label>
                </div>

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





    <form action="{{ route('dellBuy') }}" method="post" class="information__basket">
        @csrf

        <p>Загальна сума: {{ session('price')[0] }} грн.</p>
        <button class="button__buy__basket">Купити</button>

    </form>
</div>

