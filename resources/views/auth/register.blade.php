<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <h2>Register</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

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

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">Register</button>
    </form>

    <a href="{{ route('login') }}">Already have an account? Login here</a>
</div>

</body>
</html>
