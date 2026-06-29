<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; display: flex; min-height: 100vh; }
        .sidebar { width: 240px; background: #1a1a2e; color: #fff; padding: 20px 0; display: flex; flex-direction: column; }
        .sidebar h2 { padding: 0 20px 20px; font-size: 18px; border-bottom: 1px solid rgba(255,255,255,.1); }
        .sidebar nav { padding: 10px 0; flex: 1; }
        .sidebar a { display: block; padding: 12px 20px; color: #ccc; text-decoration: none; transition: all .2s; font-size: 14px; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,.1); color: #fff; }
        .main { flex: 1; display: flex; flex-direction: column; }
        .header { background: #fff; padding: 16px 30px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        .header h3 { font-size: 18px; color: #333; }
        .header form { margin: 0; }
        .header button { background: none; border: 1px solid #ddd; padding: 6px 16px; border-radius: 6px; cursor: pointer; font-size: 14px; color: #666; }
        .header button:hover { background: #f5f5f5; }
        .content { padding: 30px; flex: 1; }
        .card { background: #fff; border-radius: 10px; padding: 24px; box-shadow: 0 1px 4px rgba(0,0,0,.08); margin-bottom: 24px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; font-size: 14px; }
        th { background: #fafafa; font-weight: 600; color: #555; }
        tr:hover { background: #fafafa; }
        .btn { display: inline-block; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; border: none; cursor: pointer; }
        .btn-primary { background: #e52d27; color: #fff; }
        .btn-primary:hover { background: #c01e1a; }
        .btn-warning { background: #f0ad4e; color: #fff; }
        .btn-danger { background: #d9534f; color: #fff; }
        .btn-sm { padding: 4px 10px; font-size: 12px; }
        .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        img.thumb { width: 80px; height: 60px; object-fit: cover; border-radius: 4px; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
        .stat-card .num { font-size: 28px; font-weight: 700; color: #e52d27; }
        .stat-card .label { color: #666; font-size: 14px; margin-top: 4px; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px; color: #333; }
        .form-control { width: 100%; padding: 10px 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; outline: none; }
        .form-control:focus { border-color: #e52d27; }
        select.form-control { background: #fff; }
        .pagination { margin-top: 20px; }
        .pagination nav { display: flex; gap: 4px; }
        .pagination a, .pagination span { padding: 6px 12px; border: 1px solid #ddd; border-radius: 4px; text-decoration: none; color: #333; font-size: 13px; }
        .pagination .active span { background: #e52d27; color: #fff; border-color: #e52d27; }
        .inline-form { display: inline; }
        .section-badge { display: inline-block; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: 600; background: #e8e8e8; color: #555; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.images.index') }}" class="{{ request()->routeIs('admin.images.*') ? 'active' : '' }}">Quản lý ảnh</a>
            <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">Liên hệ</a>
            <a href="{{ route('home') }}" target="_blank">Xem trang</a>
        </nav>
    </div>
    <div class="main">
        <div class="header">
            <h3>@yield('title')</h3>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">Đăng xuất</button>
            </form>
        </div>
        <div class="content">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>
