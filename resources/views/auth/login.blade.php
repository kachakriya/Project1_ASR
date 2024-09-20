<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<div class="form-container">
<div class="container">
    <form action="{{ route('login') }}" method="POST">
        @csrf
            
        <!-- Image above the login heading -->
        <div class="logo-container">
        <img src="{{ asset('images/Restaurant-Logo.png') }}" alt="Restaurant Logo" class="logo">
</div>
    <h2>Login to account</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}">Don't have an account? Register here</a>
</div>

</body>
</html>
