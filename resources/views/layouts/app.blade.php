<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'CV — Annisa Dinda Madinah')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Bootstrap 5 + Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{ --bg:#0f172a; --card:#0b1225; --accent:#6366f1; --muted:#94a3b8; }
    body{
      background-color: #1a2b3c;  
      color:#e5e7eb;
    }

    .glass{
      background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.03));
      border: 1px solid rgba(255,255,255,.08);
      backdrop-filter: blur(6px);
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0,0,0,.35);
    }

    a {
      text-decoration: none;
    }

    .navbar {
      perspective: 600px;
      overflow: hidden;
    }

    .navbar-nav {
      display: flex;
      gap: 2rem;
      animation: slideNav 3s ease-out forwards; 
      will-change: transform;
    }

    @keyframes slideNav {
      0% { transform: translateX(100%); }
      100% { transform: translateX(0); }
    }

    .navbar .nav-link {
      position: relative;
      display: inline-block;
      color: #cbd5e1 !important;
      transition: transform .25s ease, color .2s ease;
      transform: translateZ(0);
      opacity: 0;  
      animation: navIn .6s ease forwards;
    }

    .navbar .nav-link:hover {
      color: #fff !important;
    }

    .navbar .nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -6px;
      height: 2px;
      width: 0;
      background: var(--accent);
      transition: width .25s ease;
    }

    .navbar .nav-link:hover {
      transform: translateX(6px) translateZ(12px);
    }

    .navbar .nav-link:hover::after,
    .navbar .nav-link.active::after {
      width: 100%;
    }

    @keyframes navIn {
      from { opacity: 0; transform: translateY(-8px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .navbar-nav .nav-item:nth-child(1) .nav-link { animation-delay: .10s; }
    .navbar-nav .nav-item:nth-child(2) .nav-link { animation-delay: .20s; }
    .navbar-nav .nav-item:nth-child(3) .nav-link { animation-delay: .30s; }
    .navbar-nav .nav-item:nth-child(4) .nav-link { animation-delay: .40s; }
    .navbar-nav .nav-item:nth-child(5) .nav-link { animation-delay: .50s; }
    .navbar-nav .nav-item:nth-child(6) .nav-link { animation-delay: .60s; }
  </style>
</head>
<body>

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="{{ route('profile') }}">
        <i class="bi bi-person-badge me-2"></i>Curriculum Vitae
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="nav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}" href="{{ route('skills') }}">Skills</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('riwayat') ? 'active' : '' }}" href="{{ route('riwayat') }}">Academic History</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('organisasi') ? 'active' : '' }}" href="{{ route('organisasi') }}">Organizational Experience</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('kepanitiaan') ? 'active' : '' }}" href="{{ route('kepanitiaan') }}">Committee Experience</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('hobby') ? 'active' : '' }}" href="{{ route('hobby') }}">Hobbies</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="container my-4">
    <div class="glass p-4 p-md-5 d-flex align-items-center gap-3">
      <img src="{{ asset('images/foto.jpeg') }}" alt="Profile Picture" class="rounded-circle" width="152" height="190">
      <div>
        <h1 class="h3 mb-3">@yield('hero_title','Annisa Dinda Madinah')</h1>
        <div class="text-secondary">@yield('hero_subtitle','Data Science Technology 2023 • Machine Learning Engineer & Data Enthusiast')</div>
      </div>
    </div>
  </header>

  <main class="container mb-5">
    <div class="glass p-4 p-md-5">
      @yield('content')
    </div>
  </main>

  <footer class="container pb-5 text-center small text-secondary">
    © {{ now()->year }} Annisa Dinda Madinah — Basis Data SD-A1
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
