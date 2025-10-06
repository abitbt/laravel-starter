@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <!-- Update Profile Information -->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Profile Information</h3>
          </div>
          <div class="card-body">
            @if (session('status') === 'profile-information-updated')
              <div class="alert alert-success mb-3" role="alert">
                Profile information updated successfully.
              </div>
            @endif

            <form action="{{ route('user-profile-information.update') }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                  value="{{ old('name', auth()->user()->name) }}" required>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                  value="{{ old('email', auth()->user()->email) }}" required>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Update Password -->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Update Password</h3>
          </div>
          <div class="card-body">
            @if (session('status') === 'password-updated')
              <div class="alert alert-success mb-3" role="alert">
                Password updated successfully.
              </div>
            @endif

            <form action="{{ route('user-password.update') }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label class="form-label">Current Password</label>
                <input type="password" name="current_password"
                  class="form-control @error('current_password') is-invalid @enderror" required>
                @error('current_password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                  required>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Two Factor Authentication -->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Two Factor Authentication</h3>
          </div>
          <div class="card-body">
            @if (session('status') == 'two-factor-authentication-enabled')
              <div class="alert alert-success mb-3" role="alert">
                Two factor authentication has been enabled.
              </div>
            @elseif (session('status') == 'two-factor-authentication-disabled')
              <div class="alert alert-success mb-3" role="alert">
                Two factor authentication has been disabled.
              </div>
            @endif

            <p class="text-secondary mb-3">
              Add additional security to your account using two factor authentication.
            </p>

            @if (auth()->user()->two_factor_secret)
              <!-- 2FA is enabled -->
              <div class="mb-3">
                <p class="text-success fw-bold">Two factor authentication is enabled.</p>
              </div>

              @if (session('status') == 'two-factor-authentication-enabled')
                <div class="mb-3">
                  <p class="text-secondary">
                    Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator
                    application.
                  </p>
                  <div class="mb-3">
                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                  </div>
                </div>

                <!-- Recovery Codes -->
                <div class="mb-3">
                  <p class="text-secondary fw-bold">Recovery Codes:</p>
                  <p class="text-secondary">Store these recovery codes in a secure password manager. They can be used to
                    recover access to your account if your two factor authentication device is lost.</p>
                  <div class="bg-light rounded p-3">
                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                      <div>{{ $code }}</div>
                    @endforeach
                  </div>
                </div>
              @endif

              <div class="btn-list">
                <form action="{{ route('two-factor.recovery-codes') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-secondary">Regenerate Recovery Codes</button>
                </form>

                <form action="{{ route('two-factor.disable') }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Disable</button>
                </form>
              </div>
            @else
              <!-- 2FA is not enabled -->
              <div class="mb-3">
                <p class="text-secondary">Two factor authentication is not enabled.</p>
              </div>

              <form action="{{ route('two-factor.enable') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Enable Two Factor Authentication</button>
              </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
