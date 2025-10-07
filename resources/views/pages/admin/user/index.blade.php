@extends('pages.admin.index')
@section('title-admin', 'User Management')
@section('content-admin')

<h1 class="mb-4">Quản lý người dùng</h1>

<a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-4">
    <i class="bi bi-person-plus"></i> Thêm người dùng
</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->created_at->format('d/m/Y') }}</td>
            <td>
                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-sm btn-info">chi tiết</a>
                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Không có người dùng nào</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
