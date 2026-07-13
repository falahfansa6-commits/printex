<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
           <img src="{{ asset('img/printexlogo.png') }}" class="logo-img" alt="printex">
        </div>

        <ul>
            <!-- Tambahkan class="active" secara dinamis sesuai route Laravel Anda jika diperlukan -->
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa-solid fa-house"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">
                <a href="{{ route('admin.about') }}">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Tentang</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.layanan') ? 'active' : '' }}">
                <a href="{{ route('admin.layanan') }}">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Layanan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </li>
        </ul>

        <form action="{{ route('logout') }}" method="POST" class="logout">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </form>
    </aside>

    <!-- Content -->
    <main class="content">
        <div class="topbar">
            <h1>Halo, Admin 👋</h1>
        </div>

        <div class="main-body">
            @yield('content')
        </div>
    </main>

</div>

</body>
</html>