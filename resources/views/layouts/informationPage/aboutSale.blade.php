<section class="sell">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="data:image/png;base64,{!! base64_encode($record[0]->mainPhoto) !!}" alt="main__photo" >
                <div class="suggestion">
                    <a href="#!" @if(!isset($record[0]->secondPhoto)) class="nothing" @endif>
                        <img src="data:image/png;base64,{!! base64_encode($record[0]->secondPhoto) !!}">
                    </a>
                    <a href="#!" @if(!isset($record[0]->secondPhoto)) class="nothing" @endif>
                        <img src="data:image/png;base64,{!! base64_encode($record[0]->thirdPhoto) !!}">
                    </a>
                </div>
            </div>

            <div class="col">
                <h1 class="title__sell">{{ $record[0]->name }} - {{ $record[0]->title }}</h1>
                <p class="subtitle__sell">{{ $record[0]->price }}грн.</p>
                <div class="divbutton__sell">
                    <button class="button__sell">
                        <a href="#!" class="sell_link">Купити</a>
                    </button>
                </div>
                <div class="tracklist">
                    @if(isset($record[0]->playlist))  {{  print(substr($record[0]->playlist,0,-1))  }} @endif
                </div>
            </div>
        </div>
    </div>
</section>
