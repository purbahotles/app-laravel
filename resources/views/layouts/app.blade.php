<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar bg-dark text-white" style="width: 200px; min-height: 100vh;">
            <h3 class="text-center py-3">Menu</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/master-pengguna">Master Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="content p-4" style="flex-grow: 1;">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
