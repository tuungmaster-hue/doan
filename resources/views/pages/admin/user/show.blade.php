@extends('pages.admin.index')
@section('title-admin', 'User Management')
@section('content-admin')
    <h1 class="mb-4">chi tiết người dùng</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tên: {{ $users->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $users->email }}</p>
            <p class="card-text"><strong>Điện thoại:</strong> {{ $users->phone }}</p>
            <p class="card-text"><strong>Địa chỉ:</strong> {{ $users->address }}</p>
            <p class="card-text"><strong>Ngày tạo:</strong> {{ $users->created_at->format('d/m/Y') }}</p>
            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
@endsection
