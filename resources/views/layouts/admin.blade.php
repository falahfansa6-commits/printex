<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="wrapper">

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="logo">

           <img src="{{ asset('img/printexlogo.png') }}" class="logo-img" alt="printex">
        </div>

        <ul>

            <li>
                <a href="{{ route('admin.dashboard') }}">Beranda</a>
            </li>

            <li>
                <a href="{{ route('admin.about') }}">Tentang</a>
            </li>

            <li>
                <a href="{{ route('admin.layanan') }}">Layanan</a>
            </li>

            <li>
                <a href="#">Kontak</a>
            </li>

        </ul>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button class="logout">

                Logout

            </button>

        </form>

    </aside>



    <!-- Content -->

    <main class="content">

        <div class="topbar">

            <h1>Halo, Admin 👋</h1>

        </div>

        @yield('content')

    </main>

</div>

</body>

</html>