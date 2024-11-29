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
                    <img src="{{ asset('Resource/Rantai.png') }}" class="spiral" alt="Jilid Spiral">
                    <h2 class="judul-konseling">
                        <img src="{{ asset('Resource/garis3BK.png') }}" alt="Garis3BK" class="garis">
                        Keluhan Konselor
                    </h2>
                    <div class="row">
                        <!-- Diagram Pie -->
                        <div class="col-md-5">
                            <div class="chart-container mt-4">
                                <canvas id="pieChart" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <!-- Menu Pencarian -->
                        <div class="col-md-7 d-flex justify-content-end align-items-end">
                            <input type="text" class="form-control" placeholder="Search" style="max-width: 300px; margin-right: 10px;">
                        </div>
                    </div>

                    <!-- Kotak Detail Keluhan -->
                    <div class="detail-box mt-4 p-3" style="border: 1px solid #000000; border-radius: 10px; background-color: #f9f9f9;">
                        <div class="d-flex align-items-center">
                            <img src="Resource/profile.png" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                            <div style="display: flex; align-items: center;">
                                <h5 style="margin: 0; margin-right: 10px;">Nama</h5>
                                <small style="color: grey;">(dd/mm/yyyy)</small>
                            </div>
                        </div>
                        <p style="margin-top: 10px; font-weight: bold; color: #007BFF;">(Jenis Masalah)</p>
                        <p>(Isi Keluhan)</p>
                    </div>
                </div>
            </div>


    <!-- Script Chart.js -->
    <script>
        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Kesulitan Menjaga Rahasia', 'Lainnya', 'Kendala Waktu', 'Dijauhi Teman', 'Kesulitan Menanggapi Cerita'],
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
