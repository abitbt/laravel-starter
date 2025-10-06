@extends('layouts.guest')

@section('title', 'Register')

@section('content')
  <div class="mb-4 text-center">
    <a href="/" class="navbar-brand navbar-brand-autodark">{{ config('app.name') }}</a>
  </div>
  <div class="card card-md">
    <div class="card-body">
      <h2 class="h2 mb-4 text-center">Create new account</h2>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Enter name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="your@email.com" value="{{ old('email') }}" required>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            placeholder="Password" required>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password"
            required>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Create new account</button>
        </div>
      </form>
    </div>
  </div>
  <div class="text-secondary mt-3 text-center">
    Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
  </div>
@endsection
