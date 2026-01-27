@extends('layouts.app')

@section('content')
<section id="admin-users" class="section dark-background" style="padding-top: 120px; min-height: 80vh;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Admin Panel</h2>
      <p>Registered Users</p>
    </div>

    <div class="table-responsive mt-4">
      <table class="table table-dark table-hover" style="background: rgba(255, 255, 255, 0.05); color: #fff;">
        <thead style="color: #cda45e;">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <span class="badge" style="background: {{ $user->role == 'admin' ? '#cda45e' : '#6c757d' }}">
                {{ $user->role }}
              </span>
            </td>
            <td>{{ $user->created_at->format('d M Y') }}</td>
            <td>
              <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</section>
@endsection