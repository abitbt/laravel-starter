@extends('layouts.app')

@section('page-title', 'Users')

@section('content')
  <div class="container-xl">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">Users</h2>
        </div>
        <div class="d-print-none col-auto ms-auto">
          <div class="d-flex">
            <form method="GET" action="{{ route('users.index') }}" class="me-3">
              <div class="input-icon">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                  placeholder="Search users…">
                <span class="input-icon-addon">
                  <x-tabler-search class="icon" />
                </span>
              </div>
            </form>
            @can('create', App\Models\User::class)
              <a href="{{ route('users.create') }}" class="btn btn-primary">
                <x-tabler-plus class="icon" />
                Create User
              </a>
            @endcan
          </div>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="card">
        <div class="table-responsive">
          <table class="table-vcenter card-table table">
            <thead>
              <tr>
                <th>User</th>
                <th>Email</th>
                <th>Joined</th>
                <th class="w-1"></th>
              </tr>
            </thead>
            <tbody>
              @forelse($users as $user)
                <tr>
                  <td>
                    <div class="d-flex align-items-center py-1">
                      <span class="avatar avatar-sm me-2"
                        style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=066fd1&color=fff)"></span>
                      <div class="flex-fill">
                        <div class="font-weight-medium">{{ $user->name }}</div>
                        <div class="text-secondary">
                          @if ($user->email_verified_at)
                            <span class="badge bg-success-lt">Verified</span>
                          @else
                            <span class="badge bg-warning-lt">Unverified</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-secondary">
                    <a href="mailto:{{ $user->email }}" class="text-reset">{{ $user->email }}</a>
                  </td>
                  <td class="text-secondary">
                    {{ $user->created_at->diffForHumans() }}
                  </td>
                  <td>
                    <div class="btn-actions">
                      @can('view', $user)
                        <a href="{{ route('users.show', $user) }}" class="btn btn-action">
                          <x-tabler-eye class="icon" />
                        </a>
                      @endcan
                      @can('update', $user)
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-action">
                          <x-tabler-edit class="icon" />
                        </a>
                      @endcan
                      @can('delete', $user)
                        <button type="button" class="btn btn-action" data-bs-toggle="modal"
                          data-bs-target="#modal-delete-{{ $user->id }}">
                          <x-tabler-trash class="icon" />
                        </button>
                      @endcan
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-secondary py-5 text-center">
                    @if (request('search'))
                      No users found matching "{{ request('search') }}"
                    @else
                      No users found.
                    @endif
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        @if ($users->hasPages())
          <div class="card-footer">
            {{ $users->links() }}
          </div>
        @endif
      </div>
    </div>
  </div>

  @foreach ($users as $user)
    @can('delete', $user)
      <x-modals.delete id="modal-delete-{{ $user->id }}" :message="'Do you really want to delete user &quot;' . $user->name . '&quot;? This action cannot be undone.'" :action="route('users.destroy', $user)"
        buttonText="Delete user" />
    @endcan
  @endforeach
@endsection
