@extends('layouts.guest')

@section('title', 'Two Factor Authentication')

@section('content')
<div class="text-center mb-4">
    <a href="/" class="navbar-brand navbar-brand-autodark">{{ config('app.name') }}</a>
</div>
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">Two Factor Authentication</h2>
        
        <div x-data="{ recovery: false }">
            <div x-show="! recovery">
                <p class="text-secondary mb-4">
                    Please confirm access to your account by entering the authentication code provided by your authenticator application.
                </p>
                
                <form action="{{ route('two-factor.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Authentication Code</label>
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" 
                               placeholder="Enter code" inputmode="numeric" autofocus>
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Verify</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <button type="button" class="btn btn-link" x-on:click="recovery = true">
                        Use a recovery code
                    </button>
                </div>
            </div>

            <div x-show="recovery" style="display: none;">
                <p class="text-secondary mb-4">
                    Please confirm access to your account by entering one of your emergency recovery codes.
                </p>
                
                <form action="{{ route('two-factor.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Recovery Code</label>
                        <input type="text" name="recovery_code" class="form-control @error('recovery_code') is-invalid @enderror" 
                               placeholder="Enter recovery code">
                        @error('recovery_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Verify</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <button type="button" class="btn btn-link" x-on:click="recovery = false">
                        Use an authentication code
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
