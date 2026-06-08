<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Trendora</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<section class="login-page">
    <div class="login-card">
        <h1>Create Account</h1>
        <p>Create your Trendora account to shop and manage your cart.</p>

        @if($errors->any())
            <div class="error-message">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST" class="login-form">
            @csrf

            <input 
                type="text" 
                name="name" 
                placeholder="Full name"
                value="{{ old('name') }}"
                required
            >

            <input 
                type="email" 
                name="email" 
                placeholder="Email address"
                value="{{ old('email') }}"
                required
            >

            <input 
                type="password" 
                name="password" 
                placeholder="Password"
                required
            >

            <input 
                type="password" 
                name="password_confirmation" 
                placeholder="Confirm password"
                required
            >

            <button type="submit">Register</button>
        </form>

        <p class="auth-switch">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>

        <a href="{{ route('home') }}" class="login-back">Back to Home</a>
    </div>
</section>

</body>
</html>