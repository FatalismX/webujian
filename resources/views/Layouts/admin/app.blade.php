<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2022/09/11/06/01/apple-7446229_960_720.png" -->
        <!-- type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body id="body-pd">

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' style="color: #1e2855;" id="header-toggle"></i> </div>
        <h4>Admin</h4>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #1e2855;">
        <nav class="nav">
            <div>
            <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link {{ $title == 'Dashboard' ? 'active' : '' }}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">UTAMA</span>
                    </a>
                    <a href="{{ route('ujian') }}" class="nav_link {{ $title == 'Ujian' ? 'active' : '' }}">
                        <i class='bx bx-book-open'></i>
                        <span class="nav_name">SOAL</span>
                    </a>
                    <a href="{{ route('peserta') }}" class="nav_link {{ $title == 'Peserta' ? 'active' : '' }}">
                        <i class='bx bx-face'></i>
                        <span class="nav_name">PESERTA</span>
                </a>
                </div>
            </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">Log
                    Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 p-4">
        @yield('content')
    </div>
    <!--Container Main end-->



    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
