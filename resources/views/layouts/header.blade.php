<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="logo">
                <a href="#!" class="header__logo-link">
                    <img src="{{asset('image/svg/logo.svg')}}" alt="Vinyl shop" class="header__logo-pic">
                </a>
            </div>

            <nav class="nav">
                @yield('main_page')
                @yield('turntables_page')
                @yield('records_page')
                @yield('footers')
            </nav>

            <div class="dropdown">

                <button onclick="myFunction()" class="dropbtn">
                    <div class="basket__logo">
                        <img src="{{asset('image/svg/icon_basket.svg')}}" alt="Basket" class="basket__logo-pic">

                        <div class="price">
                            <p class="basket-link">@if(session('price') == null) 0 @else {{ session('price')[0] }} @endif грн</p>
                            <img src="{{asset('image/svg/basket-polygon.svg')}}" alt="Basket polygon"
                                 class="basket-polygon-pic">
                        </div>
                    </div>
                </button>
                <div id="myDropdown" class="dropdown-content">

                    @if (session('user') !== null)
                        <a href="" class="my__linkss">{{ session('user')['login'] }}</a>
                        <a href="{{ route("basket") }}" class="my__linkss-default">Кошик</a>
                        <a href="{{ route('exit') }}" class="exit__link-exit">Вихід з системи</a>
                    @else
                        <a href="{{ route('login') }}" class="exit__link-input">Будь ласка, зайдіть в систему</a>
                    @endif
                </div>

            </div>


            <script>

                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                window.onclick = function (event) {
                    if (!event.target.matches('.dropbtn').matches('.basket__logo-pic').matches('.price')) {

                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
        </div>
    </div>
</header>

<header class="header__mobile-head">
    <div class="header__mobile">
        <div class="container__mobile">
            <div class="new__logo">
                <a href="#!" class="new_header__logo-link">
                    <img src="{{asset('image/svg/картинки/new__logo.png')}}" alt="Vinyl shop"
                         class="new_header__logo-pic">
                </a>
            </div>

            <div class="all__head">
                <img src="{{asset('image/svg/картинки/etd.png')}}" alt="etd" class="all__head-pic">
            </div>
        </div>
    </div>


    <div class="divvv">
        <input type="checkbox" class="etd-checkbox" id="mobile_etd" name="mobile_etd" value="yes">
        <label for="mobile_etd" class="label_etd">
            <img src="{{asset('image/svg/картинки/etd.png')}}" alt="etd" class="all__head-pic">
        </label>
        <div class="header_list">
            <div class="a">
                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                @yield('main_page')

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                @yield('turntables_page')

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                @yield('records_page')

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                @yield('footers')

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <div class="basket__logo">
                    <img src="{{asset('./image/svg/icon_basket.svg')}}" alt="Basket" class="basket__logo-pic">

                    <div class="price">
                        <a href="#!" class="basket-link">@if(session('price') == null) 0 @else {{ session('price')[0] }} @endif грн</a>
                        <img src="{{asset('image/svg/basket-polygon.svg')}}" alt="Basket polygon"
                             class="basket-polygon-pic">
                    </div>
                </div>
                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
            </div>
        </div>
    </div>


</header>
