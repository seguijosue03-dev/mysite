@extends('layouts.frontend')

@section('title', 'My Profile - Restaurantly')

@section('content')
<main class="main">

<section class="section dark-background" style="min-height:100vh; padding-top:120px;">
  <div class="container" data-aos="fade-up">

    <div class="text-center mb-5">
      <h2 style="color:#cda45e;">My Profile</h2>
      <p style="color:#fff;">Manage your account information</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">

        <div class="card p-5" style="background:#0c0b09; border:1px solid #cda45e; border-radius:10px;">

          @if (session('status') === 'profile-updated')
            <div class="alert alert-success text-center">Profile updated successfully!</div>
          @endif

          <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="form-group mb-3">
              <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="form-group mb-3">
              <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" required>
            </div>

            <button type="submit" class="btn w-100" style="background:#cda45e; color:#000;">
              Save Changes
            </button>

          </form>

          <hr style="border-color:#cda45e; margin:30px 0;">

          <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <button class="btn btn-danger w-100">
              Delete Account
            </button>
          </form>

        </div>

      </div>
    </div>

  </div>
</section>

</main>
@endsection
