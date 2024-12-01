<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('Resource/Icon.png') }}" type="image/png">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%; /* Pastikan body mengisi seluruh lebar layar */
        }

        body {
            background-color: #e2f0f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Menambahkan gambar awan di bagian atas sebagai background */
        .cloud {
            position: absolute;
            top: 0; /* Menjaga posisi awan tetap di atas */
            left: 0;
            width: 100%; /* Mengisi lebar penuh layar */
            height: 40vh; /* Sesuaikan tinggi awan, gunakan persen agar responsif */
            object-fit: cover; /* Memastikan gambar menutupi area tanpa terpotong */
            z-index: -2; /* Menempatkan gambar di belakang */
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* Menambahkan gambar rumput di bagian bawah, hanya sebagian yang ditampilkan */
        .grass {
            position: absolute;
            bottom: -20%; /* Menurunkan posisi rumput lebih jauh */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 30%; /* Menampilkan lebih banyak rumput */
            object-fit: cover;
            z-index: -1; /* Rumput tetap berada di belakang elemen utama */
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .logo {
            width: 40%; /* Mengatur lebar logo agar lebih responsif */
            max-width: 300px;
            margin-bottom: 20px;
        }

        /* Kartu Pilihan */
        .option-card {
            background-color: #ffffff;
            width: auto;
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            aspect-ratio: 1/1;
            max-width: 250px;
        }

        .option-card:hover {
            transform: scale(1.05);
        }

        .option-card img {
            width: auto;
            height: 100px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        /* Row Layout Adjustment */
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Menambahkan jarak antar kolom */
        }

        /* Menjaga Kolom tetap Teratur pada Mobile */
        .col-md-3 {
            flex: 1 1 250px;
            max-width: 250px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <div class="container text-center">
        <!-- Gambar Awan -->
        <img src="{{ asset('Resource/Cloud.png') }}" alt="Awan" class="cloud">

        <img src="{{ asset('Resource/Logo.png') }}" alt="SoulCare Logo" class="logo">

        <!-- Judul -->
        <h1 class="font-weight-bold">Selamat Datang!</h1>

        <!-- Pilihan -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('/login') }}">
                    <div class="option-card">
                        <img src="{{ asset('Resource/Konselor.png') }}" alt="Konselor Sebaya">
                        <h5>Konselor Sebaya</h5>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{ url('/login') }}">
                    <div class="option-card">
                        <img src="{{ asset('Resource/GuruBK.png') }}" alt="Guru BK">
                        <h5>Guru BK</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Gambar Rumput -->
    <img src="{{ asset('Resource/Grass.png') }}" alt="Rumput" class="grass">

    <!-- Bootstrap JS, Popper.js, dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
