<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - AIR MATA KAKI</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4fbff;
            color: #333;
        }

        nav {
            background: #087ea4;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #087ea4, #35c2e8);
            color: white;
            padding: 40px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            background: white;
            color: #087ea4;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .section {
            padding: 60px 8%;
        }

        .section h2 {
            text-align: center;
            color: #087ea4;
            margin-bottom: 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .card h3 {
            color: #087ea4;
            margin-bottom: 15px;
        }

        footer {
            background: #075c78;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 35px;
            }
        }
    </style>
</head>

<body>

    <nav>

        <div class="logo">
            💧 AKUAZONE
        </div>

        <ul>

            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('produk') }}">
                    Produk
                </a>
            </li>

            <li>
                <a href="{{ route('tentang') }}">
                    Tentang
                </a>
            </li>

            <li>
                <a href="{{ route('kontak') }}">
                    Kontak
                </a>
            </li>

        </ul>

    </nav>


    @yield('content')


    <footer>

        <p>
            &copy; {{ date('Y') }} Segar Jaya
            - UMKM Air Isi Ulang
        </p>

    </footer>

</body>

</html>