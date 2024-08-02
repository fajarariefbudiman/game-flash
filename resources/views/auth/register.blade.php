<x-header title="Register" />
@extends('layout.main')

@section('container')
<div class="position-relative" style="width: 100%; height: 300px;">
    <img src="image/3.png" alt="" class="w-100 h-100" style="filter: brightness(30%);">
    <div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center text-white">
        <a href="/" class="text-white me-3 fw-semibold text-decoration-none">Home</a>
        <span class="separator text-white me-3">/</span>
        <a href="/register" class="text-secondary text-decoration-none">Register</a>
    </div>
</div>

<main class="container-fluid form-container">
    <form method="POST" action="{{ route('register') }}" class="rounded bg-white pb-5 form-signin w-50 text-uppercase">
        @csrf
        <div class="form-header">
            <span class="text-uppercase fw-semibold fs-5">
                Register Now
            </span>
        </div>
        <div class="row">
            <!-- Username -->
            <div class="col-6 mb-3">
                <x-input-label for="username" :value="__('username')" />
                <input type="text" class="form-control form-control-half" id="username" name="username" value="{{ old('username') }}" required>
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-6 mb-3">
                <x-input-label for="email" :value="__('email')" />
                <input type="email" class="form-control form-control-half" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- First Name -->
            <div class="col-6 mb-3">
                <x-input-label for="firstname" :value="__('firstname')" />
                <input type="text" class="form-control form-control-half" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                @error('firstname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="col-6 mb-3">
                <x-input-label for="lastname" :value="__('lastname')" />
                <input type="text" class="form-control form-control-half" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
                @error('lastname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="col-6 mb-3">
                <x-input-label for="password" :value="__('password')" />
                <input type="password" class="form-control form-control-half" id="password" name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Repeat Password -->
            <div class="col-6 mb-3">
                <x-input-label for="password_confirmation" :value="__('password_confirmation')" />
                <input type="password" class="form-control form-control-half" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nationality -->
            <div class="col-6 mb-3">
                <x-input-label for="nationality" :value="__('nationality')" />
                <select class="form-control form-control-half" id="nationality" name="nationality" required>
                    <option value="" disabled selected>Select your nationality</option>
                    <option value="US">United States</option>
                    <option value="ID">Indonesia</option>
                    <option value="JP">Japan</option>
                </select>
                @error('nationality')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Community -->
            <div class="col-6 mb-3">
                <x-input-label for="community" :value="__('community')" />
                <select class="form-control form-control-half" id="community" name="community" required>
                    <option value="" disabled selected>Select your community</option>
                    <option value="gaming">Gaming</option>
                    <option value="sports">Sports</option>
                    <option value="tech">Technology</option>
                </select>
                @error('community')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
</main>
@endsection
