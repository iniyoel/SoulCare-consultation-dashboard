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
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="Resource/Logo.png" alt="Logo" style="width: 15%; margin-right: 10px;">
            <p style="font-weight: 500; font-size: 35px;">SoulCare</p>
        </div>
        <div>
            <a href="LandingPage.html" class="mr-5">Logout</a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <h1 style="font-weight: 600;">Konselor</h1>
                    <img src="Resource/profile.png" alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                    <h5>Nama Konselor</h5>
                    <p style="color: red;">Kelas</p>
                    <a href="JurnalKonseling.html" class="btn">Jurnal</a>
                    <a href="riwayatKonseling.html" class="btn">Riwayat</a>
                    <a href="materiKonseling.html" class="btn">Materi</a>
                    <a href="keluhanKonselor.html" class="btn">Keluhan</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 mb-3">
                <div class="content">
                    <img src="Resource/Rantai.png" class="spiral" alt="Jilid Spiral">
                    <h2 style="font-weight: 700;">Materi Konseling</h2>
            
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
                    <div class="d-flex justify-content-end">
                        <!-- <button type="button" class="btn btn-save" onclick="goBack()">Kembali</button> -->
                        <button type="button" class="btn btn-save" onclick="nextPage()">Selanjutnya</button>
                    </div>
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
