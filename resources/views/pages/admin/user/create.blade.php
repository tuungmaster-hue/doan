@extends('pages.admin.index')
@section('title-admin', 'Quản lý sản phẩm')
@section('content-admin')
    <h1 class="mb-4">Thêm người dùng mới</h1>
    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm người dùng</button>
    </form>
@endsection
