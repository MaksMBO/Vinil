<section class="records_catalog">
    <div class="container">
        <div class="row row-cols-4">

            @if(count($records))
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

        <div class="container">
            <div class="my_center">
                {{ $records->links() }}
            </div>
        </div>

        @else
            <div class="error">Нажаль в нас немає таких платівок :(</div>
        @endif

    </div>
</section>
