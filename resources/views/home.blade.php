@extends('layouts.main')

@section('container')
<div class="container my-5">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <img src="/img/lim-logo.jpeg" alt="" width="120" class="rounded-circle mb-3">
        <h1 class="text-body-emphasis">Welcome To My Blog</h1>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque cum quis architecto eligendi optio adipisci
            et? Sapiente, libero repudiandae, tempora, sunt quasi omnis eaque nobis veritatis officiis quos quibusdam?
        </p>
        <div class="d-inline-flex gap-2 mb-5">
            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                <a href="/login" class="text-decoration-none text-white">Let's to Post</a>
                <i class="bi bi-arrow-right-square-fill ms-2"></i>
            </button>
            <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                <a href="/register" class="text-decoration-none text-black">Registration Now!!</a>
            </button>
        </div>
    </div>
</div>
@endsection