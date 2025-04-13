<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | IbuKost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="register-container">
    <div class="register-box">
        <div class="logo-container">
            <img src="{{ asset('images/logo.jpg') }}" alt="IbuKost Logo">
        </div>
        <h2>Daftar</h2>
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Masukkan ulang password" required>
            </div>
            <button type="submit" class="register-button">DAFTAR</button>
        </form>
        <p class="login-link">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>

</body>

</html>