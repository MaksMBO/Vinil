<section class="offers">
    <div class="container">
        <h1 class="title">Вас може зацікавити:</h1>

        <div class="row row-cols-4">
            @foreach($anothers as $another)

                <div class="col">
                    <a href="{{ route('recordPage', $another->id) }}" class="for_card">
                        <div class="album__all">
                            <div class="about__albums__item">
                                <div class="images__albums">
                                    <img src="data:image/png;base64,{!! base64_encode($another->mainPhoto) !!}"
                                         alt="Предложка 1">
                                </div>
                                <div class="items">
                                    <p class="information__about__albums">{{ $another->name }}
                                        - {{ $another->title }}</p>
                                </div>
                                <div class="section__price">
                                    <p class="price__number">{{ $another->price }}грн.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>
</section>

