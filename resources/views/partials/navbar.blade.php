<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Dessert Bucin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link {{ $judul == 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ $judul == 'About' ? 'active' : '' }}"
                        href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $judul == ('Popular Items' || 'New Arrivals') ? 'active' : '' }}"
                        id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/all">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item  {{ $judul == 'Popular Items' ? 'active' : '' }} "
                                href="/popular">Popular Items</a></li>
                        <li><a class="dropdown-item {{ $judul == 'New Arrivals' ? 'active' : '' }}" href="/arrivals">New
                                Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>
