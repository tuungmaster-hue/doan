@extends('pages.admin.index')
@section('title-admin', 'Dashboard')
@section('content-admin')
<section>
    <div>
        <h2 class="mb-4">Bảng điều khiển</h2>

        <!-- Thống kê tổng -->
        <div class="row g-4 text-center mb-5">
            <div class="col">
                <div class="card text-white bg-primary shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">👥 Người dùng</h5>
                        <p class="card-text fs-4">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">📦 Sản phẩm</h5>
                        <p class="card-text fs-4">{{ $totalProducts }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-danger shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">📂 Danh mục</h5>
                        <p class="card-text fs-4">{{ $totalcategories }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-info shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">🏷️ Thương hiệu</h5>
                        <p class="card-text fs-4">{{ $totalBrands }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">📝 Bài viết</h5>
                        <p class="card-text fs-4">{{ $totalBlogs }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biểu đồ -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">📈 Người dùng mới theo tháng</h5>
                        <canvas id="userChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">📊 Tỷ lệ sản phẩm theo danh mục</h5>
                        <canvas id="categoryChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Thêm Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Biểu đồ đường: người dùng mới
    const userCtx = document.getElementById('userChart').getContext('2d');
    new Chart(userCtx, {
        type: 'line',
        data: {
            labels: ['Th1','Th2','Th3','Th4','Th5','Th6','Th7','Th8','Th9','Th10','Th11','Th12'],
            datasets: [{
                label: 'Người dùng mới',
                data: [5, 10, 8, 12, 20, 18, 25, 30, 15, 10, 12, 22],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.2)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Biểu đồ tròn: tỉ lệ sản phẩm theo danh mục
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['Điện thoại', 'Laptop', 'Phụ kiện', 'Khác'],
            datasets: [{
                data: [30, 20, 25, 25],
                backgroundColor: ['#ffc107', '#0d6efd', '#20c997', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>
@endsection
