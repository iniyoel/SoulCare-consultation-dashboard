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
        @font-face {
            font-family: 'LazyDog';
            src: url(<?php echo '/assets/fonts/Lazydog.woff2'; ?>) format('woff2'),
                 url(<?php echo '/assets/fonts/Lazydog.woff'; ?>) format('woff'),
                 url(<?php echo '/assets/fonts/Lazydog.eot'; ?>) format('eot');
            font-weight: normal;
            font-style: normal;
        }
        @media (max-width: 768px) {
        .sidebar {
            margin-bottom: 20px; /* Memberi jarak antara sidebar dan content */
            padding: 15px; /* Menyesuaikan padding untuk perangkat mobile */
        }

        .content {
            margin-top: 10px; /* Memberi jarak antara konten dan sidebar */
        }

        .col-md-2 {
            margin-bottom: 10px; /* Memberi jarak antara sidebar dan content */
        }

        .col-md-10 {
            margin-top: 10px; /* Memberi jarak antara konten dan sidebar */
        }

        /* Menyembunyikan gambar rantai di tampilan mobile */
        .spiral {
            display: none;
        }

        /* Menyembunyikan teks Logout */
        .navbar-custom a {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar-custom a .logout-text {
            display: none; /* Menyembunyikan teks Logout */
        }

        .navbar-custom a img {
            width: 25px; /* Menyesuaikan ukuran gambar */
            height: auto;
        }


    }


        body {
            background-color: #e2f0f9;
            font-family: "Poppins", sans-serif;
        }

        .navbar-custom {
            background: linear-gradient(to bottom, #BED7DD 0%, #4B979F 100%);
            color: white;
            padding: 30px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Mengatur urutan untuk logo dan logout */
        .navbar-custom .order-1 {
            display: flex;
            align-items: center;
        }

        .navbar-custom .order-2 {
            display: flex;
            align-items: center;
            margin-left: auto;  /* Membuat elemen pindah ke kanan */
            position: absolute; /* Menggunakan absolute untuk menempatkannya di ujung kanan */
            right: -10px; /* Menambahkan jarak ke kanan */
        }


        .navbar-custom a {
            color: black;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 30px;
        }

        /* Logout icon */
        .navbar-custom a img {
            width: 45px;
            margin-left: 10px;
        }


        .sidebar h1 {
            font-size: 1.5rem; /* Set ukuran font default */
            margin-bottom: 10px;
            overflow: hidden;  /* Untuk menghindari teks keluar dari kontainer */
            text-overflow: ellipsis; /* Menambahkan elipsis jika teks terlalu panjang */
            white-space: nowrap; /* Mencegah teks untuk terpecah pada baris baru */
        }

        .sidebar {
            background-color: white;
            padding: 20px;
            border-radius: 21px;
            height: max-content;
            text-align: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Make the sidebar flexible */
        }
        .edit-icon {
            width: 30px;
            height: 30px;
            margin-top: 10px; /* Add some space between the profile picture and the edit icon */
            cursor: pointer;

        }


        .sidebar .btn {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            color: white;
            background-color: #93AF4C;
            border: none;
            border-radius: 20px;
            text-align: center;
            padding-left: 15px;
        }

        .sidebar .btn:hover{
            background-color: #254c66;
            font-weight: 500;
        }

        .content {
            background-color: white;
            border-radius: 10px;
            padding: 40px 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .spiral {
            position: absolute;
            left: -20px;
            top: 20px;
            height: 95%;
            max-width: 4%;
        }

        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-save {
            background-color: #406882;
            color: white;
            border-radius: 20px;
            padding: 10px 30px;
            border: none;
        }
        .btn-save:hover {
            background-color: #325467;
        }
        .dropdowns {
            display: flex;
            justify-content: flex-start;
            gap: 160px;
            align-items: center;
        }

        .dropdowns label {
            font-size: 18px;
            font-weight: bold;
        }

        .dropdowns .form-select {
            border-radius: 10px;
            border: 1px solid #93AF4C;
            padding: 5px 10px;
            font-size: 16px;
        }
        .menu-dropdown a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center order-1">
            <img src="{{ asset('Resource/Logo.png') }}" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px; font-family: 'LazyDog', sans-serif;">SoulCare</p>
        </div>
        <div class="d-flex align-items-center order-2 ml-auto"> <!-- Menambahkan ml-auto untuk menggeser ke kanan -->
            <a href="{{ url('/') }}" class="mr-5">
                <span class="logout-text">Logout</span>
                <img src="{{ asset('Resource/Logout.png') }}" alt="Logout Icon">
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1 style="font-weight: 600;">Guru BK</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <!-- Gambar Edit (Ganti Password) di bawah logo profil -->
                    <a href="{{ url('/Ganti-Password') }}">
                        <img src="{{ asset('Resource/Edit.png') }}" alt="Edit Password" class="edit-icon mb-3" style="width: 20px; height:20px;">
                    </a>
                    <h5>{{ $user->name }}</h5>
                    <a href="{{ url('/Rekap-Data') }}" class="btn">Rekap Data</a>
                    <div class="menu-dropdown">
                        <div class="dropdown-submenu">
                            <a href="{{ url('/Rekap-DataKelas7') }}" class="d-block">Kelas 7</a>
                            <a href="{{ url('/Rekap-DataKelas8') }}" class="d-block">Kelas 8</a>
                            <a href="{{ url('/Rekap-DataKelas9') }}" class="d-block">Kelas 9</a>
                        </div>
                    </div>
                    <a href="{{ url('/Materi-KonselingBK') }}" class="btn">Materi</a>
                    <a href="{{ url('/Upload-Materi') }}" class="btn">Upload Materi</a>
                    <a href="{{ url('/Keluhan-BK') }}" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="{{ asset('Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">

                    <!-- Deskripsi Masalah -->
                    <div class="form-group mt-4">
                        <label for="deskripsiMasalah">Deskripsi Masalah:</label>
                        <textarea id="deskripsiMasalah" class="form-control" rows="15" readonly>{{ $keluhan->issue_description }}</textarea>
                    </div>

                    <!-- Tombol Selanjutnya -->
                    <div class="form-group mt-4 d-flex justify-content-end">
                        <button type="button" class="btn btn-save" onclick="backPage()">Kembali</button>
                    </div>
                </div>
            </div>

            <script>
                // Fungsi untuk tombol selanjutnya
                function backPage() {
                    // Arahkan ke halaman berikutnya
                    window.location.href = "{{ url('/Rekap-Data/Kelas7') }}";
                }
            </script>

        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
