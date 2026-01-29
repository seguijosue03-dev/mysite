<header id="header" class="header fixed-top">

  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-cente">

    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
        <h1 class="sitename">Prince Kitchen</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}#hero" class="active">Home</a></li>
          <li><a href="{{ route('home') }}#about">About</a></li>
          <li><a href="{{ route('home') }}#menu">Menu</a></li>
          <li><a href="{{ route('home') }}#specials">Specials</a></li>
          <li><a href="{{ route('home') }}#events">Events</a></li>
          <li><a href="{{ route('home') }}#chefs">Chefs</a></li>
          <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ route('home') }}#contact">Contact</a></li>
          @auth
            {{-- 1. If Prince is logged in as Admin, show this link --}}
            @if(Auth::user()->role == 'admin')
              <li><a href="{{ route('admin.users') }}" style="color: #cda45e;">Admin Panel</a></li>
            @endif

            {{-- 2. Show Logout for everyone who is logged in --}}
            <li>
              <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                @csrf
              </form>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout ({{ Auth::user()->name }})
              </a>
            </li>
          @else
            {{-- 3. If guest, show Login --}}
            <li><a href="{{ route('login') }}">Login</a></li>
          @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-book-a-table d-none d-xl-block" href="{{ route('home') }}#book-a-table">Book a Table</a>

    </div>

  </div>

</header>