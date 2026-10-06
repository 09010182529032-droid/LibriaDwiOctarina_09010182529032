<<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Perpustakaan UTS Sistem Manajemen Perpustakaan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #eef3f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 380px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        }

        .logo {
            text-align: center;
            font-size: 45px;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            color: #1f4e79;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #444;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d5dbe1;
            border-radius: 7px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #1f4e79;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #1f4e79;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #163a5c;
        }

        .error {
            background: #fde2e2;
            color: #a33a3a;
            padding: 10px;
            border-radius: 7px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .footer {
            text-align: center;
            margin-top: 22px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">📚</div>

        <h1>Perpustakaan UTS</h1>

        <p class="subtitle">
            Sistem Manajemen Perpustakaan
        </p>

        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="btn-login">
                Masuk
            </button>

        </form>

        <div class="footer">
            © 2026 Perpustakaan UTS
        </div>

    </div>

</body>
</html>!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login - Perpustakaan UTS</title><style>body{margin:0;background:linear-gradient(135deg,#182848,#4b6cb7);font-family:Arial;min-height:100vh;display:grid;place-items:center}.box{width:min(390px,90%);background:#fff;padding:32px;border-radius:16px;box-shadow:0 15px 40px #0004}.input{width:100%;box-sizing:border-box;padding:12px;border:1px solid #ddd;border-radius:8px;margin:8px 0 16px}.btn{width:100%;padding:12px;background:#315efb;color:white;border:0;border-radius:8px;font-weight:bold}</style></head><body><div class="box"><h2>📚 Login Perpustakaan</h2><p>Silakan login untuk mengelola data buku.</p>@if($errors->any())<p style="color:#c33">{{ $errors->first() }}</p>@endif<form method="post" action="{{ route('login.process') }}">@csrf<label>Email</label><input class="input" type="email" name="email" value="{{ old('email') }}" placeholder="admin@perpustakaan.test"><label>Password</label><input class="input" type="password" name="password" placeholder="password"><button class="btn">Login</button></form><small>Demo: admin@perpustakaan.test / password</small></div></body></html>