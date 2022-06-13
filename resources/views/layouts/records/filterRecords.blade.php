<section class="section">
    <div class="container">
        <div class="button__helper">
            <form action="{{ route('checkboxes') }}" method="get" class="form_for_filters">
                <div class="buttons__examination">
                    <div class="second__button">
                        <input type="checkbox" class="genre_button-box" id="genre_button" name="genre_button"
                               value="yes">
                        <label for="genre_button" class="label1">
                            Жанр <img src="{{asset('./image/svg/details/Vector 1.svg')}}" alt="arrow"
                                      class="image_arrow">
                        </label>
                        <br>


                        <div class="my__genre">


                            <div class="divs">
                                <label for="Альтернативний рок"></label>
                                <input type="checkbox" id="Альтернативний рок" value="Альтернативний рок" name="genre[]"

                                       @if(in_array("Альтернативний рок", $checkGenre)) checked @endif>
                                <button class="noneButton">noneButton</button>
                                <p>Альтернативний рок</p>    <br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Арт рок" name="genre[]"
                                           @if(in_array("Арт рок", $checkGenre)) checked @endif>
                                </label>
                                <p>Арт рок</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Блюз" name="genre[]"
                                           @if(in_array("Блюз", $checkGenre)) checked @endif>
                                </label>
                                <p>Блюз</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Кантрі" name="genre[]"
                                           @if(in_array("Кантрі", $checkGenre)) checked @endif>
                                </label>
                                <p>Кантрі</p> <br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Фолк" name="genre[]"
                                           @if(in_array("Фолк", $checkGenre)) checked @endif>
                                </label>
                                <p>Фолк</p> <br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Фанк" name="genre[]"
                                           @if(in_array("Фанк", $checkGenre)) checked @endif>
                                </label>
                                <p>Фанк</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Гранж" name="genre[]"
                                           @if(in_array("Гранж", $checkGenre)) checked @endif>
                                </label>
                                <p>Гранж</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Хип-хоп" name="genre[]"
                                           @if(in_array("Хип-хоп", $checkGenre)) checked @endif>
                                </label>
                                <p>Хип-хоп</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Поп" name="genre[]"
                                           @if(in_array("Поп", $checkGenre)) checked @endif>
                                </label>
                                <p>Поп</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Інді" name="genre[]"
                                           @if(in_array("Інді", $checkGenre)) checked @endif>
                                </label>
                                <p>Інді</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Джаз" name="genre[]"
                                           @if(in_array("Джаз", $checkGenre)) checked @endif>
                                </label>
                                <p>Джаз</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Нью вейв" name="genre[]"
                                           @if(in_array("Нью вейв", $checkGenre)) checked @endif>
                                </label>
                                <p>Нью вейв</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Метал" name="genre[]"
                                           @if(in_array("Метал", $checkGenre)) checked @endif>
                                </label>
                                <p>Метал</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Реггі" name="genre[]"
                                           @if(in_array("Реггі", $checkGenre)) checked @endif>
                                </label>
                                <p>Реггі</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Електронна музика" name="genre[]"

                                           @if(in_array("Електронна музика", $checkGenre)) checked @endif>
                                </label>
                                <p>Електронна музика</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="Саундтрек" name="genre[]"

                                           @if(in_array("Саундтрек", $checkGenre)) checked @endif>
                                </label>
                                <p>Саундтрек</p><br>
                            </div>

                        </div>

                    </div>


                    <div class="third__button">
                        <input type="checkbox" class="amount_button-box" id="amount_button" name="amount_button"
                               value="yes">
                        <label for="amount_button" class="label2">
                            Кількість <img src="{{asset('./image/svg/details/Vector 1.svg')}}" alt="arrow"
                                           class="image_arrow">
                        </label>

                        <br>
                        <div class="my__amount">
                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="1" name="amount[]"
                                           @if(in_array("1", $amount)) checked @endif>
                                </label>
                                <p>1</p> <br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="2" name="amount[]"
                                           @if(in_array("2", $amount)) checked @endif>
                                </label>
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="3" name="amount[]"
                                           @if(in_array("3", $amount)) checked @endif>
                                </label>
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="4" name="amount[]"
                                           @if(in_array("4", $amount)) checked @endif>
                                </label>
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="5" name="amount[]"
                                           @if(in_array("5", $amount)) checked @endif>
                                </label>
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="10" name="amount[]"
                                           @if(in_array("10", $amount)) checked @endif>
                                </label>
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
                <form class="my__search" method="post" action="{{ route("recordsSearch") }}" id="searchform">
                    @csrf
                    <input type="search" name="search">
                    <img src="{{asset('./image/svg/details/Search.svg')}}" alt="search">
                </form>


            </div>
        </div>
    </div>

    <div class="button__helper_mobile">
        <div class="container">
            <div class="sub__header">
                <div class="menu">
                    <input type="checkbox" class="filter-checkbox" id="mobile_filter" name="mobile_filter" value="yes">
                    <label for="mobile_filter" class="label_filter">
                        <div class="icon__filter">
                            <div class="label__div">
                                <img src="{{asset('./image/svg/icon/pngwing.com.png')}}" alt="filter">
                                <p>Фільтри</p>
                            </div>

                            <div class="search">
                                <form class="my__search" method="get" action="records.php" id="searchform">
                                    <input type="search" name="search">
                                    <img src="{{asset('./image/svg/details/Search.svg')}}" alt="search">
                                </form>
                            </div>
                        </div>
                    </label>


                    <div class="div">
                        <form action="{{ route('checkboxes') }}" method="get">
                        <br>
                        <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>

                        <input type="checkbox" class="mobile_genre-checkbox" id="mobile_genre" name="mobile_genre"
                               value="yes">
                        <label for="mobile_genre" class="label_genre">
                            <div class="clickss">
                                <p>Жанр</p>
                                <img src="{{asset('./image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('./image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="genre"><br>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Альтернативний рок" name="genre[]"

                                               @if(in_array("Альтернативний рок", $checkGenre)) checked @endif>
                                    </label>
                                    <button class="noneButton">noneButton</button>
                                    <p>Альтернативний рок</p>    <br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Арт рок" name="genre[]"

                                               @if(in_array("Арт рок", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Арт рок</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Блюз" name="genre[]"
                                               @if(in_array("Блюз", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Блюз</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Кантрі" name="genre[]"

                                               @if(in_array("Кантрі", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Кантрі</p> <br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Фолк" name="genre[]"
                                               @if(in_array("Фолк", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Фолк</p> <br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Фанк" name="genre[]"
                                               @if(in_array("Фанк", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Фанк</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Гранж" name="genre[]"

                                               @if(in_array("Гранж", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Гранж</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Хип-хоп" name="genre[]"

                                               @if(in_array("Хип-хоп", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Хип-хоп</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Поп" name="genre[]"
                                               @if(in_array("Поп", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Поп</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Інді" name="genre[]"
                                               @if(in_array("Інді", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Інді</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Джаз" name="genre[]"
                                               @if(in_array("Джаз", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Джаз</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Нью вейв" name="genre[]"

                                               @if(in_array("Нью вейв", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Нью вейв</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Метал" name="genre[]"

                                               @if(in_array("Метал", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Метал</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Реггі" name="genre[]"

                                               @if(in_array("Реггі", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Реггі</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Електронна музика" name="genre[]"

                                               @if(in_array("Електронна музика", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Електронна музика</p><br>
                                </div>

                                <div class="divs">
                                    <label>
                                        <input type="checkbox" value="Саундтрек" name="genre[]"

                                               @if(in_array("Саундтрек", $checkGenre)) checked @endif>
                                    </label>
                                    <p>Саундтрек</p><br>
                                </div>

                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_amount-checkbox" id="mobile_amount" name="mobile_amount"
                               value="yes">
                        <label for="mobile_amount" class="label_amount">
                            <div class="clickss">
                                <p>Кількість</p>
                                <img src="{{asset('./image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('./image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="amount"><br>
                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="1" name="amount[]"
                                           @if(in_array("1", $amount)) checked @endif>
                                </label>
                                <p>1</p> <br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="2" name="amount[]"
                                           @if(in_array("2", $amount)) checked @endif>
                                </label>
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="3" name="amount[]"
                                           @if(in_array("3", $amount)) checked @endif>
                                </label>
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="4" name="amount[]"
                                           @if(in_array("4", $amount)) checked @endif>
                                </label>
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="5" name="amount[]"
                                           @if(in_array("5", $amount)) checked @endif>
                                </label>
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <label>
                                    <input type="checkbox" value="10" name="amount[]"
                                           @if(in_array("10", $amount)) checked @endif>
                                </label>
                                <p>10</p><br>
                            </div>
                        </div>


                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_price-checkbox" id="mobile_price" name="mobile_price"
                               value="yes">
                        <label for="mobile_price" class="label_price">
                            <div class="clickss">
                                <p>Ціна</p>
                                <img src="{{asset('./image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('./image/jpg/click_active.png')}}" alt="click_active">
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
