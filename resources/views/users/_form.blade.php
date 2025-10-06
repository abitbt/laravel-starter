<div class="mb-3">
  <label class="form-label required">Name</label>
  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
    value="{{ old('name', $user->name) }}" required autofocus>
  @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
  <label class="form-label required">Email</label>
  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
    value="{{ old('email', $user->email) }}" required>
  @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

@if ($user->exists)
  <hr class="my-4">

  <h3 class="card-title mb-3">Change Password</h3>
  <p class="text-secondary mb-3">Leave blank to keep current password</p>
@endif

<div class="mb-3">
  <label
    class="form-label {{ $user->exists ? '' : 'required' }}">{{ $user->exists ? 'New Password' : 'Password' }}</label>
  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
    {{ $user->exists ? '' : 'required' }}>
  @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  <small class="form-hint">Must be at least 8 characters.</small>
</div>

<div class="mb-3">
  <label class="form-label {{ $user->exists ? '' : 'required' }}">Confirm
    {{ $user->exists ? 'New ' : '' }}Password</label>
  <input type="password" name="password_confirmation" class="form-control" {{ $user->exists ? '' : 'required' }}>
</div>

<div class="d-flex gap-2">
  <button type="submit" class="btn btn-primary">{{ $user->exists ? 'Update' : 'Create' }} User</button>
  <a href="{{ $user->exists ? route('users.show', $user) : route('users.index') }}" class="btn">Cancel</a>
</div>
