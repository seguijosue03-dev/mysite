@extends('layouts.app')

@section('title', $item['name'])

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset($item['img']) }}" class="img-fluid" alt="{{ $item['name'] }}">
    </div>
    <div class="col-md-6">
      <h2>{{ $item['name'] }}</h2>
      <p>{{ $item['desc'] }}</p>
      <p class="fw-bold">₹{{ $item['price'] }}</p>
    </div>
  </div>
</div>
@endsection
