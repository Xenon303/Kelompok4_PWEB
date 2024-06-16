<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            height: 100vh;
            background-color: #ffffff;
        }

        .left-section {
            width: 40%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-section img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 181px;
            height: 42px;
        }
        .quality-restoration-20240527204252619-1 {
            border-radius: 8px;
            width: 181px;
            height: 43.33px;
            position: absolute;
            left: 41px;
            top: 550px;
            object-fit: cover;
        }

        .right-section {
            width: 60%;
            background-color: #546881;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .form-container {
            width: 100%;
            max-width:400px;
            background-color: #546881;
            padding: 20px;
            justify-content: center;
            align-items: center;S
            border-radius: 8px;
        }

        .form-container h2 {
            color: #ffffff;
            margin-bottom: 20px;
            text-align: center;
            top: 350px;
            font-size: 24px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }


        .form-group button {
            position: absolute;
            background-color: #FFFFFF;
            color: #546881;
            font-size: 14px;
            font-weight: 700;
            padding: 10px;
            border: none;
            border-radius: 13px;
            cursor: pointer;
            width: 10%;
            right: 250px;
            max-width: 300px;
            margin-top: 20px;
        }

        .form-group a {
            position: relative;
            margin-top: 50px;
            color: rgb(255, 255, 255);
            text-decoration: underline;
            font-size: 14px;
            bottom: -25px;
            right: -10px;
        }

    </style>
</head>

<body>
        <div class="left-section">
            <img src="Frame 20.png">

        </div>
            <img class="quality-restoration-20240527204252619-1" src="logo.jpg" />
        <div class="right-section">
            <div class="form-container">
                <h2>Daftar Akun</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Ndepan">Nama</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Daftar</button>
                    </div>
                    <div class="form-group">
                        <a href="/login">Sudah punya akun</a>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
