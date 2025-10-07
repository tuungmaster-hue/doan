@extends('pages.admin.index')
@section('title-admin', 'Quản lý bài viết')
@section('content-admin')
    <h1 class="mb-4">Thêm bài viết mới</h1>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for=" title" class="form-label">Tiêu đề bài viết</label>
            <input type="text" class="form-control" id=" title" name=" title" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Nội dung</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <button type="submit" class="btn btn-primary">Thêm bài viết</button>
    </form>
@endsection
