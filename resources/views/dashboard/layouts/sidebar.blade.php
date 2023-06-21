<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::is('dashboard') ? 'text-dark' : '' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'text-dark' : '' }}" href="/dashboard/posts">
                <i class="bi bi-menu-button-wide"></i>
                <span>My Post</span>
            </a>
        </li>

        <li class="nav-item" style="margin-top: 350px">
            <a class="nav-link" href="#">
                <i class="bi bi-box-arrow-in-right"></i>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </form>
            </a>
        </li><!-- End Components Nav -->
</aside><!-- End Sidebar-->