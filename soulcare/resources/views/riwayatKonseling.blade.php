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
            font-family: "poppins";
        }

        .navbar-custom {
            background: linear-gradient(90deg, #C6D899 0%, #84B297 65%);
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
            background-color: #406882;
            border: none;
            border-radius: 20px;
            text-align: center;
            padding-left: 15px;
        }

        .sidebar .btn:hover {
            background-color: #254c66;
            font-weight: 500;
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

        table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #406882;
            color: white;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 12px;
            color: white;
        }

        .badge.karir {
            background-color: #ffcc00;
        }

        .badge.belajar {
            background-color: #33cc99;
        }

        /* Styling for Garis3 Image */
        .garis {
            width: 55px;
            height: auto;
            margin-right: 10px;
        }

        /* Adjust navbar layout to place the logout icon to the right of the text */
        .navbar-custom .logout-container {
            display: flex;
            align-items: center;

        }

        .navbar-custom .logout-container a {
            margin-left: 10px;

        }

    </style>
</head>

<body>
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset('Resource/Logo.png') }}" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px;">SoulCare</p>
        </div>
        <div class="logout-container">
            <a href="{{ url('/') }}" class="mr-5">
                Logout <img src="{{ asset('Resource/Logout.png') }}" alt="Logout Icon" style="width: 45px; margin-left: 10px;">
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1 style="font-weight: 600;">Konselor</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <h5>Nama Konselor</h5>
                    <p style="color: red;">Kelas</p>
                    <a href="{{ url('/Jurnal-Konseling') }}" class="btn">Jurnal</a>
                    <a href="{{ url('/Riwayat-Konseling') }}" class="btn">Riwayat</a>
                    <a href="{{ url('/Materi-Konseling') }}" class="btn">Materi</a>
                    <a href="{{ url('/Keluhan-Konseling') }}" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="{{ asset('Resource/Rantai.svg') }}" class="spiral" alt="Jilid Spiral">
                    <h2 style="font-weight: 700; display: flex; align-items: center;">
                        <img src="{{ asset('Resource/garis3.png') }}" alt="Garis3" class="garis">
                        Riwayat Konseling
                    </h2>

                    <!-- Tabel Riwayat Konseling -->
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jenis Masalah</th>
                                    <th>Deskripsi</th>
                                    <th>Rujuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12/02/2025</td>
                                    <td>Niall Horan</td>
                                    <td>L</td>
                                    <td><span class="badge karir">Karir</span></td>
                                    <td><a href="{{ url('/Detail-Konseling') }}" class="text-danger">Detail</a></td>
                                    <td>Ya</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12/02/2024</td>
                                    <td>Lady Gaga</td>
                                    <td>P</td>
                                    <td><span class="badge belajar">Belajar</span></td>
                                    <td><a href="{{ url('/Detail-Konseling') }}" class="text-danger">Detail</a></td>
                                    <td>Tidak</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12/02/2024</td>
                                    <td>Lady Gaga</td>
                                    <td>P</td>
                                    <td><span class="badge belajar">Belajar</span></td>
                                    <td><a href="{{ url('/Detail-Konseling') }}" class="text-danger">Detail</a></td>
                                    <td>Tidak</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>12/02/2024</td>
                                    <td>Lady Gaga</td>
                                    <td>P</td>
                                    <td><span class="badge belajar">Belajar</span></td>
                                    <td><a href="{{ url('/Detail-Konseling') }}" class="text-danger">Detail</a></td>
                                    <td>Tidak</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>12/02/2024</td>
                                    <td>Lady Gaga</td>
                                    <td>P</td>
                                    <td><span class="badge belajar">Belajar</span></td>
                                    <td><a href="{{ url('/Detail-Konseling') }}" class="text-danger">Detail</a></td>
                                    <td>Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tombol Selanjutnya -->
                    <div class="form-group mt-4 d-flex justify-content-end">
                        <button type="button" class="btn btn-save">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
