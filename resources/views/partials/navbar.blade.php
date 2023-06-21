<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">My Web Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === " home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === " about") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === " blogs") ? 'active' : '' }}" href="/blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === " categories") ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth()
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item px-3">
                    <a href="/login" class="btn btn-secondary {{ ($active === " login") ? 'active' : '' }}">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="btn btn-secondary {{ ($active === " register") ? 'active' : ''
                        }}">Register</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>