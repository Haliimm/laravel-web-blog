@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="post" action="/login" style="width: 300px;">
            @csrf
            <h1 class="mb-3 text-center fw-bold">LOGIN</h1>
            <div class=" mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="shadow-sm form-control @error('email') is-invalid
                    @enderror" id="email" name="email" value="{{ old('email') }}" autofocus>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class=" mb-4">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="shadow-sm form-control @error('password') is-invalid
                    @enderror" id="password" name="password" value="">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success fw-bold" style="width: 300px;">LOGIN</button>
            <small class="d-flex justify-content-center align-items-center mt-3">Not Registered?<a href="/register"
                    class="text-decoration-none ms-1">Register Now!</a> </small>
        </form>
    </div>
</div>
@endsection