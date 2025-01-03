<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spor Yönetimi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #fd9d0d;
            --secondary-color: #efd866;
            --accent-color: #0e0e0e;
            --background-color: #ffffff;
            --text-color: #333;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .navbar {
            background-color: var(--primary-color);

        }

        .navbar-brand, .nav-link {
            color: #0e0e0e !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.85)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #0e0e0e;
            padding: 25px 0;
            text-align: center;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: var(--accent-color);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #27ae60;
        }

        footer {
            background-color: var(--secondary-color);
            color: #0e0e0e;
            padding: 30px 0;
        }

        footer a {
            color: #0e0e0e;
        }

        footer a:hover {
            color: #0e0e0e;
            text-decoration: none;
        }
    </style>
</head>
<body>
@include('navbar')

<main>
    @yield('content')
</main>

<footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Hakkımızda</h5>
                <p>Spor Yönetimi, Türkiye'deki spor organizasyonları için kapsamlı çözümler sunar.</p>
            </div>
            <div class="col-md-4">
                <h5>Hızlı Bağlantılar</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Anasayfa</a></li>
                    <li><a href="/news">Haberler</a></li>
                    <li><a href="/lig2">Ligler</a></li>
                    <li><a href="/sporcular">Sporcular</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>İletişim</h5>
                <p>Email: info@sporyonetimi.com<br>
                    Tel: +90 (212) 555 1234</p>
                <div class="social-icons">
                    <a href="#" class="me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2024 Spor Yönetimi. Tüm hakları saklıdır. <a href="#">Gizlilik Politikası</a> | <a href="#">Kullanım
                    Şartları</a></p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

