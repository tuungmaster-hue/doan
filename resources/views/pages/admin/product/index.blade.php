@extends('pages.admin.index')
@section('title-admin', 'Product Management')
@section('content-admin')

<h1 class="mb-4">Quản lý sản phẩm</h1>

<a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-4">
    <i class="bi bi-plus-circle"></i> Thêm sản phẩm
</a>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark text-center">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Thương hiệu</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td class="text-center">{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td class="text-center">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}"
                         alt="{{ $product->name }}"
                         width="60" height="60"
                         style="object-fit: cover; border-radius: 8px;">
                @else
                    <span class="text-muted">Chưa có ảnh</span>
                @endif
            </td>
            <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
            <td>{{ $product->brand }}</td>
            <td class="text-center">
                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil-square"></i> Sửa
                </a>
                <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-sm btn-info">
                    <i class="bi bi-eye"></i> Chi tiết
                </a>
                <form action="{{ route('admin.product.destroy', $product->id) }}"
                      method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="btn btn-sm btn-danger"
                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                        <i class="bi bi-trash"></i> Xóa
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center text-muted">Không có sản phẩm nào</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
