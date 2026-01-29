@extends('layouts.app')

@section('content')
<section id="login" class="contact section dark-background" style="padding-top: 120px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Login</h2>
      <p>Enter your credentials to enter the Restaurant</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">
        @if ($errors->has('email'))
    <div class="alert alert-danger" style="color: #ff4444; background: rgba(255,0,0,0.1); padding: 10px; margin-bottom: 10px; border-radius: 5px;">
        {{ $errors->first('email') }}
    </div>
@endif
       <form action="{{ route('login.post') }}" method="post">
          @csrf
          <div class="form-group mt-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Admin: admin@gmail.com" required>
          </div>
          <div class="form-group mt-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password: 123" required>
          </div>
          <div class="text-center mt-4">
            <button type="submit" style="background: #cda45e; border: 0; padding: 10px 35px; color: #fff; transition: 0.4s; border-radius: 50px;">Login Now</button>
          </div>
          <div class="text-center mt-3">
            <p>New user? <a href="{{ route('register') }}" style="color: #cda45e;">Create an account</a></p>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>
@endsection