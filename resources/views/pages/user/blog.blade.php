@extends('index')
@section('title-user', 'Blog')
@section('content-user')

<!-- Start Page Title -->
<div class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Blog</h1>
            <p>
                Cập nhật tin tức, xu hướng và mẹo hay mỗi ngày từ <b>Zay Shop</b>.
            </p>
        </div>
    </div>
</div>

<!-- Blog List -->
<section class="container py-5">
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                <div class="card-body">
                    <h5 class="card-title text-success">{{ $blog->title }}</h5>
                    <p class="card-text text-muted">
                        {{ Str::limit($blog->content, 100, '...') }}
                    </p>
                    <a href="{{ route('deltaiblog', $blog->id) }}" class="btn btn-success w-100">Đọc tiếp</a>
                </div>
                <div class="card-footer bg-transparent text-muted small">
                    <i class="fa fa-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
