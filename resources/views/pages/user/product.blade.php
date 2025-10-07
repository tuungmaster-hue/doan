@extends('index')
@section('title-user', 'Products')

@section('content-user')
<div class="container py-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <h1 class="h3 pb-3 border-bottom">Danh mục</h1>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Thời trang nam
                    <span class="badge bg-success rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Thời trang nữ
                    <span class="badge bg-success rounded-pill">8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Phụ kiện
                    <span class="badge bg-success rounded-pill">5</span>
                </li>
            </ul>
        </div>

        <!-- Product List -->
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h4 mb-0">Tất cả sản phẩm</h2>
                <select class="form-select w-auto">
                    <option selected>Sắp xếp theo</option>
                    <option>Giá tăng dần</option>
                    <option>Giá giảm dần</option>
                    <option>Mới nhất</option>
                </select>
            </div>

            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     class="card-img-top rounded-top" 
                                     alt="{{ $product->name }}" 
                                     style="height: 250px; object-fit: cover;">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <a href="#" class="btn btn-sm btn-success rounded-circle">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{ route('deltai_product', $product->id) }}" class="h5 text-decoration-none text-dark">
                                    {{ $product->name }}
                                </a>
                                <p class="text-muted mb-1">{{ Str::limit($product->description, 50) }}</p>
                                <h5 class="text-success fw-bold">{{ number_format($product->price, 0, ',', '.') }} ₫</h5>
                                <a href="#" class="btn btn-outline-success mt-2 w-100">
                                    <i class="fas fa-cart-plus me-1"></i> Thêm vào giỏ
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <h4 class="text-muted">Không có sản phẩm nào!</h4>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
