<section class="section">
    <div class="container">
        <div class="button__helper">
            <form action="{{ route('checkboxesTurn') }}" method="get" class="form_for_filters">
                <div class="buttons__examination">
                    <div class="second__button">
                        <input type="checkbox" class="brend_button-box" id="brend_button" name="brend_button"
                               value="yes">
                        <label for="brend_button" class="label1">
                            Бренд <img src="{{asset('image/svg/details/Vector 1.svg')}}" alt="arrow"
                                       class="image_arrow">
                        </label>
                        <br>


                        <div class="my__brend">


                            <div class="divs">
                                <label for="ION">
                                    <input type="checkbox" value="Technics" name="genre[]"
                                           @if(in_array("Technics", $checkGenre)) checked @endif>
                                </label>
                                <button class="noneButton">noneButton</button>
                                <p>Technics</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Audio-Technica" name="genre[]"
                                       @if(in_array("Audio-Technica", $checkGenre)) checked @endif>
                                <p>Audio-Technica</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Pro-Ject" name="genre[]"
                                       @if(in_array("Pro-Ject", $checkGenre)) checked @endif>
                                <p>Pro-Ject</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Thorens" name="genre[]"
                                       @if(in_array("Thorens", $checkGenre)) checked @endif>
                                <p>Thorens</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Klipsch" name="genre[]"
                                       @if(in_array("Klipsch", $checkGenre)) checked @endif>
                                <p>Klipsch</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Jamo" name="genre[]"
                                       @if(in_array("Jamo", $checkGenre)) checked @endif>
                                <p>Jamo</p><br>
                            </div>
                        </div>
                    </div>

                    <div class="third__button">
                        <input type="checkbox" class="amount_button-box" id="amount_button" name="amount_button"
                               value="yes">
                        <label for="amount_button" class="label2">
                            Кількість <img src="{{asset('image/svg/details/Vector 1.svg')}}" alt="arrow"
                                           class="image_arrow">
                        </label>

                        <br>
                        <div class="my__amount">
                            <div class="divs">
                                <input type="checkbox" value="1" name="amount[]"
                                       @if(in_array("1", $amount)) checked @endif>
                                <p>1</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="2" name="amount[]"
                                       @if(in_array("2", $amount)) checked @endif>
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="3" name="amount[]"
                                       @if(in_array("3", $amount)) checked @endif>
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="4" name="amount[]"
                                       @if(in_array("4", $amount)) checked @endif>
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="5" name="amount[]"
                                       @if(in_array("5", $amount)) checked @endif>
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="10" name="amount[]"
                                       @if(in_array("10", $amount)) checked @endif>
                                <p>10</p><br>
                            </div>
                        </div>
                    </div>

                    <div class="first__button">
                        <input type="checkbox" class="price_button-box" id="price_button" name="price_button"
                               value="yes">
                        <label for="price_button" class="label3">
                            Ціна <img src="{{asset('./image/svg/details/Vector 1.svg')}}" alt="arrow"
                                      class="image_arrow">
                        </label>

                        <br>
                        <div class="my__price">
                            <div class="menu__price">
                                <label>
                                    <input type="text" class="start" name="start" value={{$start}}>
                                </label>
                                <img src="{{asset('./image/svg/details/Line 1.svg')}}" alt="line">
                                <label>
                                    <input type="text" class="end" name="end" value={{$end}}>
                                </label>
                                <button class="ok">ОК</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <div class="search">
                <form class="my__search" method="post" action="{{ route('turntablesSearch') }}" id="searchform">
                    @csrf
                    <input type="search" name="search__turntables">
                    <img src="{{asset('image/svg/details/Search.svg')}}" alt="search">
                </form>
            </div>
        </div>
    </div>


    <div class="button__helper_mobile">
        <div class="container">
            <div class="sub__header">
                <div class="menu">
                    <input type="checkbox" class="filter-checkbox" id="mobile_filter" name="mobile_filter"
                           value="yes">
                    <label for="mobile_filter" class="label_filter">
                        <div class="icon__filter">
                            <div class="label__div">
                                <img src="{{asset('image/svg/icon/pngwing.com.png')}}" alt="filter">
                                <p>Фільтри</p>
                            </div>

                            <div class="search">
                                <form class="my__search" method="get" action="{{ route('turntablesSearch') }}"
                                      id="searchform">
                                    <input type="search" name="search__turntables">
                                    <img src="{{asset('image/svg/details/Search.svg')}}" alt="search">
                                </form>
                            </div>
                        </div>
                    </label>

                    <div class="div">
                        <form action="{{ route('checkboxesTurn') }}" method="get">
                        <br>
                        <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>

                        <input type="checkbox" class="mobile_brend-checkbox" id="mobile_brend" name="mobile_brend"
                               value="yes">
                        <label for="mobile_brend" class="label_brend">
                            <div class="clickss">
                                <p>Бренд</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="brend"><br>
                            <div class="divs">
                                <label for="ION">
                                    <input type="checkbox" value="Technics" name="genre[]"
                                           @if(in_array("Technics", $checkGenre)) checked @endif>
                                </label>
                                <button class="noneButton">noneButton</button>
                                <p>Technics</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Audio-Technica" name="genre[]"
                                       @if(in_array("Audio-Technica", $checkGenre)) checked @endif>
                                <p>Audio-Technica</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Pro-Ject" name="genre[]"
                                       @if(in_array("Pro-Ject", $checkGenre)) checked @endif>
                                <p>Pro-Ject</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Thorens" name="genre[]"
                                       @if(in_array("Thorens", $checkGenre)) checked @endif>
                                <p>Thorens</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Klipsch" name="genre[]"
                                       @if(in_array("Klipsch", $checkGenre)) checked @endif>
                                <p>Klipsch</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="Jamo" name="genre[]"
                                       @if(in_array("Jamo", $checkGenre)) checked @endif>
                                <p>Jamo</p><br>
                            </div>
                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_amount-checkbox" id="mobile_amount"
                               name="mobile_amount" value="yes">
                        <label for="mobile_amount" class="label_amount">
                            <div class="clickss">
                                <p>Кількість</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="amount"><br>
                            <div class="divs">
                                <input type="checkbox" value="1" name="amount[]"
                                       @if(in_array("1", $amount)) checked @endif>
                                <p>1</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="2" name="amount[]"
                                       @if(in_array("2", $amount)) checked @endif>
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="3" name="amount[]"
                                       @if(in_array("3", $amount)) checked @endif>
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="4" name="amount[]"
                                       @if(in_array("4", $amount)) checked @endif>
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="5" name="amount[]"
                                       @if(in_array("5", $amount)) checked @endif>
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" value="10" name="amount[]"
                                       @if(in_array("10", $amount)) checked @endif>
                                <p>10</p><br>
                            </div>
                        </div>


                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_price-checkbox" id="mobile_price" name="mobile_price"
                               value="yes">
                        <label for="mobile_price" class="label_price">
                            <div class="clickss">
                                <p>Ціна</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>

                        </label>


                            <div class="price"><br>
                                <div class="price_menu-mobile">
                                    <label>
                                        <input type="text" class="start" name="start" value={{$start}}>
                                    </label>
                                    <img src="{{asset('./image/svg/details/Line 1.svg')}}" alt="line">
                                    <label>
                                        <input type="text" class="end" name="end" value={{$end}}>
                                    </label>
                                    <button class="ok">ОК</button>
                                </div>
                            </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

