@extends('pages.admin.index')
@section('title-admin', 'Chi tiết bài viết')
@section('content-admin')

    <section>
        <h1 class="mb-4">Chi tiết bài viết</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>{{ $blog->title }}</h2>
            </div>
            <div class="card-body">
                @if ($blog->image)
                    <div class="mb-3 text-center">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid"
                            style="max-height: 300px; object-fit: cover; border-radius: 8px;">
                    </div>
                @endif
                <p>{{ $blog->body }}</p>
            </div>
        </div>

        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Quay lại danh sách
        </a>
    </section>

@endsection
