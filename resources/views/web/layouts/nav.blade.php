@php
$total = 0;
if (session('cart')) {
foreach(session('cart') as $id => $details){
$total += $details['price'] * $details['quantity'] ;
}
}
@endphp
<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{ $settings->logo ? \Storage::url($settings->logo) : '' }}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li>
                <a href="{{route('shop.cart')}}">
                    <i class="fa fa-shopping-bag"></i>
                    <span>
                        @if(session('cart')) {{ count(session('cart')) }}
                        @else 0
                        @endif
                    </span>
                </a>
            </li>
        </ul>
        <div class="header__cart__price">
            item:
            @if(session('cart'))
            <span>{{$settings->currency ?? "Set Currency"}}{{ $total }}</span>
            @else
            <span>{{$settings->currency ?? "Set Currency"}}0.00</span>
            @endif
        </div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{asset('img/language.png')}}" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li @if (Route::currentRouteName()=='web' ) class="active" @endif><a href="{{route('web')}}">Home</a></li>
            <li @if (Route::currentRouteName()=='shop' ) class="active" @endif><a href="{{route('shop')}}">Shop</a></li>
            <li @if (Route::currentRouteName()=='shop.cart' ) class="active" @endif><a
                    href="{{route('shop.cart')}}">Shoping
                    Cart</a></li>
            <li @if (Route::currentRouteName()=='shop.checkout' ) class="active" @endif><a
                    href="{{route('shop.checkout')}}">Checkout</a></li>

        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="{{ $settings->facebook ?? '#' }}"><i class="fa fa-facebook"></i></a>
        <a href="{{ $settings->twitter?? '#' }}"><i class="fa fa-twitter"></i></a>
        <a href="{{ $settings->instagram ?? '#' }}"><i class="fa fa-instagram "></i></a>
        <a href="{{ $settings->pinterest?? '#' }}"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> {{$settings->email ?? "Set Shop Email"}}</li>
            <li>{{$setting->top_bar_offer ?? ""}}</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->
<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> {{$settings->email ?? "Set Shop Email"}}</li>
                            <li>{{$settings->top_bar_offer ?? "Set Top bar offer"}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="{{ $settings->facebook ?? '#' }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $settings->twitter?? '#' }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ $settings->instagram ?? '#' }}"><i class="fa fa-instagram "></i></a>
                            <a href="{{ $settings->pinterest?? '#' }}"><i class="fa fa-pinterest-p"></i></a>
                        </div>

                        @guest
                        @if (Route::has('register'))
                        <div class="header__top__right__auth mr-2">
                            <a href="{{ route('register') }}"> <i class="fa fa-user-plus"></i> {{ __('Register') }}</a>
                        </div>
                        @endif
                        <div class="header__top__right__auth">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i>{{ __('Login') }}</a>
                        </div>
                        @else
                        <div class="header__top__right__language">
                            <div>{{ Auth::user()->name }}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('web')}}"><img src="{{ $settings->logo ? \Storage::url($settings->logo) : '' }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li @if (Route::currentRouteName()=='web' ) class="active" @endif><a
                                href="{{route('web')}}">Home</a></li>
                        <li @if (Route::currentRouteName()=='shop' ) class="active" @endif><a
                                href="{{route('shop')}}">Shop</a></li>
                        <li @if (Route::currentRouteName()=='shop.cart' ) class="active" @endif><a
                                href="{{route('shop.cart')}}">Shoping
                                Cart</a></li>
                        <li @if (Route::currentRouteName()=='shop.checkout' ) class="active" @endif><a
                                href="{{route('shop.checkout')}}">Checkout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li>
                            <a href="{{route('shop.cart')}}">
                                <i class="fa fa-shopping-bag"></i>
                                <span>
                                    @if(session('cart')) {{ count(session('cart')) }}
                                    @else 0
                                    @endif
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="header__cart__price">
                        item:
                        @if(session('cart'))
                        <span>{{$settings->currency ?? "Set Currency"}}{{ $total }}</span>
                        @else
                        <span>{{$settings->currency ?? "Set Currency"}}0.00</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->