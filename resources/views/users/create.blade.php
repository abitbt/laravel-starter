@extends('layouts.app')

@section('page-title', 'Create User')

@section('content')
  <div class="container-xl">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <a href="{{ route('users.index') }}">Users</a>
          </div>
          <h2 class="page-title">Create User</h2>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('users.store') }}">
                @csrf

                @include('users._form')
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
