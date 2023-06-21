@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center align-items-center">
    <div>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="POST" action="/register" style="width: 300px;">
            @csrf
            <h1 class="mb-3 text-center fw-bold">REGISTER</h1>
            <div class="mb-3">
                <label for="name" class="fw-bold">Name</label>
                <input type="text" class="shadow-sm form-control @error('name') is-invalid
                    @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="fw-bold">Userame</label>
                <input type="text" class="shadow-sm form-control @error('username') is-invalid
                    @enderror" id="username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class=" mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="shadow-sm form-control @error('email') is-invalid
                    @enderror" id="email" name="email" value="{{ old('email') }}">
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

            <button type="submit" class="btn btn-success fw-bold" style="width: 300px;">REGISTER </button>
            <small class="d-flex justify-content-center align-items-center mt-3">Already Have an Account? <a
                    href="/login" class="text-decoration-none ms-1">Login Here!</a> </small>
        </form>
    </div>
</div>
@endsection