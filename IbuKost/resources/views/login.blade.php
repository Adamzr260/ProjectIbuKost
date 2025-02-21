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
        <!-- Logo -->
        <div class="login-header">
            <img src="{{ asset('images/logo.png') }}" alt="IbuKost Logo">
            <h1>IbuKost</h1>
        </div>

        <!-- Form Login -->
        <div class="login-box">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-button">LOGIN</button>
            </form>
        </div>
    </div>

</body>

</html>
