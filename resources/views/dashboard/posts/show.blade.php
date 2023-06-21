@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <div>
                <h1 class="mb-3">{{ $post->title }}</h1>

                <div class="mb-3">
                    <a href="/dashboard/posts" class="btn btn-primary text-decoration-none"><i
                            class="bi bi-arrow-left"></i>Back to My Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-decoration-none"><i
                            class="bi bi-pencil-square"></i>Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">
                            <i class="bi bi-trash3-fill"></i>Delete
                        </button>
                        </a>
                    </form>
                </div>

                <img src="/img/web.jpg" alt="{{ $post->category->name }}" style="width: auto" class="img-fluid">

                <div class="my-3 fs-5">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection