<header>

    <div class="bg-dark text-white text-center py-2">
        <small>Free shipping on orders over $50 | 30-day returns</small>
    </div>

    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container d-flex align-items-center">

            <a class="navbar-brand fw-bold m-0 me-2" href="{{ route('home') }}">
                SHOPIFY
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBar">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link p-1" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1" href="{{ route('products.index') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1" href="{{ route('contact') }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-1" href="{{ route('cart.index') }}">
                            <i class="bi bi-cart"></i>
                            Cart

                            @if(session('cart') && count(session('cart')) > 0)
                            <span class="badge bg-dark ms-1">
                                {{ count(session('cart')) }}
                            </span>
                            @endif
                        </a>
                    </li>
                </ul>


                <div class="d-flex align-items-center gap-1">

                    <form class="d-flex align-items-center" method="GET" action="{{ route('products.search') }}">

                        <input
                            class="form-control"
                            type="search"
                            name="query"
                            placeholder="Search..."
                            style="width: 280px; height: 45px;"
                            value="{{ request('query') }}">

                        <button class="btn btn-dark ms-1 px-3" type="submit">
                            <i class="bi bi-search"></i>
                        </button>

                    </form>


                </div>

            </div>
        </div>
    </nav>

</header>