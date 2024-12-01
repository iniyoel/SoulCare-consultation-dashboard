<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024, initial-scale=1.0, user-scalable=no">
    <title>SoulCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Plugin datalabels -->
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
        body {
            background-color: #e2f0f9;
            font-family: "poppins"; /* Gunakan font default untuk body */
        }
        .navbar-custom {
            background: linear-gradient(to bottom, #BED7DD 0%, #4B979F 100%);
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
            gap: 25px;
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

    </style>
</head>

<body>
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset('Resource/Logo.png') }}" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px;  font-family: 'LazyDog';">SoulCare</p>
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
                    <img src="{{ url('/Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">
                    <h2 class="judul-konseling">
                        <img src="{{ asset('Resource/garis3BK.png') }}" alt="Garis3BK" class="garis" style="font-weight: 700;">
                        Rekap Data Konseling
                    </h2>
                    <h4 style="font-weight: 700;">Persebaran Masalah Siswa Secara Keseluruhan</h4>

                    <form action="{{ route('RekapKelas7') }}" method="GET">
                    <div class="dropdowns">
        <div>
            <label for="year">Tahun:</label>
            <select id="year" name="year" class="form-select">
                <option value="2024" {{ $year == 2024 ? 'selected' : '' }}>2024</option>
                <option value="2025" {{ $year == 2025 ? 'selected' : '' }}>2025</option>
                <option value="2026" {{ $year == 2026 ? 'selected' : '' }}>2026</option>
            </select>
        </div>
        <div>
            <label for="month">Bulan:</label>
            <select id="month" name="month" class="form-select">
                <option value="1" {{ $month == 1 ? 'selected' : '' }}>Januari</option>
                <option value="2" {{ $month == 2 ? 'selected' : '' }}>Februari</option>
                <option value="3" {{ $month == 3 ? 'selected' : '' }}>Maret</option>
                <option value="4" {{ $month == 4 ? 'selected' : '' }}>April</option>
                <option value="5" {{ $month == 5 ? 'selected' : '' }}>Mei</option>
                <option value="6" {{ $month == 6 ? 'selected' : '' }}>Juni</option>
                <option value="7" {{ $month == 7 ? 'selected' : '' }}>Juli</option>
                <option value="8" {{ $month == 8 ? 'selected' : '' }}>Agustus</option>
                <option value="9" {{ $month == 9 ? 'selected' : '' }}>September</option>
                <option value="10" {{ $month == 10 ? 'selected' : '' }}>Oktober</option>
                <option value="11" {{ $month == 11 ? 'selected' : '' }}>November</option>
                <option value="12" {{ $month == 12 ? 'selected' : '' }}>Desember</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" style="border-radius: 17px; background-color: #93AF4C; border: none;">Tampilkan</button>
    </div>
                    <div class="chart-container mt-4">
                        <canvas id="pieChart" width="400vh" height="400vh"></canvas>
                    </div>


                    <!-- Tabel -->
                    <div class="table-container mt-4">

                        <!-- Dropdown Kelas dan Search -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-group">
                                <label for="kelasDropdown" class="font-weight-bold">Kelas</label>
                                <select id="kelasDropdown" class="form-control" style="width: 150px; display: inline-block;">
                                    <option value="8A" {{ $kelas == '8A' ? 'selected' : '' }}>8A</option>
                                    <option value="8B" {{ $kelas == '8B' ? 'selected' : '' }}>8B</option>
                                    <option value="8C" {{ $kelas == '8C' ? 'selected' : '' }}>8C</option>
                                    <option value="8D" {{ $kelas == '8D' ? 'selected' : '' }}>8D</option>
                                    <option value="8E" {{ $kelas == '8E' ? 'selected' : '' }}>8E</option>
                                    <option value="8F" {{ $kelas == '8F' ? 'selected' : '' }}>8F</option>
                                    <option value="8G" {{ $kelas == '8G' ? 'selected' : '' }}>8G</option>
                                    <option value="8H" {{ $kelas == '8H' ? 'selected' : '' }}>8H</option>
                                    <option value="8I" {{ $kelas == '8I' ? 'selected' : '' }}>8I</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Tampilkan</button>
                            </div>
                            <div class="form-group">
                                <label for="searchInput" class="font-weight-bold"></label>
                                <div class="input-group" style="width: 250px;">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">🔍</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Konselor</th>
                                    <th>Nama Klien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jenis Masalah</th>
                                    <th>Deskripsi</th>
                                    <th>Rujukan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluhan as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                                        <td>{{ $item->counselor->name ?? 'Tidak ada' }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->student->gender }}</td>
                                        <td>
                                                {{ $item->issue_type }}
                                        </td>
                                        <td><a href="{{ route('showProblem', ['id' => $item->id]) }}" class="btn btn-info btn-sm"">Deskripsi</a></td>
                                        <td>{{ $item->referral}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script>
        // Ambil data dari PHP dan buat chart
        const labels = @json($labels);
        const data = @json($data);

        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Persebaran Masalah',
                    data: data,
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
                        left: 60,
                        right: 50
                    }
                }
            },
            plugins: [ChartDataLabels]
        });

        // Fungsi untuk memperbarui grafik ketika memilih tahun atau bulan baru
        function updateChart() {
            const year = document.getElementById('year').value;
            const month = document.getElementById('month').value;

            // Kirim request untuk mengambil data baru dan memperbarui chart
            window.location.href = `/rekap-data?year=${year}&month=${month}`;
        }
    </script>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
