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
            src: url('assets/fonts/Lazydog.woff2') format('woff2'),
                 url('assets/fonts/Lazydog.woff') format('woff'),
                 url('assets/fonts/Lazydog.eot') format('eot');
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

        /* Navbar custom */
        .navbar-custom {
            background: linear-gradient(to bottom, #C6D899 0%, #84B297 65%);
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
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the items horizontally */
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

        /* Garis dekoratif di kiri */
        .garis {
            width: 55px;
            height: auto;
            margin-right: 10px;
        }

        /* Edit icon styling */
        .edit-icon {
            margin-top: 10px;
            cursor: pointer;
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                    <h1>Konselor</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <!-- Gambar Edit (Ganti Password) di bawah logo profil -->
                    <a href="{{ url('/Ganti-Password') }}">
                        <img src="{{ asset('Resource/Edit.png') }}" alt="Edit Password" class="edit-icon mb-3" style="width: 20px; height:20px;">
                    </a>
                    <h5>{{ $user->name }}</h5>
                    <p style="color: red;">{{ $className }}</p>
                    <a href="{{ url('/Jurnal-Konseling') }}" class="btn">Jurnal</a>
                    <a href="{{ url('/Riwayat-Konseling') }}" class="btn">Riwayat</a>
                    <a href="{{ url('/Materi-Konseling') }}" class="btn">Materi</a>
                    <a href="{{ url('/Keluhan-Konseling') }}" class="btn">Keluhan</a>
                </div>
            </div>



            <!-- Content Area -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="{{ asset('Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">
                    <h2 style="font-weight: 700; display: flex; align-items: center;">
                        <img src="{{ asset('Resource/garis3.png') }}" alt="Garis3" class="garis">
                        Riwayat Konseling
                    </h2>
                    <!-- Form Jurnal Konseling -->
                    <form action="{{ route('storeCounselingRecord') }}" method="POST">
                        @csrf
                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="namaSiswa" class="mr-3" style="flex: 1; font-weight: bold;">Nama Siswa</label>
                            <div style="flex: 2;">
                                <select id="namaSiswa" name="student_id" class="form-control" required>
                                    <option value="" disabled selected>Pilih Nama Siswa</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="tanggalKonseling" class="mr-3" style="flex: 1; font-weight: bold;">Tanggal Konseling</label>
                            <div style="flex: 2;">
                                <input type="date" id="tanggalKonseling" name="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="jenisMasalah" class="mr-3" style="flex: 1; font-weight: bold;">Jenis Masalah</label>
                            <div style="flex: 2;">
                                <select id="jenisMasalah" name="issue_type" class="form-control" required>
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
                                <textarea id="deskripsiMasalah" name="issue_description" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group mt-4 d-flex align-items-center">
                            <label for="rujukan" class="mr-3" style="flex: 1; font-weight: bold;">Rujukan</label>
                            <div style="flex: 2;">
                                <select id="rujukan" name="referral" class="form-control" required>
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

</body>

</html>
