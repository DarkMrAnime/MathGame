<style>
    html,
    body {
        height: 100%;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ul {
        list-style: none;
    }

    body {
        font-size: 1rem;
        line-height: 1.6;

        color: #666;
    }

    /* nav styles */
    header {
        background-color: #25CED1;
        padding: .5rem 0;
    }

    nav {
        max-width: 90%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Happy Monkey', cursive;


    }

    .menu>li,
    .menu>a {
        display: inline-block;
    }

    .menu li {
        position: relative;
    }

    .menu a {
        text-decoration: none;
        color: #fff;
        display: block;
        padding: 10px 1.5rem;
        transition: background-color .22s ease, color .22s ease;
    }

    .menu a:hover {
        background-color: #FF8A5B;
        color: #fff;
    }

    .submenu {
        position: absolute;
        z-index: 10;
        background-color: #FF8A5B;
        width: 140px;
        left: 0;
        display: none;
    }

    .submenu2 {
        position: absolute;
        left: 100%;
        width: 140px;
        top: 0;
        background-color: #2c3e50;
        display: none;
    }

    .menu li:hover>.submenu {
        display: block;
        animation: slideup .3s ease;
    }

    .submenu li:hover>.submenu2 {
        display: block;
        animation: slideleft .3s ease;
    }

    @keyframes slideup {
        0% {
            opacity: 0;
            transform: translateY(18px);
        }

        100% {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes slideleft {
        0% {
            opacity: 0;
            transform: translateX(18px);
        }

        100% {
            opacity: 1;
            transform: none;
        }
    }

    /* logo styles */
    .LogoPhoto {
        width: 70px;
        border-radius: 100px;
    }

    a:active,
    a:focus {
        outline: 0;
        border: none;
        -moz-outline-style: none;
    }
</style>

<header>
    <nav>
        <img class="LogoPhoto" src="images/logo.png" alt="">
        <ul class="menu" style="padding-left:10px">
            <li><a href="/">Home</a></li>
            <li>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                </li>
                <li>
                    <a href="{{ route('login') }}" style="padding-right:10px">Log in </a>
                </li>
                <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" ">Register</a>
     @endif
                        @endauth
                @endif
            </li>
        </ul>
    </nav>
</header>
