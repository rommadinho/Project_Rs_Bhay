<!DOCTYPE html>
<html>
<head>
    <title>SINDIKAT</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('/storage/img/Login_bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .login-container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            color: white;
            width: 300px;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .form-control {
            background: #333;
            border: none;
            color: white;
        }
        .form-control:focus {
            background: #444;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-facebook {
            background-color: #3b5998;
            border: none;
        }
        .btn-facebook:hover {
            background-color: #2d4373;
        }
        .btn-google {
            background-color: #db4437;
            border: none;
        }
        .btn-google:hover {
            background-color: #c23321;
        }
        .form-check-label {
            color: white;
        }
        .forgot-password {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .signup-link {
            color: #007bff;
            text-decoration: none;
        }
        .signup-link:hover {
            text-decoration: underline;
        }
        .logo {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img alt="Logo" class="logo" height="100" src="{{ asset('storage/img/LOGO GEDANG TOGA.png') }}" width="100"/>
            <div>
                <h4>
                    SINDIKAT
                </h4>
                <label class="form-label" for="Sistem Informasi Pendidikan dan pelatihan Tenaga Kerja Rs.bhayangkara">(Sistem Informasi Pendidikan dan pelatihan Tenaga Kerja Rs.bhayangkara) </label>
            </div>
            <h3>Login</h3>
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="username">Username or email *</label>
                    <input class="form-control" id="username" name="username" required="" type="text"/> <!-- Tambahkan name -->
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password *</label>
                    <input class="form-control" id="password" name="password" required="" type="password"/> <!-- Tambahkan name -->
                </div>
                <a href="{{ route('random.login') }}" class="btn btn-primary">Login</a>
            </form>
        </div>
    </div>
</body>
</html>
