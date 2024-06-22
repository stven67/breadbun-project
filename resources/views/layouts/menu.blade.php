<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-white text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/Home" style="color: #c79850;">BreadBun</a>
        <button class="navbar-toggler text-uppercase bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto"> 
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about" style="color: black;">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/Pre-order" style="color: black;">Pre-order</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact" style="color: black;">Contact</a></li>
                @auth
                    <li class="nav-item mx-0 mx-lg-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link py-3 px-0 px-lg-3 rounded" style="background: none; border: none; color: black; cursor: pointer;">LOGOUT</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="{{ route('login') }}" class="nav-link py-3 px-0 px-lg-3 rounded" style="color: black;">LOGIN</a>
                    </li>
                @endauth
            </ul>
            <div class="col-lg-2 mb-5 mb-lg-1 d-flex justify-content-end">
                <a class="btn btn-outline btn-social mx-1" href="{{ route('checkout') }}">
                    <i class="fas fa-shopping-cart text-black cart-icon"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    .cart-icon:hover {
        color: #c79850 !important;
    }
</style>
