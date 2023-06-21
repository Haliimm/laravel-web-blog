@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle">
    <h1>My Posts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">All</a></li>
            <li class="breadcrumb-item active">Posts</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive small col-lg-12">
    <div class="mb-3">
        <button type="button" class="btn btn-primary">
            <a href="/dashboard/posts/create" class="text-white text-decoration-none">Add Post</a>
        </button>
    </div>

    <table class="table table-striped table-lg">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $post->title }} </td>
                <td> {{ $post->category->name }} </td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                        </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<section class="section dashboard">
    <div class="row">
</section>
@endsection