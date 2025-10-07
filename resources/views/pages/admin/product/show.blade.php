@extends('pages.admin.index')
@section('title-admin', 'Chi tiết sản phẩm')
@section('content-admin')

    <section class="">
        <h1 class="mb-4">Chi tiết sản phẩm</h1>

        <div class="card">
            <div class="card-header bg-dark text-white">
                Thông tin sản phẩm
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $product->id }}</p>
                <p><strong>Tên sản phẩm:</strong> {{ $product->name }}</p>
                <p><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VND</p>
                <p><strong>Mô tả:</strong> {{ $product->description }}</p>

                <div class="mb-3">
                    <strong>Hình ảnh:</strong><br>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}" width="200" class="img-thumbnail mt-2">
                    @else
                        <p>Không có hình ảnh</p>
                    @endif
                </div>

                <div class="mt-3">
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Sửa</a>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </section>

@endsection
