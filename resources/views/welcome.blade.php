@extends('layouts.app')

@section('actions')
    <a href="{{ route('profile.show') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
        View Profile
    </a>
@endsection

@section('content')
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Tabler UI Framework</h5>
          <p class="card-text">
            <strong>Tabler</strong> is a premium and open source dashboard template with a responsive and high quality UI, built on top of Bootstrap. It provides a wide range of ready-to-use components and layouts to help you build modern web applications quickly and efficiently.
          </p>
          <a href="https://docs.tabler.io/" class="btn btn-primary" target="_blank" rel="noopener">
            Learn more at Tabler Documentation
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
