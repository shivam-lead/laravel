</head>

<body>
    <!-- preloader start here -->
    <!--<div class="preloader">-->
    <!--    <div class="preloader-inner">-->
    <!--        <div class="preloader-icon">-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- preloader ending here -->
    <!-- Search Area start here-->
    <div class="search">
        <div class="search__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="search__area">
            <form action="#">
                <input type="text" name="s" placeholder="Sarch Here...">
                <button type="submit"><img src="{{ asset('assets/images/header/icon/04.png') }}"
                        alt="finance"></button>
            </form>
        </div>
    </div>
    <!-- Search Area ending here -->
    <!-- ==========Header Section Starts Here========== -->
    <header class="header header--one">

        <div class="header__bottom" style="padding: 0; background-image: linear-gradient(137deg, #72BFAD 0%, #7183D3 100%);">
            <div class="container-fluid" >
                <div class="area">
                    <div class="logo">
                        {{-- <a href="{{ route('index') }}"><img src="assets/images/header/logo/01.png" alt="logo"></a> --}}
                        <a href="{{ route('index') }}">Optimyze Finance LLP</a>
                        <!--<p>CPAs and business advisors</p>-->
                        <p><i><b>From DATA to Decisions</b></i></p>
                    </div>
                    <div class="main-menu">
                        <div class="menu">
                            <ul class="ul-margin">

                                <li>
                                    <a class="f-25" href="#">Services</a>
                                    <ul >
                                        <li><a href="{{url('/optimize/doing-business')}}">Cost of doing business</a></li>
                                        <!--<li><a href="{{url('/services/unlock-your-busines-value')}}">Unlock your Business value</a></li>-->
                                        <li><a href="{{url('/optimize/drive-business-performance')}}">Drive business performance</a></li>
                                        <li><a href="{{url('/optimize/gain-financeial-control')}}">Gain financial control</a></li>
                                        <li><a href="{{url('/optimize/rising-capital')}}">Raise Capital</a></li>
                                        <li><a href="{{url('/optimize/tax-reporting')}}">Tax reporting</a></li>
                                        <li><a href="{{url('optimize/audit')}}">Need an audit</a></li>
                                        <li><a href="{{url('/finance-ops')}}">Finance-ops</a></li>
                                    </ul>
                                </li>
                                <li><a  class="f-25" href="#">Sectors</a>
                                <ul >
                                        <li><a href="{{url('/small-business')}}">I'm a small business</a></li>
                                        <li><a href="{{url('/private-client')}}">I'm a private client</a></li>
                                        <li><a href="{{url('/cfo')}}">I'm a CFO</a></li>
                                        <li><a href="{{url('my-field-is-non-profit-business')}}">I'm a not for profit business</a></li>

                                    </ul>
                                </li>
                                <li>
                                </li>
                                <li><a  class="f-25" href="#">About</a>
                                <ul>
                                    <li><a href ="{{url('about')}}">About Us</a></li>
                                    <li><a href ="{{url('insights')}}">Insights</a></li>
                                    <li><a href ="{{url('all-news')}}">News</a></li>
                                </ul>

                                </li>

                            </ul>
                            <div class="search_cart d-none d-xl-block">
                                <ul>
                                    <li class="search_icon">
                                        <i class="fa fa-search" style="color:white;font-size:20px;" aria-hidden="true"></i>
                                        <!--<img src="{{ asset('assets/images/header/icon/04.png') }}" alt="finace">-->
                                    </li>
                                </ul>
                            </div>
                            <a href="tel:9805237986"class="lab-btn-new">Let`s Talk!</a>
                        </div>
                        <div class="header__bararea">

                            <div class="header__bar d-xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="header__ellepsis d-xl-none">
                                <i class="fa-solid fa-circle-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==========Header Section Ends Here========== -->
