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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 95vh;
            margin: 0;
        }
        h1{
            font-size: 50px;
        }
        .logo {
            max-width: 30%;
        }

        .option-card {
            background-color: #ffffff;
            width: auto;
            height: 125%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            aspect-ratio: 1/1;
        }

        .option-card:hover {
            transform: scale(1.05);
        }

        .option-card img {
            width: auto;
            height: 100px;
            margin-bottom: 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container text-center m-auto">
        <img src="{{ asset('Resource/Logo.png') }}" alt="SoulCare Logo" class="logo mb-3">

        <!-- Title -->
        <h1 class="font-weight-bold">Selamat Datang!</h1>

        <!-- Options -->
        <div class="row justify-content-center mt-5">
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/login') }}">
                        <div class="option-card">
                            <img src="{{ asset('Resource/Konselor.png') }}" alt="Konselor Sebaya">
                            <h5>Konselor Sebaya</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/login') }}">
                        <div class="option-card">
                            <img src="{{ asset('Resource/GuruBK.png') }}" alt="Guru BK">
                            <h5>Guru BK</h5>
                        </div>
                    </a>
                </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
