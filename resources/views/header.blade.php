<nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="search-box" class="collapse">
                    <form action="{{route('keyword.search')}}" method="get">
                        <input type="search" class="form-control" placeholder="Nhập từ khóa...">
                    </form>
                    {{-- <form role="search" method="get" id="searchform" action="{{route('keyword.search')}}">
                    <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                    <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="navbar-header smoth">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{-- <li><a href="#portfolio-area">Trang chủ</a></li> --}}
                    <a class="navbar-brand" href="#home-area"><img src="{{ asset('neos/classic/images/logo.png') }}"
                            width="100px" height="100px" alt=""></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                    <ul class="nav navbar-nav navbar-right help-menu">
                        {{-- <li><a href=""><i class="icofont icofont-user-alt-4"></i></a></li> --}}



                        <li><a href="#search-box" data-toggle="collapse"><i
                                    class="icofont icofont-search-alt-2"></i></a></li>
                        <li class="select-cuntry">
                            <select name="counter" id="counter">
                                <option value="ENG">ENG</option>
                                <option value="BEN">BEN</option>
                                <option value="ARA">ARA</option>
                                <option value="ARG">ARG</option>
                                <option value="CHV">CHV</option>
                            </select>
                        </li>
                        <li class="select-cuntry">

                        </li>
                    </ul>
                    <ul class="nav navbar-nav primary-menu">
                        <li class="active"><a href="{{ route('cf') }}">Sản Phẩm</a></li>
                        <li><a href="{{ route('quan-cf-ngon') }}">Quán Cf Ngon</a></li>
                        <li><a href="{{ route('bai-viet') }}">Bài Viết</a></li>
                        <li><a href="{{ route('lien-he') }}">LIên Hệ</a></li>
                        <li><a href="{{ route('show-cart.cart') }}">Giỏ Hàng</a></li>
                        <li><a href="/chat">chat</a></li>

                        {{-- @if (Auth::user())
                            <li>Hello {{ Auth::user()->name }}</li>
                        <li><a href="/chat">Logout</a></li>
                        @else
                        <li><a href="/chat">Đăng ký</a></li>
                        @endif --}}
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập')  }} </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                        </li>
                        @endif
                        @else
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                    <li><a class="dropdown-item" style="color : black;" href="/home">Quản Lý</a></li>
                                    <li><a class="dropdown-item" style="color : black;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    {{-- </div> --}}
                                </ul>
                            </li>
                        </ul>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<header class="header-area overlay" id="home-area">
    <div class="vcenter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8">
                    <div class="header-text">
                        <h2 class="header-title wow fadeInUp">Uy Tín Tạo Nên Thương Hiệu<span class="dot"></span></h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s"><q>Để có những gói cà phê NGON, chúng tôi chăm
                                chút từng mẻ rang.

                                Từ vệ sinh an toàn thực phẩm cho đến chất lượng của máy rang và bao túi đựng cà phê.</q>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.7s">
                            <a href="#" class="bttn bttn-lg bttn-primary">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mainmenu-Area-/ -->
