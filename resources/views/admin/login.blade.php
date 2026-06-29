<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Đăng nhập</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .login-box { background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 2px 20px rgba(0,0,0,.1); width: 100%; max-width: 400px; }
        h1 { text-align: center; color: #e52d27; margin-bottom: 30px; font-size: 24px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 6px; color: #333; font-weight: 600; font-size: 14px; }
        input[type="email"], input[type="password"] { width: 100%; padding: 12px 16px; border: 1px solid #ddd; border-radius: 8px; font-size: 15px; outline: none; transition: border-color .2s; }
        input:focus { border-color: #e52d27; }
        button { width: 100%; padding: 12px; background: linear-gradient(135deg, #e52d27, #b31217); color: #fff; border: none; border-radius: 8px; font-size: 16px; font-weight: 700; cursor: pointer; transition: opacity .2s; }
        button:hover { opacity: .9; }
        .error { color: #e52d27; font-size: 13px; margin-top: 5px; }
        .alert { padding: 12px; background: #fee; color: #c00; border-radius: 8px; margin-bottom: 20px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Admin Login</h1>
        @if ($errors->any())
            <div class="alert">{{ $errors->first('email') }}</div>
        @endif
        <form method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
