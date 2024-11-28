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

        /* Garis dekoratif di kiri */
        .garis {
            width: 55px;
            height: auto;
            margin-right: 10px;
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
            <a href="{{ url('/') }}" class="mr-5">
                Logout <img src="{{ asset('Resource/Logout.png') }}" alt="Logout Icon">
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1>Konselor</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <h5>Nama Konselor</h5>
                    <p style="color: red;">Kelas</p>
                    <a href="{{ url('/Jurnal-Konseling') }}" class="btn">Jurnal</a>
                    <a href="{{ url('/Riwayat-Konseling') }}" class="btn">Riwayat</a>
                    <a href="{{ url('/Materi-Konseling') }}" class="btn">Materi</a>
                    <a href="{{ url('/Keluhan-Konseling') }}" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <!-- Rantai Spiral Image -->
                    <img src="{{ asset('Resource/Rantai.svg') }}" class="spiral" alt="Jilid Spiral">

                    <!-- Title with Garis3 Image -->
                    <h2 class="judul-konseling">
                        <img src="{{ asset('Resource/garis3.png') }}" alt="Garis3" class="garis">
                        Jurnal Konseling
                    </h2>

                    <!-- Form Elements -->
                    <form>
                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="namaSiswa" class="mr-3" style="flex: 1; font-weight: bold;">Nama Siswa</label>
                            <div style="flex: 2;">
                                <input type="text" id="namaSiswa" class="form-control" list="namaSiswaList" placeholder="Ketik atau pilih nama siswa" required>
                                <datalist id="namaSiswaList">
                                    @foreach ($students as $student)
                                        <option value="{{ $student->nama }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="tanggalKonseling" class="mr-3" style="flex: 1; font-weight: bold;">Tanggal Konseling</label>
                            <div style="flex: 2;">
                                <input type="date" id="tanggalKonseling" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="jenisKelamin" class="mr-3" style="flex: 1; font-weight: bold;">Jenis Kelamin</label>
                            <div style="flex: 2;">
                                <select id="jenisKelamin" class="form-control" required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="jenisMasalah" class="mr-3" style="flex: 1; font-weight: bold;">Jenis Masalah</label>
                            <div style="flex: 2;">
                                <select id="jenisMasalah" class="form-control" required>
                                    <option value="" disabled selected>Pilih Jenis Masalah</option>
                                    <option value="Social">Social</option>
                                    <option value="Karir">Karir</option>
                                    <option value="Pribadi">Pribadi</option>
                                    <option value="Belajar">Belajar</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="deskripsiMasalah" class="mr-3" style="flex: 1; font-weight: bold;">Deskripsi Masalah</label>
                            <div style="flex: 2;">
                                <textarea id="deskripsiMasalah" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="rujukan" class="mr-3" style="flex: 1; font-weight: bold;">Rujukan</label>
                            <div style="flex: 2;">
                                <select id="rujukan" class="form-control" required>
                                    <option value="" disabled selected>Pilih Rujukan</option>
                                    <option value="Iya">Iya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-save">Simpan</button>
                        </div>
                    </form>
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
