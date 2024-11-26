<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Plugin datalabels -->
    <style>
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

        #pieChart {
            max-width: 100%;
            margin: 0 auto;
        }
        /* Header Tabel */
    .table-container .table thead {
        background-color: #2169AC; /* Warna biru */
        color: white; /* Teks putih */
    }

    /* Baris Tabel */
    .table-container .table tbody tr:nth-child(even) {
        background-color: #EAF3FA; /* Biru muda untuk baris genap */
    }

    .table-container .table tbody tr:nth-child(odd) {
        background-color: white; /* Putih untuk baris ganjil */
    }

    /* Tombol "Detail" */
    .table-container .table tbody td a.btn-info {
        background-color: #2169AC; /* Warna biru */
        color: white;
        border: none;
    }

    .table-container .table tbody td a.btn-info:hover {
        background-color: #194F7D; /* Warna lebih gelap saat hover */
    }

    /* Label Warna untuk Jenis Masalah */
    .label {
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: bold;
        color: white;
        display: inline-block;
    }

    .label.karir {
        background-color: #FFD700; /* Emas untuk Karir */
    }

    .label.belajar {
        background-color: #4BC0C0; /* Biru Muda untuk Belajar */
    }

    .label.pribadi {
        background-color: #FF6384; /* Merah untuk Pribadi */
    }

    .label.sosial {
        background-color: #36A2EB; /* Biru untuk Sosial */
    }

    .label.lainnya {
        background-color: #9966FF; /* Ungu untuk Lainnya */
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
                        <a href="{{ url('/Rekap-Data') }}" class="btn">Rekap Data</a>
                        <div class="dropdown-submenu">
                            <a href="{{ url('/Rekap-Data/Kelas7') }}" class="d-block">Kelas 7</a>
                            <a href="{{ url('/Rekap-Data/Kelas8') }}" class="d-block">Kelas 8</a>
                            <a href="{{ url('/Rekap-Data/Kelas9') }}" class="d-block">Kelas 9</a>
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
                    <h2 style="font-weight: 700;">Rekap Data Konseling</h2>
                    <h4 style="font-weight: 700;">Persebaran Masalah Siswa Secara Keseluruhan</h4>

                    <div class="dropdowns">
                        <div>
                            <label for="year">Tahun:</label>
                            <select id="year" class="form-select">
                                <option>2024</option>
                                <option>2023</option>
                                <option>2022</option>
                            </select>
                        </div>
                        <div>
                            <label for="month">Bulan:</label>
                            <select id="month" class="form-select">
                                <option>November</option>
                                <option>Oktober</option>
                                <option>September</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-container mt-4">
                        <canvas id="pieChart" width="600" height="600"></canvas>

                    </div>


                    <!-- Tabel -->
                    <div class="table-container mt-4">

                        <!-- Dropdown Kelas dan Search -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-group">
                                <label for="kelasDropdown" class="font-weight-bold">Kelas</label>
                                <select id="kelasDropdown" class="form-control" style="width: 150px; display: inline-block;">
                                    <option>7A</option>
                                    <option>8B</option>
                                    <option>9A</option>
                                </select>
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
                                <tr>
                                    <td>1</td>
                                    <td>12/02/2025</td>
                                    <td>Niall Horan</td>
                                    <td>Niall Horan</td>
                                    <td>L</td>
                                    <td><span class="label karir">Karir</span></td>
                                    <td><a href="DetailKonselingBK.html" class="btn btn-info btn-sm">Detail</a></td>
                                    <td>Ya</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>13/02/2024</td>
                                    <td>Lady Gaga</td>
                                    <td>Lady Gaga</td>
                                    <td>P</td>
                                    <td><span class="label belajar">Belajar</span></td>
                                    <td><a href="DetailKonselingBK.html" class="btn btn-info btn-sm">Detail</a></td>
                                    <td>Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script>
        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Sosial', 'Karir', 'Pribadi', 'Belajar', 'Lainnya'],
                datasets: [{
                    label: 'Persebaran Masalah',
                    data: [20, 30, 15, 25, 10],
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
