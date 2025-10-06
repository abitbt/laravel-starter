@extends('layouts.guest')

@section('title', 'Verify Email')

@section('content')
  <div class="mb-4 text-center">
    <a href="/" class="navbar-brand navbar-brand-autodark">{{ config('app.name') }}</a>
  </div>
  <div class="card card-md">
    <div class="card-body">
      <h2 class="h2 mb-4 text-center">Verify your email</h2>
      <p class="text-secondary mb-4">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just
        emailed to you?
        If you didn't receive the email, we will gladly send you another.
      </p>

      @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success mb-4" role="alert">
          A new verification link has been sent to the email address you provided during registration.
        </div>
      @endif

      <div class="d-flex gap-2">
        <form method="POST" action="{{ route('verification.send') }}" class="flex-fill">
          @csrf
          <button type="submit" class="btn btn-primary w-100">Resend Verification Email</button>
        </form>
        <form method="POST" action="{{ route('logout') }}" class="flex-fill">
          @csrf
          <button type="submit" class="btn btn-outline-secondary w-100">Log Out</button>
        </form>
      </div>
    </div>
  </div>
@endsection
