<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiGawai - Aplikasi Kepegawaian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            background-color: #222; /* Background dark color */
            color: white;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .navbar-custom {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333; /* Dark background for navbar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo img {
            max-width: 100px; /* Set max-width for responsiveness */
            height: auto;
        }

        .auth-links {
            display: flex;
            gap: 15px;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-login {
            background-color: #ff5722; /* Change to a vibrant red-orange */
        }

        .btn-register {
            background-color: #4caf50; /* Change to a fresh green */
        }

        .auth-links a:hover {
            opacity: 0.8;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            margin-top: 100px; /* Adjusts space below navbar */
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            opacity: 0.8;
        }

        .logo-img {
            width: 200px; /* Menyesuaikan lebar logo */
            height: auto; /* Menjaga proporsi logo */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Navbar dengan Logo di Kiri & Login/Register di Kanan -->
    <div class="navbar-custom">
        <div class="logo">
            <img src="{{ asset('images/sigawai.png') }}" alt="SiGawai">
        </div>
        <div class="auth-links">
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-register">Register</a>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="logo">
        <img src="{{ asset('images/sigawai.png') }}" alt="SiGawai">
    </div>
    <div class="container">
        <h1>Welcome to SiGawai</h1>
        <p>Aplikasi Database Kepegawaian</p>
    </div>

</body>
</html>
