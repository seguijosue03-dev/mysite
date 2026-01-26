@extends('layouts.frontend')
@section('title', 'About - Restaurantly')

@section('content')
<section id="about" class="about section">
    <!-- PASTE ABOUT SECTION HERE -->
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
</section>
@endsection
