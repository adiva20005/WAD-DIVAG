<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Stasiun Berhantu</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: #2a2a2a;
            padding: 2rem;
            border-radius: 10px;
            width: 400px;
        }
        h2 {
            color: crimson;
            text-align: center;
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-top: 1rem;
        }
        input {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.3rem;
            background-color: #1a1a1a;
            color: white;
            border: 1px solid #555;
            border-radius: 5px;
        }
        button {
            margin-top: 1.5rem;
            width: 100%;
            padding: 0.7rem;
            background-color: crimson;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }
        .error {
            color: orange;
            margin-top: 0.5rem;
        }
        .link {
            margin-top: 1rem;
            text-align: center;
        }
        a {
            color: crimson;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Daftar Akun 👤</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Nama</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            @if($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            <button type="submit">Daftar</button>
        </form>
        <div class="link">
            Sudah punya akun? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>
</html>
