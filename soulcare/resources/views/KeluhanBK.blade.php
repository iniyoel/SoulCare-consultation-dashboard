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
            font-family: "poppins";
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
        /* Garis dekoratif di kiri */
        .garis {
            width: 55px;
            height: auto;
            margin-right: 10px;
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

        .sidebar .btn:hover {
            background-color: #6A7F35;
            font-weight: 500;
            text-decoration: none;
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
            max-width: 4%;
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

        #pieChart {
            max-width: 100%;
            margin: 0 auto;
        }
        .chart-container {
        margin-left: 0; /* Geser ke kiri */
        max-width: 100%;
        }

        .form-control {
            border-radius: 5px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center; /* Rata tengah teks tabel */
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
                    <h2 class="judul-konseling">
                        <img src="{{ asset('Resource/garis3BK.png') }}" alt="Garis3BK" class="garis">
                        Keluhan Konselor
                    </h2>
                    <div class="row">
                        <!-- Diagram Pie -->
                        <div class="col-md-5">
                            <div class="chart-container mt-4">
                                <canvas id="pieChart" width="350" height="350"></canvas>
                            </div>
                        </div>
                        <!-- Menu Pencarian -->
                        <!-- <div class="col-md-7 d-flex justify-content-end align-items-end">
                            <input type="text" class="form-control" placeholder="Search" style="max-width: 300px; margin-right: 10px;">
                        </div> -->
                    </div>

                    <!-- Kotak Detail Keluhan -->
                    @foreach($keluhans as $keluhan)
                    <div class="detail-box mt-4 p-3" style="border: 1px solid #000000; border-radius: 10px; background-color: #f9f9f9;">
                            <div class="d-flex align-items-center">
                                <img src="Resource/profile.png" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                                <div style="display: flex; align-items: center;">
                                    <h5 style="margin: 0; margin-right: 10px;">{{ $keluhan->user->name }}</h5>
                                    <small style="color: grey;">({{ $keluhan->tanggal_konseling }})</small>
                                </div>
                            </div>
                            <p style="margin-top: 10px; font-weight: bold; color: #007BFF;">{{ $keluhan->jenis_masalah }}</p>
                            <p>{{ $keluhan->deskripsi_masalah }}</p>
                    </div>
                    @endforeach
                </div>
            </div>


    <!-- Script Chart.js -->
    <script>
        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: @json($labels), // Menggunakan data labels dari controller
                datasets: [{
                    label: 'Persebaran Masalah',
                    data: @json($data), // Menggunakan data count dari controller
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    datalabels: {
                        color: '#000',
                        font: {
                            size: 12,
                            weight: 'bold'
                        },
                        formatter: (value, context) => {
                            const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            const percentage = ((value / total) * 100).toFixed(2);
                            return `${context.chart.data.labels[context.dataIndex]}\n${percentage}%`;
                        },
                        anchor: 'end',
                        align: 'end',
                        offset: 10,
                        clip: false
                    }
                },
                layout: {
                    padding: {
                        top: 50,
                        bottom: 50,
                        left: 50,
                        right: 50
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
