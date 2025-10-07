@extends('pages.admin.index')
@section('title-admin', 'blog Management')
@section('content-admin')

    <section>
        <h1 class="mb-4">Chỉnh sửa bài viết</h1>
        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Mô tả</label>
                <textarea class="form-control" id="body" name="body">{{ $blog->body }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                @if ($blog->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}" width="100">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </form>
    </section>

@endsection
