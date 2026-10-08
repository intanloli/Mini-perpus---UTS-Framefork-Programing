<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Perpus - Sistem Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --pink: #d63384;
            --pink-dark: #b02a6b;
            --pink-soft: #fde7f1;
            --pink-bg: #fff7fa;
            --pink-text: #880e4f;
        }

        body {
            background-color: var(--pink-bg);
        }

        /* Navbar */
        .navbar-pink {
            background: linear-gradient(90deg, var(--pink-dark), var(--pink));
            box-shadow: 0 2px 8px rgba(176, 42, 107, .25);
        }

        .navbar-pink .nav-pill {
            color: #fff;
            border-radius: 50rem;
            padding: .4rem 1rem;
            margin-left: .4rem;
            font-weight: 500;
            transition: background .15s;
        }

        .navbar-pink .nav-pill:hover {
            background: rgba(255, 255, 255, .2);
        }

        .navbar-pink .nav-pill.active {
            background: #fff;
            color: var(--pink-dark);
        }

        /* Judul halaman */
        .page-title {
            color: var(--pink-text);
            font-weight: 700;
        }

        /* Tombol utama */
        .btn-primary,
        .btn-success {
            --bs-btn-bg: var(--pink);
            --bs-btn-border-color: var(--pink);
            --bs-btn-hover-bg: var(--pink-dark);
            --bs-btn-hover-border-color: var(--pink-dark);
            --bs-btn-active-bg: #9c245f;
            --bs-btn-active-border-color: #9c245f;
        }

        /* Kartu ringkasan */
        .stat-card {
            border: 0;
            border-left: 5px solid var(--pink);
            border-radius: .75rem;
        }

        .stat-card .stat-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--pink-soft);
            color: var(--pink);
            font-size: 1.4rem;
        }

        .stat-card .stat-number {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--pink-text);
            line-height: 1;
        }

        /* Tabel */
        .card-table {
            border: 0;
            border-radius: .75rem;
            overflow: hidden;
        }

        .table thead th {
            background-color: var(--pink-soft);
            color: var(--pink-text);
            font-weight: 600;
            border-bottom: 2px solid #f4b6d2;
            white-space: nowrap;
        }

        .table tbody tr:hover {
            background-color: #fff0f6;
        }

        /* Badge */
        .badge-kategori {
            background-color: #f8bbd9;
            color: var(--pink-text);
            font-weight: 600;
        }

        /* Fokus form */
        .form-control:focus,
        .form-select:focus {
            border-color: var(--pink);
            box-shadow: 0 0 0 .25rem rgba(214, 51, 132, .25);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark navbar-pink mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('books.index') }}">
                <i class="bi bi-book-half me-1"></i> Mini-Perpus
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <div class="navbar-nav ms-auto py-2 py-md-0">
                    <a class="nav-link nav-pill {{ request()->routeIs('books.*') ? 'active' : '' }}"
                        href="{{ route('books.index') }}">
                        <i class="bi bi-journal-bookmark me-1"></i> Buku
                    </a>
                    <a class="nav-link nav-pill {{ request()->routeIs('categories.*') ? 'active' : '' }}"
                        href="{{ route('categories.index') }}">
                        <i class="bi bi-tags me-1"></i> Kategori
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @yield('content')
    </div>

    <footer class="text-center text-muted small pb-4">
        Mini-Perpus &middot; UTS Framework Programming
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>