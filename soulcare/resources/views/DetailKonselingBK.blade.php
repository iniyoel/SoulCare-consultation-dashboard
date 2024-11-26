<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e2f0f9;
            font-family: "poppins", sans-serif;
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
            color: white;
            text-decoration: none;
        }
        .sidebar {
            background-color: white;
            padding: 20px;
            border-radius: 21px;
            height: max-content;
            text-align: center;
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
        <div class="d-flex align-items-center">
            <img src="{{ asset('Resource/Logo.png') }}" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px;">SoulCare</p>
        </div>
        <div>
            <a href="{{ url('/') }}" class="mr-5">Logout</a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1 style="font-weight: 600;">Guru BK</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <h5>Nama</h5>
                    <div class="menu-dropdown">
                        <a href="RekapData.html" class="btn">Rekap Data</a>
                        <div class="dropdown-submenu">
                            <a href="kelas7.html" class="d-block">Kelas 7</a>
                            <a href="kelas8.html" class="d-block">Kelas 8</a>
                            <a href="kelas9.html" class="d-block">Kelas 9</a>
                        </div>
                    </div>
                    <a href="MateriKonselingBK.html" class="btn">Materi</a>
                    <a href="UploadMateri.html" class="btn">Upload Materi</a>
                    <a href="KeluhanBK.html" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="{{ asset('Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">

                    <!-- Deskripsi Masalah -->
                    <div class="form-group mt-4">
                        <label for="deskripsiMasalah">Deskripsi Masalah:</label>
                        <textarea id="deskripsiMasalah" class="form-control" rows="15" readonly></textarea>
                    </div>

                    <!-- Tombol Selanjutnya -->
                    <div class="form-group mt-4 d-flex justify-content-end">
                        <button type="button" class="btn btn-save" onclick="nextPage()">Kembali</button>
                    </div>
                </div>
            </div>

            <script>
                // Ambil deskripsi masalah dari localStorage dan tampilkan di textarea
                document.addEventListener("DOMContentLoaded", () => {
                    const deskripsi = localStorage.getItem("deskripsiMasalah");
                    if (deskripsi) {
                        document.getElementById("deskripsiMasalah").value = deskripsi;
                    } else {
                        document.getElementById("deskripsiMasalah").value = "Tidak ada deskripsi masalah yang tersedia.";
                    }
                });

                // Fungsi untuk tombol selanjutnya
                function nextPage() {
                    // Arahkan ke halaman berikutnya
                    window.location.href = "riwayatKonseling.html";
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
