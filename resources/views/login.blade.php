

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            height: 100vh;
            background-color: #F7F8FA;
        }

        .left-section {
            width: 50%;
            background-color: #546881;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .left-section h1 {
            margin-bottom: 40px;
            font-size: 24px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
            max-width: 300px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
        }

        .login-button {
            background-color: #FFFFFF;
            color: #546881;
            font-size: 14px;
            font-weight: 700;
            padding: 10px;
            border: none;
            border-radius: 13px;
            cursor: pointer;
            width: 100%;
            max-width: 300px;
            margin-top: 20px;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 12px;
            text-decoration: underline;
            cursor: pointer;
            color: rgb(25, 0, 255);
        }

        .right-section {
            width: 50%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 181px;
            height: 42px;
        }
        .quality-restoration-20240527204252619-1 {
            border-radius: 8px;
            width: 181px;
            height: 42.33px;
            position: absolute;
            right: 41px;
            top: 550px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="left-section">
        <h1>Masuk Akun</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
        <div class="signup-link">
            <a href="{{ url('/register') }}">Belum punya akun?</a>
        </div>
    </div>
    <div class="right-section">
        <img src="Frame 20.png" alt="Background Image">

    </div>
    <img class="quality-restoration-20240527204252619-1" src="logo.jpg" />
</body>

</html>
