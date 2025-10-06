@extends('layouts.app')

@section('title', 'Home')

@section('pretitle', 'Dashboard')
@section('page-title', 'Welcome Back!')
@section('description', 'Here\'s what\'s happening with your account today.')

@section('actions')
    <a href="{{ route('profile.show') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
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
