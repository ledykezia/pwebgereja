<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website GBI</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: radial-gradient(circle at center, #0f2027, #203a43, #2c5364);
            color: white;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #00000080;
            padding: 1rem 2rem;
            font-weight: bold;
        }

        .navbar .nav-left,
        .navbar .nav-right {
            display: flex;
            gap: 1.5rem;
        }

        .navbar a,
        .navbar form button {
            color: white;
            text-decoration: none;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .navbar a:hover,
        .navbar form button:hover {
            text-decoration: underline;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
        }

        input, button {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 5px;
        }

        input {
            background: #fff;
            color: #000;
        }

        button {
            background: #3490dc;
            color: white;
            font-weight: bold;
        }

        .center-logo {
            text-align: center;
            margin-top: 50px;
        }

        .center-logo img {
            width: 200px;
        }

        .center-logo h1 {
            font-size: 32px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
    <div class="nav-left">
        <a href="/">Home</a>
        <a href="/organisasi">Organisasi</a>
        <a href="{{ url('/warta-jemaat') }}">Warta Jemaat</a>
        <a href="{{ url('/berita') }}">Berita</a>
        <a href="{{ url('/hubungi') }}">Hubungi</a>
    </div>
</div>



           
            <a href="/jadwal">Jadwal</a>
        </div>

        <div class="nav-right">
            @auth
                <a href="/dashboard">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </div>

    {{-- Konten Halaman --}}
    @yield('content')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper Config -->
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            effect: "slide",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>
</html>