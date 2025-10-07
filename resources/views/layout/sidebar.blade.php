<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Quản lý bán hàng</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      height: 100vh;
      background: #343a40;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      width: 240px;
      padding-top: 20px;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }
    .sidebar a:hover {
      background: #495057;
    }
    .content {
      margin-left: 240px; /* khớp với width của sidebar */
      padding: 20px;
      min-height: 100vh;
      background: #f8f9fa;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h4 class="text-center mb-4">📊 Quản lý bán hàng</h4>
    <a href="{{route('dashboard')}}">🏠 Trang chủ</a>
    <a href="{{route('admin.product.index')}}">📦 Sản phẩm</a>
    <a href="{{route('admin.user.index')}}">👥 Khách hàng</a>
    <a href="{{route('admin.blogs.index')}}">📝 Bài viết</a>
    <hr class="bg-light">
    <a href="{{route('home')}}">🚪 Đăng xuất</a>
  </div>

  <!-- MAIN CONTENT -->
  <div class="content">
    @yield('content-admin')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
