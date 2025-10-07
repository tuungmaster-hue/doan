@extends('pages.admin.index')
@section('title-admin', 'Users Management')
@section('content-admin')

    <section>
        <h1 class="mb-4">Chỉnh sửa người dùng</h1>
        <form action="{{ route('admin.user.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $users->phone }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $users->address }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật người dùng</button>
        </form>
    </section>

@endsection
