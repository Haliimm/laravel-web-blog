@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div>
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name
                        }}</a> in
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
                        $post->category->name
                        }}</a>
                </p>

                <img src="/img/web.jpg" alt="{{ $post->category->name }}" style="width: auto" class="img-fluid">

                <div class="my-3 fs-5">
                    {!! $post->body !!}
                </div>
            </div>
            <div>
                <a href="/blogs" class="btn btn-primary mt-3 text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection