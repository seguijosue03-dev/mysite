@extends('layouts.app')

@section('content')
<section id="register" class="contact section dark-background" style="padding-top: 120px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Register</h2>
      <p>Create an account to join our Restaurant</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="{{ route('register.post') }}" method="post">
          @csrf
          <div class="form-group mt-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
          </div>
          
          <div class="form-group mt-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address" required>
          </div>

          <div class="form-group mt-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Create Password" required>
          </div>

          <div class="form-group mt-3">
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required>
          </div>

          <div class="text-center mt-4">
            <button type="submit" style="background: #cda45e; border: 0; padding: 10px 35px; color: #fff; transition: 0.4s; border-radius: 50px;">Register Now</button>
          </div>
          
          <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}" style="color: #cda45e;">Login here</a></p>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>
@endsection