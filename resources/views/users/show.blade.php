@extends('layouts.app')

@section('page-title', $user->name)

@section('content')
  <div class="container-xl">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <a href="{{ route('users.index') }}">Users</a>
          </div>
          <h2 class="page-title">{{ $user->name }}</h2>
        </div>
        <div class="d-print-none col-auto ms-auto">
          <div class="btn-list">
            @can('update', $user)
              <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">
                <x-tabler-edit class="icon" />
                Edit
              </a>
            @endcan
            @can('delete', $user)
              <form method="POST" action="{{ route('users.destroy', $user) }}"
                onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                  <x-tabler-trash class="icon" />
                  Delete
                </button>
              </form>
            @endcan
          </div>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <span class="avatar avatar-xl mb-3"
                style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=066fd1&color=fff&size=128)"></span>
              <h3 class="mb-1">{{ $user->name }}</h3>
              <p class="text-secondary">{{ $user->email }}</p>
              @if ($user->email_verified_at)
                <span class="badge bg-success-lt">Email Verified</span>
              @else
                <span class="badge bg-warning-lt">Email Unverified</span>
              @endif
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Information</h3>
            </div>
            <div class="card-body">
              <div class="datagrid">
                <div class="datagrid-item">
                  <div class="datagrid-title">Name</div>
                  <div class="datagrid-content">{{ $user->name }}</div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Email</div>
                  <div class="datagrid-content">
                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Email Verified</div>
                  <div class="datagrid-content">
                    @if ($user->email_verified_at)
                      <span class="text-success">
                        <x-tabler-check class="icon" />
                        {{ $user->email_verified_at->format('M d, Y') }}
                      </span>
                    @else
                      <span class="text-warning">
                        <x-tabler-x class="icon" />
                        Not verified
                      </span>
                    @endif
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Two-Factor Auth</div>
                  <div class="datagrid-content">
                    @if ($user->two_factor_confirmed_at)
                      <span class="text-success">
                        <x-tabler-shield-check class="icon" />
                        Enabled
                      </span>
                    @else
                      <span class="text-secondary">
                        <x-tabler-shield class="icon" />
                        Disabled
                      </span>
                    @endif
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Joined</div>
                  <div class="datagrid-content">
                    {{ $user->created_at->format('M d, Y') }}
                    <span class="text-secondary">({{ $user->created_at->diffForHumans() }})</span>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Last Updated</div>
                  <div class="datagrid-content">
                    {{ $user->updated_at->format('M d, Y') }}
                    <span class="text-secondary">({{ $user->updated_at->diffForHumans() }})</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
