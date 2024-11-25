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
    <div class="text-center">
        <img src="Resource/Logo.png" alt="SoulCare Logo" class="logo">
        <div class="login-card">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
