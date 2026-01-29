<header id="header" class="header fixed-top">

  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
          <a href="mailto:contact@example.com">contact@example.com</a>
        </i>
        <i class="bi bi-phone d-flex align-items-center ms-4">
          <span>+1 5589 55488 55</span>
        </i>
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
        <h1 class="sitename">Restaurantly</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>

        <!-- HOME -->
<li><a href="{{ route('home') }}#hero">Home</a></li>


          <!-- ABOUT -->
          <li><a href="{{ route('about') }}">About</a></li>

          <!-- MENU -->
          <li><a href="{{ route('menu') }}">Menu</a></li>

          <!-- SPECIALS -->
         
         <li><a href="{{ route('specials') }}">Specials</a></li>

          <!-- EVENTS -->
          <li><a href="{{ route('events') }}">Events</a></li>

          <!-- GALLERY -->
          <li><a href="{{ route('gallery') }}">Gallery</a></li>

          <!-- CONTACT -->
          <li><a href="{{ route('contact.show') }}">Contact</a></li>

       

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="d-flex align-items-center">

  @auth
    <a href="{{ route('dashboard') }}" class="btn-book-a-table d-none d-xl-block me-2">
      Dashboard
    </a>

    <form method="POST" action="{{ route('logout') }}" class="d-none d-xl-block me-2">
      @csrf
      <button type="submit"
              class="btn-book-a-table"
              style="background:transparent; border:2px solid #cda45e; color:#cda45e; padding:8px 25px; border-radius:50px; transition:0.3s;">
        Logout
      </button>
    </form>

  @else
    <a href="{{ route('login') }}" class="btn-book-a-table d-none d-xl-block me-2">
      Login
    </a>

    <a href="{{ route('register') }}" class="btn-book-a-table d-none d-xl-block me-2">
      Register
    </a>
  @endauth

  <a class="btn-book-a-table d-none d-xl-block"
     href="{{ route('home') }}#book-a-table">
    Book a Table
  </a>

</div>


</header>
