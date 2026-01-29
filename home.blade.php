@extends('layouts.frontend')


@section('title', 'Home - Restaurantly')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="{{ asset('img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Restaurantly</span></h2>
        <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#menu" class="cta-btn">Our Menu</a>
          <a href="#book-a-table" class="cta-btn">Book a Table</a>
        </div>
      </div>
      <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
        <a href="https://youtu.be/WW0SLuX8HsI?si=Q1XXdU_su-t9Np32" class="glightbox pulsating-play-btn"></a>

      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->

<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="{{ asset('img/about.jpg') }}" class="img-fluid about-img" alt="About Restaurantly">
      </div>

      <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Welcome to Restaurantly</h3>

        <p class="fst-italic">
          Restaurantly is a place where great taste, quality ingredients, and warm hospitality come together
          to create a memorable dining experience.
        </p>

        <ul>
          <li>
            <i class="bi bi-check2-all"></i>
            <span>Fresh and high-quality ingredients prepared with care every day.</span>
          </li>
          <li>
            <i class="bi bi-check2-all"></i>
            <span>Experienced chefs delivering authentic and delicious recipes.</span>
          </li>
          <li>
            <i class="bi bi-check2-all"></i>
            <span>A comfortable and elegant atmosphere perfect for families, friends, and special occasions.</span>
          </li>
        </ul>

        <p>
          With over 18 years of experience, we are committed to serving food that delights your taste buds.
          Whether you are here for a quick meal or a celebration, Restaurantly promises exceptional service
          and unforgettable flavors.
        </p>
      </div>
    </div>

  </div>

</section>
<!-- /About Section -->
<!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>WHY US</h2>
    <p>Why Choose Our Restaurant</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="{{ asset('img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Master Chef</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="{{ asset('img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Jhonson</h4>
              <span>Patissier</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="{{ asset('img/chefs/chefs-3.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>Cook</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Chefs Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </div><!-- End Section Title -->

  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div><!-- End Google Maps -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Location</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Open Hours</h3>
            <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          @csrf
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->




  

</div>
<!-- /Why Us Section -->

<!-- Menu Section -->
<!-- Menu Section -->
<section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Check Our Tasty Menu</p>
  </div><!-- End Section Title -->

  <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <!-- Menu Filters -->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters isotope-filters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-starters">Starters</li>
          <li data-filter=".filter-salads">Salads</li>
          <li data-filter=".filter-specialty">Specialty</li>
        </ul>
      </div>
    </div><!-- End Menu Filters -->

    <!-- Menu Items -->
    <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

      <!-- Starter -->
      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="{{ asset('img/menu/lobster-bisque.jpg') }}" class="menu-img" alt="Lobster Bisque">
        <div class="menu-content">
          <a href="#">Lobster Bisque</a><span>$5.95</span>
        </div>
        <div class="menu-ingredients">
          Creamy lobster soup prepared with fresh herbs and rich spices.
        </div>
      </div>

      <!-- Specialty -->
      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="{{ asset('img/menu/bread-barrel.jpg') }}" class="menu-img" alt="Bread Barrel">
        <div class="menu-content">
          <a href="#">Bread Barrel</a><span>$6.95</span>
        </div>
        <div class="menu-ingredients">
          Freshly baked bread served warm with butter and house dips.
        </div>
      </div>

      <!-- Starter -->
      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="{{ asset('img/menu/cake.jpg') }}" class="menu-img" alt="Crab Cake">
        <div class="menu-content">
          <a href="#">Crab Cake</a><span>$7.95</span>
        </div>
        <div class="menu-ingredients">
          A delicate crab cake served on a toasted roll with lettuce and tartar sauce.
        </div>
      </div>

      <!-- Salad -->
      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="{{ asset('img/menu/caesar.jpg') }}" class="menu-img" alt="Caesar Salad">
        <div class="menu-content">
          <a href="#">Caesar Salad</a><span>$8.95</span>
        </div>
        <div class="menu-ingredients">
          Crisp romaine lettuce with parmesan cheese and classic Caesar dressing.
        </div>
      </div>

      <!-- Specialty -->
      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="{{ asset('img/menu/tuscan-grilled.jpg') }}" class="menu-img" alt="Tuscan Grilled Chicken">
        <div class="menu-content">
          <a href="#">Tuscan Grilled Chicken</a><span>$9.95</span>
        </div>
        <div class="menu-ingredients">
          Grilled chicken topped with provolone, artichoke hearts, and roasted red pesto.
        </div>
      </div>

      <!-- Starter -->
      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="{{ asset('img/menu/mozzarella.jpg') }}" class="menu-img" alt="Mozzarella Sticks">
        <div class="menu-content">
          <a href="#">Mozzarella Sticks</a><span>$4.95</span>
        </div>
        <div class="menu-ingredients">
          Crispy fried mozzarella served with a rich tomato dip.
        </div>
      </div>

      <!-- Salad -->
      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="{{ asset('img/menu/greek-salad.jpg') }}" class="menu-img" alt="Greek Salad">
        <div class="menu-content">
          <a href="#">Greek Salad</a><span>$9.95</span>
        </div>
        <div class="menu-ingredients">
          Fresh spinach, romaine lettuce, tomatoes, olives, and feta cheese.
        </div>
      </div>

      <!-- Salad -->
      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="{{ asset('img/menu/spinach-salad.jpg') }}" class="menu-img" alt="Spinach Salad">
        <div class="menu-content">
          <a href="#">Spinach Salad</a><span>$9.95</span>
        </div>
        <div class="menu-ingredients">
          Fresh spinach with mushrooms, hard-boiled egg, and warm bacon vinaigrette.
        </div>
      </div>

      <!-- Specialty -->
      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="{{ asset('img/menu/lobster-roll.jpg') }}" class="menu-img" alt="Lobster Roll">
        <div class="menu-content">
          <a href="#">Lobster Roll</a><span>$12.95</span>
        </div>
        <div class="menu-ingredients">
          Tender lobster meat with mayo and crisp lettuce on a toasted roll.
        </div>
      </div>

    </div><!-- End Menu Container -->

  </div>

</section>
<!-- /Menu Section -->
<!-- /Menu Section -->

<!-- Specials Section -->
<!-- Specials Section -->
<section id="specials" class="specials section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Specials</h2>
    <p>Check Our Specials</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">
              Chef’s Signature Dish
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">
              Seasonal Special
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">
              Customer Favorite
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">
              Healthy Choice
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">
              Today’s Special
            </a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">

          <!-- TAB 1 -->
          <div class="tab-pane active show" id="specials-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Chef’s Signature Dish</h3>
                <p class="fst-italic">
                  A carefully crafted dish prepared using premium ingredients.
                </p>
                <p>
                  This signature dish represents the heart of Restaurantly. It combines rich
                  flavors, perfect seasoning, and elegant presentation to deliver an
                  unforgettable dining experience.
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('img/specials-1.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <!-- TAB 2 -->
          <div class="tab-pane" id="specials-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Seasonal Special</h3>
                <p class="fst-italic">
                  Fresh ingredients selected especially for the season.
                </p>
                <p>
                  Our seasonal specials change throughout the year to bring you the best
                  flavors available. Each dish is prepared fresh and inspired by seasonal
                  produce.
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('img/specials-2.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <!-- TAB 3 -->
          <div class="tab-pane" id="specials-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Customer Favorite</h3>
                <p class="fst-italic">
                  One of the most loved dishes by our customers.
                </p>
                <p>
                  This dish has earned its popularity due to its delicious taste and generous
                  portions. A perfect choice for first-time visitors.
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('img/specials-3.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <!-- TAB 4 -->
          <div class="tab-pane" id="specials-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Healthy Choice</h3>
                <p class="fst-italic">
                  A nutritious option without compromising on taste.
                </p>
                <p>
                  Prepared with fresh vegetables, lean ingredients, and minimal oil, this
                  dish is perfect for health-conscious guests.
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('img/specials-4.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <!-- TAB 5 -->
          <div class="tab-pane" id="specials-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Today’s Special</h3>
                <p class="fst-italic">
                  A special dish prepared fresh for today.
                </p>
                <p>
                  Our chef creates a unique dish every day based on fresh availability and
                  creativity. Ask our staff for today’s recommendation.
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('img/specials-5.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
<!-- /Specials Section -->

<!-- Events Section -->
<section id="events" class="events section">

  <img class="slider-bg" src="{{ asset('img/events-bg.jpg') }}" alt="" data-aos="fade-in">

  <div class="container">

    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="{{ asset('img/events-slider/events-slider-1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="{{ asset('img/events-slider/events-slider-2.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="{{ asset('img/events-slider/events-slider-3.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Events Section -->

<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>RESERVATION</h2>
    <p>Book a Table</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
<form action="{{ route('booking.store') }}" method="POST" class="php-email-form">
    @csrf

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
        </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
      </div>

      <div class="text-center mt-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        <button type="submit">Book a Table</button>
      </div>
    </form><!-- End Reservation Form -->

  </div>

</section><!-- /Book A Table Section -->

<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery</h2>
    <p>Some photos from Our Restaurant</p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

    </div>

  </div>

</section><!-- /Gallery Section -->
<!-- Chefs Section -->
<section id="chefs" class="chefs section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Our Professional Chefs</p>
  </div><!-- End Section Title -->

  <div class="container">
    <!-- (your chef cards will go here later) -->
  </div>

</section><!-- End Chefs Section -->

@endsection

