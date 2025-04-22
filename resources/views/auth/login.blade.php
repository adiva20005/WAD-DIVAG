<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Stasiun Berhantu</title>
    <style>
        body {
            background-color:rgb(79, 6, 6);
            color: white;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
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
            text-align: center;
            margin-top: 1rem;
        }
        .link a {
            color: crimson;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login 👻</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            @if($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            <button type="submit">Masuk</button>
        </form>

        <div class="link">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
    </div>
</body>
</html>
