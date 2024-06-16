<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&display=swap");

        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: #F7F8FA;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            width: 100%;
            height: 100px;
            background: #47586E;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 100px;
            box-sizing: border-box;
        }

        .header img {
            width: 181px;
            height: 42.33px;
            border-radius: 8px;
            object-fit: cover;
        }

        .nav {
            display: flex;
            gap: 30px;
        }

        .nav a {
            text-decoration: none;
        }

        .nav-item {
            padding: 10px 30px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .nav-item.point {
            background: white;
            color: #546881;
        }

        .nav-item.home {
            background: #5e8bc354;
            color: #ffffff;
        }

        .nav-item.about,
        .nav-item.contact {
            border: 2px #B2BBC6 solid;
            color: white;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 100px;
            width: 100%;
            box-sizing: border-box;
        }

        .text {
            max-width: 450px;
        }

        .text h1 {
            font-size: 30px;
            font-weight: 700;
            color: black;
            margin: 1;
        }

        .text p {
            font-size: 18px;
            font-weight: 400;
            color: black;
            margin-top: 30px;
            text-align: justify;
        }

        .bg-beranda {
            position: relative;
            width: 429px;
            height: 481px;
        }

        .image {
            width: 396px;
            height: 447px;
        }

        .image .img {
            position: relative;
            width: 396px;
            height: 447px;
            top: -300px;
            left: 350px;
            object-fit: cover;
        }

        .buttons {
            display: flex;
            position: relative;
            gap: 50px;
            margin-top: 15px;
            right: 450px;
        }

        .buttons a {
            text-decoration: none;
        }

        .buttons .btn {
            padding: 15px 40px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            font-weight: 1000;
            color: #F7F8FA;
        }

        .buttons .btn.login {
            background: #3D4C5E;
        }

        .buttons .btn.register {
            background: #B2BBC6;
            color: #090B0E;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="logo.jpg" alt="Logo">
        <div class="nav">
            <a href="{{ url('/beranda') }}" class="nav-item point">Beranda</a>
            <a href="{{ url('/produk') }}" class="nav-item home">Produk</a>
            <a href="{{ url('/') }}" class="nav-item home">Logout</a>
        </div>
    </div>
    <div class="content">
        <div class="text">
            <h1>Sederhana. Cepat. Efektif.<br>Manajemen Inventaris Anda</h1>
            <p>Mengelola inventaris bisnis Anda dengan efisien kami membantu Anda melacak stok, mengelola pesanan, dan menganalisis kinerja bisnis Anda. Dengan fokus pada kemudahan penggunaan, kami hadir untuk memastikan inventaris Anda dikelola dengan baik, membebaskan Anda untuk fokus pada pertumbuhan bisnis Anda.</p>
        </div>
    </div>
    
    <div class="image">
        <img class="img" src="Untitled.png" />
    </div>
</body>

</html>
