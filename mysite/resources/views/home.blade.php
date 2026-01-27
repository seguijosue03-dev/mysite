@extends('layouts.app')

@section('title', 'Home - Restaurantly')

@section('content')

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
    </div>
  </div>
</section>

<section id="about" class="about section">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="{{ asset('img/about.jpg') }}" class="img-fluid about-img" alt="">
      </div>
      <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Voluptatem dignissimos provident</h3>
        <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <ul>
          <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="menu" class="menu section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Check Our Tasty Menu</p>
  </div>
  <div class="container">
    <p class="text-center">Menu Content Loaded from Isotope...</p>
  </div>
</section>

<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </div>
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">
      <div class="col-lg-8">
        <form action="{{ route('contact.send') }}" method="post" class="php-email-form">
          @csrf
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection