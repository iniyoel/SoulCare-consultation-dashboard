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
            font-family: "Poppins", sans-serif;
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
    </style>
</head>

<body>
    <!-- Navbar -->
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
                    <h1>Konselor</h1>
                    <img src="{{ asset('Resource/profile.png') }}" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <h5>{{ $user->name }}</h5>
                    <p style="color: red;">{{ $className }}</p>
                    <a href="{{ url('/Jurnal-Konseling') }}" class="btn">Jurnal</a>
                    <a href="{{ url('/Riwayat-Konseling') }}" class="btn">Riwayat</a>
                    <a href="{{ url('/Materi-Konseling') }}" class="btn">Materi</a>
                    <a href="{{ url('/Keluhan-Konseling') }}" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="{{ asset('Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">
                    <h2 style="font-weight: 700;">Jurnal Konseling</h2>
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
