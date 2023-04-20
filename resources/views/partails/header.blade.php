<header>

    <a href="#" class="logo"><img src="images/food-logo.png" alt=""></a>

    <nav class="navbar">
        <a class="{{ Request::path() === '/' ? 'active' : ''}}" href="{{url('/')}}">home</a>
        <a class="{{ Request::path() === 'Menu' ? 'active' : ''}}" href="{{url('Menu')}}">menu</a>
        <a class="{{ Request::path() === 'About' ? 'active' : ''}}" href="{{url('About')}}">about us</a>
        <a class="{{ Request::path() === 'Contact' ? 'active' : ''}}" href="{{url('Contact')}}">Contact Us</a>
        <a class="{{ Request::path() === 'Team' ? 'active' : ''}}" href="{{url('Team')}}">Members</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                    @endauth
                    </div>
                @endif
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        @auth
        <a href="{{url('showCart',Auth::user()->id)}}" id="cart" class="fas fa-shopping-cart">
{{--            <span class ="cart-quantity">{{$count}}</span>--}}
        </a>
        @endauth
    </div>


    <div class="cart-btn">

    </div>
    <!-- add to cart -->
{{--    <form action="{{url('addcart')}}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="cart-modal-overlay">--}}
{{--            <div class="cart-modal">--}}
{{--                <i id="close-btn" class="fas fa-times"></i>--}}
{{--                <h1 class="cart-is-empty">Cart is empty</h1>--}}

{{--                <div class="product-rows">--}}
{{--                </div>--}}
{{--                <div class="total">--}}
{{--                    <h1 class="cart-total">TOTAL</h1>--}}
{{--                    <span class="total-price">$0</span>--}}

{{--                </div>--}}
{{--                <div class="input">--}}
{{--                    <label>Name</label>--}}
{{--                    <input type="text" name="name" placeholder="Your Name" required>--}}
{{--                </div>--}}
{{--                <div class="input">--}}
{{--                    <label>Phone Number</label>--}}
{{--                    <input type="number" name="phone" placeholder="Your Number" required>--}}
{{--                </div>--}}
{{--                <div class="input">--}}
{{--                    <label>Address</label>--}}
{{--                    <input type="text" name="address" placeholder="Your Address" required>--}}
{{--                </div>--}}
{{--                <div class="total">--}}
{{--                    <button class="purchase-btn">PURCHASE</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}


</header>

<!-- search form  -->

<form action="{{url('/searchMenu')}}" method="get" id="search-form">
    @csrf
    <input type="search" placeholder="search here..." name="searchMenu" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
