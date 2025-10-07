@extends('pages.admin.index')
@section('title-admin', 'blog Management')
@section('content-admin')

    <h1 class="mb-4">Quản lý bài viết</h1>

    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-4">
        <i class="bi bi-plus-circle"></i> Thêm bài viết
    </a>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>tiêu đề bài viết</th>
                <th>Hình ảnh</th>
                <th>nội dung</th>
                <th>hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <td class="text-center">{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td class="text-center">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}" width="60"
                                height="60" style="object-fit: cover; border-radius: 8px;">
                        @else
                            <span class="text-muted">Chưa có ảnh</span>
                        @endif
                    </td>
                    <td>
                        <div class="truncate">
                            {{ $blog->body }}
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Sửa
                        </a>
                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i> Chi tiết
                        </a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                            style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">
                                <i class="bi bi-trash"></i> Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Không có bài viết nào</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
