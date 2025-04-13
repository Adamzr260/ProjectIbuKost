<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IbuKost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fordb.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forkmr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forrtt.css') }}">
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div>
        {{ $slot }}
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/kamar.js') }}"></script>
    <script src="{{ asset('js/ritata.js') }}"></script>
</body>
</html>
