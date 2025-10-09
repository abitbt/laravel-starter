@extends('layouts.app-vertical')

@section('title', 'Home')

@section('pretitle', 'Dashboard')
@section('page-title', 'Welcome Back!')
@section('description', 'Here\'s what\'s happening with your account today.')

@section('breadcrumbs')
  <li class="breadcrumb-item active" aria-current="page">
    Dashboard
  </li>
@endsection

@section('actions')
  <a href="{{ route('profile.show') }}" class="btn btn-primary">
    <x-tabler-user />
    View Profile
  </a>
@endsection

@section('content')
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Welcome, {{ auth()->user()->name }}!</h3>
          </div>
          <div class="card-body">
            <p>You are logged in and ready to go!</p>
            <p class="text-secondary">Your email: {{ auth()->user()->email }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
