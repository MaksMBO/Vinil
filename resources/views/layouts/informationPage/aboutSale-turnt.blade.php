<section class="sell">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="data:image/png;base64,{!! base64_encode($turntable[0]->mainPhoto) !!}" alt="main__photo">
            </div>

            <div class="col">
                <h1 class="title__sell">{{ $turntable[0]->brend }} - {{ $turntable[0]->subText }}</h1>
                <p class="subtitle__sell">{{ $turntable[0]->price }}грн.</p>
                <div class="divbutton__sell">
                    @if (session('user') !== null)
                        <form method="post" action="{{ route('addToBasketTurn', $turntable[0]->id) }}">
                            @csrf
                            <button class="button__sell">
                                <p class="sell_link">Купити</p>
                            </button>
                        </form>
                    @else
                        <button class="button__sell">
                            <a href="{{route('login')}}" class="sell_link">Купити</a>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
