<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCare</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e2f0f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        /* Gambar Awan di atas */
        .cloud {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40vh;
            object-fit: cover;
            z-index: -1;
        }

        /* Gambar Rumput di bawah */
        .grass {
            position: absolute;
            bottom: -20%;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 30%;
            object-fit: cover;
            z-index: -1;
        }

        .logo {
            max-width: 70%;
            margin-bottom: 20px;
        }

        .login-card {
            background-color: white;
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            z-index: 1;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #000;
            border-radius: 0;
            padding-left: 0;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .btn-login {
            background-color: #0A8979;
            color: white;
            font-size: 16px;
            border-radius: 20px;
            padding: 10px 30px;
            border: none;
        }

        .btn-login:hover {
            background-color: #236958;
            font-weight: 500;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Gambar Awan -->
    <img src="{{ asset('Resource/Cloud.png') }}" alt="Awan" class="cloud">

    <div class="text-center">
        <img src="{{ asset('Resource/Logo.png') }}" alt="SoulCare Logo" class="logo">
        <div class="login-card">
            <!-- FORM LOGIN -->
            <form method="POST" action="{{ route('updatePassword') }}">
                @csrf
                <h2 class="mb-5">Buat Password Baru</h2>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Ubah Nama" required>
                </div>
                <!-- Input New Password -->
                <div class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="Password Baru" required>
                </div>
                <!-- Confirm Password -->
                <div class="form-group">
                    <input type="password" name="confirm_new_password" class="form-control" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="btn btn-login">Ubah Sekarang</button>
            </form>
        </div>
    </div>

    <!-- Gambar Rumput -->
    <img src="{{ asset('Resource/Grass.png') }}" alt="Rumput" class="grass">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
