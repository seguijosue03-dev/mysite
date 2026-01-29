@extends('layouts.frontend')
@section('title', 'Specials - Restaurantly')

@section('content')
<section id="specials" class="specials section">
    <!-- PASTE SPECIALS SECTION HERE -->

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
</section>
@endsection
