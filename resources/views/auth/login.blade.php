<x-header title="Login"/>
@extends('layout.main')
@section('container')
<div class="position-relative" style="width: 100%; height: 300px;">
    <img src="image/3.png" alt="" class="w-100 h-100" style="filter: brightness(30%);">
    <div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center text-white">
        <a href="/" class="text-white me-3 fw-semibold text-decoration-none">Home</a>
        <span class="separator text-white me-3">/</span>
        <a href="/login" class="text-secondary text-decoration-none">Login</a>
    </div>
</div>

<main class="container-fluid form-container">
    <form action="{{ route('login') }}" method="POST" class="rounded bg-white pb-5 form-signin w-50 text-uppercase">
        @csrf
        <div class="form-header">
            <span class="text-uppercase fw-semibold fs-5">
                Login To Your Account
            </span>
        </div>

        <!-- Email -->
        <div class="col-12 mb-3">
            <x-input-label for="email" :value="__('email')" />
            <input type="email" class="form-control form-control-half" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
            <div class="col-12 mb-3">
                <x-input-label for="password" :value="__('password')" />
                <input type="password" class="form-control form-control-half" id="password" name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <a href="/forgot-password" class="text-decoration-none"><span class="text-dark">Forgot Password? </span>Click here</a>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="mt-4 mb-3 d-flex justify-content-center align-items-center">
            <a href="/register" class="text-decoration-none"><span class="text-dark">Need An Account </span>Register Now</a>
        </div>
    </form>
</main>

@endsection
