<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'LazyDog';
            src: url('assets/fonts/Lazydog.woff2') format('woff2'),
                 url('assets/fonts/Lazydog.woff') format('woff'),
                 url('assets/fonts/Lazydog.eot') format('eot');
            font-weight: normal;
            font-style: normal;
        }
        body {
            background-color: #e2f0f9;
            font-family: "poppins";
        }

        .navbar-custom {
            background: linear-gradient(90deg, #BED7DD 0%, #4B979F 65%);
            color: white;
            padding: 30px 15px;
        }

        .navbar-custom h4 {
            margin: 0;
            color: white;
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

        .sidebar .btn:hover {
            background-color: #254c66;
            font-weight: 500;
        }

        .menu-dropdown a {
            color: black;
            text-decoration: none;
        }

        .menu-dropdown a:hover {
            text-decoration: underline;
        }

        .content {
            background-color: white;
            border-radius: 10px;
            padding: 30px 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .spiral {
            position: absolute;
            left: -20px;
            top: 20px;
            height: 95%;
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

        .chart-container {
            max-width: 600px;
            margin: 0 auto;
        }

        h2.judul-konseling {
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        h2.judul-konseling img {
            margin-right: 15px;
            width: 55px; /* Adjust the image size */
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset('Resource/Logo.png') }}" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px;  font-family: 'LazyDog', sans-serif;">SoulCare</p>
        </div>
        <div>
            <a href="{{ url('/') }}" class="mr-5">
                Logout <img src="{{ asset('Resource/Logout.png') }}" alt="Logout Icon">
            </a>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1 style="font-weight: 600;">Guru BK</h1>
                    <!-- Gambar Profil -->
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle " style="width: 80px;">

                    <!-- Gambar Edit (Ganti Password) di bawah logo profil -->
                    <a href="{{ url('/Ganti-Password') }}">
                        <img src="{{ asset('Resource/Edit.png') }}" alt="Edit Password" class="edit-icon mb-3" style="width: 20px; height:20px;">
                    </a>
                    <h5>Nama</h5>
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
                    <img src="{{ asset('Resource/Rantai.svg') }}" class="spiral" alt="Jilid Spiral">
                    <h2 class="judul-konseling">
                        <img src="{{ asset('Resource/garis3BK.png') }}" alt="Garis3BK" class="garis">
                        Materi Konseling
                    </h2>

                    <!-- Materi Konseling -->
                    <div class="mt-4">
                        <!-- Materi 1 -->
                        <div class="d-flex mb-4">
                            <!-- Video Placeholder -->
                            <div style="flex: 1; max-width: 360px; margin-right: 20px;">
                                <iframe width="360" height="180" src="https://www.youtube.com/embed/example1"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                    <a href="https://www.youtube.com/watch?v=example1" target="_blank">youtube.com</a>
                            </div>
                            <!-- Deskripsi Materi -->
                            <div style="flex: 3;">
                                <h5 style="font-weight: bold;">Cara menjadi pendengar yang baik</h5>
                                <p><a href="files/MenjadiPendengarBaik.pdf" download class="text-danger">Menjadi pendengar yang baik.pdf</a></p>
                            </div>
                        </div>

                        <!-- Materi 2 -->
                        <div class="d-flex mb-4">
                            <!-- Video Placeholder -->
                            <div style="flex: 1; max-width: 360px; margin-right: 20px;">
                                <iframe width="360" height="180" src="https://www.youtube.com/embed/example2"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                    <a href="https://www.youtube.com/watch?v=example2" target="_blank">youtube.com</a>
                            </div>
                            <!-- Deskripsi Materi -->
                            <div style="flex: 3;">
                                <h5 style="font-weight: bold;">Apa, Sih, Konseling Sebaya Itu?</h5>
                                <p><a href="files/KonselingSebaya.pdf" download class="text-danger">Konseling Sebaya.pdf</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Kembali dan Selanjutnya -->
                </div>
            </div>

            <script>
                // Fungsi untuk tombol kembali
                function goBack() {
                    window.history.back();
                }

                // Fungsi untuk tombol selanjutnya
                function nextPage() {
                    window.location.href = "halamanBerikutnya.html";
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
