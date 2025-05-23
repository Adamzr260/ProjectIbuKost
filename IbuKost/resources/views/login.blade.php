<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | IbuKost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="login-container">
        <div class="login-header">
            <img src="{{ asset('images/logo.jpg') }}" alt="IbuKost Logo">
        </div>

        <div class="login-box">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-button">MASUK</a></button>
            </form>
            <p class="login-link">Belum punya akun? <a href="{{ route('register') }}">DAFTAR</a></p>
        </div>
    </div>

</body>

</html>