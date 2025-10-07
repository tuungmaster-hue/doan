@extends('index')
@section('title-user')
@section('content-user')

<section class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h1 text-success mb-3">{{ $blog->title }}</h1>
            <p class="text-muted">
                <i class="fa fa-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}
            </p>
            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded mb-4 shadow-sm" alt="{{ $blog->title }}">

            <div class="blog-content text-dark" style="line-height: 1.8;">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <hr class="my-5">
            <div class="text-center">
                <a href="{{ route('blog') }}" class="btn btn-outline-success">
                    <i class="fa fa-arrow-left"></i> Quay lại Blog
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
