<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Вход в админку</title>
    <style>
        :root {
            color-scheme: light;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            padding: 28px;
        }
        h1 {
            margin: 0 0 16px;
            font-size: 22px;
        }
        label {
            display: block;
            margin: 12px 0 6px;
            font-size: 14px;
            color: #333;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #dfe3ee;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 12px 0 18px;
            font-size: 13px;
            color: #555;
        }
        .btn {
            width: 100%;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        .error {
            margin-top: 10px;
            color: #b91c1c;
            font-size: 13px;
        }
        .hint {
            margin-top: 16px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Вход в админку</h1>

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Пароль</label>
            <input id="password" type="password" name="password" required>

            <div class="row">
                <input id="remember" type="checkbox" name="remember">
                <label for="remember" style="margin: 0;">Запомнить меня</label>
            </div>

            <button class="btn" type="submit">Войти</button>

            @if ($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif
        </form>

        <div class="hint">Только для пользователей с ролью admin.</div>
    </div>
</body>
</html>
