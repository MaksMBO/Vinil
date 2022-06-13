@section('filter')
<section class="section">
    <div class="container">
        <div class="button__helper">
            <div class="buttons__examination">
                <div class="second__button">
                    <input type="checkbox" class="brend_button-box" id="brend_button" name="brend_button" value="yes">
                    <label for="brend_button" class="label1">
                        Бренд <img src="{{asset('image/svg/details/Vector 1.svg')}}" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__brend">
                        <div class="divs">
                            <input type="checkbox" id="ION">
                            <p>ION</p> <br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Audio-Technica">
                            <p>Audio-Technica</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Pro-Ject">
                            <p>Pro-Ject</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="TEAC">
                            <p>TEAC</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Klipsch">
                            <p>Klipsch</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Jamo">
                            <p>Jamo</p><br>
                        </div>
                    </div>
                </div>

                <div class="third__button">
                    <input type="checkbox" class="amount_button-box" id="amount_button" name="amount_button" value="yes" >
                    <label for="amount_button" class="label2">
                        Кількість <img src="{{asset('image/svg/details/Vector 1.svg')}}" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__amount">
                        <div class="divs">
                            <input type="checkbox" id="1">
                            <p>1</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="2">
                            <p>2</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="3">
                            <p>3</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="4">
                            <p>4</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="5">
                            <p>5</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="10">
                            <p>10</p><br>
                        </div>
                    </div>
                </div>

                <div class="first__button">
                    <input type="checkbox" class="price_button-box" id="price_button" name="price_button" value="yes">
                    <label for="price_button" class="label3">
                        Ціна <img src="{{asset('image/svg/details/Vector 1.svg')}}" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__price">
                        <div class="menu__price">

                            <input type="text" class="start">
                            <img src="{{asset('image/svg/details/Line 1.svg')}}" alt="line">
                            <input type="text" class="end">
                            <button class="ok">ОК</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search">
                <form class="my__search" method="get" action="{{ route('turntablesSearch') }}"  id="searchform">
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
                    <input type="checkbox" class="filter-checkbox" id="mobile_filter" name="mobile_filter" value="yes">
                    <label for="mobile_filter" class="label_filter">
                        <div class="icon__filter">
                            <div class="label__div">
                                <img src="{{asset('image/svg/icon/pngwing.com.png')}}" alt="filter">
                                <p>Фільтри</p>
                            </div>

                            <div class="search">
                                <form class="my__search" method="get" action="{{ route('turntablesSearch') }}"  id="searchform">
                                    <input type="search" name="search__turntables">
                                    <img src="{{asset('image/svg/details/Search.svg')}}" alt="search">
                                </form>
                            </div>
                        </div>
                    </label>

                    <div class="div">
                        <br>
                        <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>

                        <input type="checkbox" class="mobile_brend-checkbox" id="mobile_brend" name="mobile_brend" value="yes">
                        <label for="mobile_brend" class="label_brend">
                            <div class="clickss">
                                <p>Бренд</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="brend"><br>
                            <div class="divs">
                                <input type="checkbox" id="ION">
                                <p>ION</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Audio-Technica">
                                <p>Audio-Technica</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Pro-Ject">
                                <p>Pro-Ject</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="TEAC">
                                <p>TEAC</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Klipsch">
                                <p>Klipsch</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Jamo">
                                <p>Jamo</p><br>
                            </div>
                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_amount-checkbox" id="mobile_amount" name="mobile_amount" value="yes">
                        <label for="mobile_amount" class="label_amount">
                            <div class="clickss">
                                <p>Кількість</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>
                        </label>


                        <div class="amount"><br>
                            <div class="divs">
                                <input type="checkbox" id="1">
                                <p>1</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="2">
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="3">
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="4">
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="5">
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="10">
                                <p>10</p><br>
                            </div>
                        </div>


                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_price-checkbox" id="mobile_price" name="mobile_price" value="yes">
                        <label for="mobile_price" class="label_price">
                            <div class="clickss">
                                <p>Ціна</p>
                                <img src="{{asset('image/jpg/click.png')}}" alt="click">
                                <img src="{{asset('image/jpg/click_active.png')}}" alt="click_active">
                            </div>

                        </label>


                        <div class="price"><br>
                            <div class="price_menu-mobile">
                                <input type="text" class="start">
                                <img src="{{asset('image/svg/details/Line 1.svg')}}" alt="line">
                                <input type="text" class="end">
                                <button class="ok">ОК</button>
                            </div>
                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
