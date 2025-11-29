<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landasan Hukum & SOP - SiBiling UBBG</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    <style>
        :root {
            --primary-green: #2E8B57;
            --primary-light: #3CB371;
            --primary-dark: #23865F;
            --bg-cream: #FFFCF9;
            --bg-green-light: #EAF7F2;
            --text-dark: #1A1A1A;
            --text-gray: #4A4A4A;
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.06);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-cream);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* === NAVBAR FIXED & CENTERED (SAMA PERSIS) === */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 2rem;
            background: rgba(255, 252, 249, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .nav-logo-container {
            position: absolute;
            left: 2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .nav-logo-img { height: 40px; width: auto; }
        .nav-logo-text { font-weight: 800; font-size: 1.25rem; color: var(--primary-dark); display: none; }

        .nav-links { display: flex; gap: 2.5rem; list-style: none; }
        .nav-item a { text-decoration: none; color: var(--text-gray); font-weight: 600; font-size: 1rem; transition: color 0.3s ease; position: relative; }
        .nav-item a:hover, .nav-item a.active { color: var(--primary-green); }
        .nav-item a.active::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background: var(--primary-green); border-radius: 2px; }

        @media (min-width: 768px) { .nav-logo-text { display: block; } }
        @media (max-width: 768px) { .navbar { justify-content: space-between; height: 70px; } .nav-logo-container { position: static; } .nav-links { gap: 1rem; font-size: 0.9rem; } }

        /* Background Shapes */
        .bg-shapes { position: fixed; inset: 0; z-index: -1; overflow: hidden; }
        .shape-top-right { position: absolute; top: -15%; right: -10%; width: 60%; height: 50%; background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-green) 100%); border-bottom-left-radius: 60% 40%; opacity: 0.08; animation: float 8s ease-in-out infinite; }
        .shape-bottom-left { position: absolute; bottom: -15%; left: -10%; width: 60%; height: 50%; background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%); border-top-right-radius: 60% 40%; opacity: 0.08; animation: float 10s ease-in-out infinite reverse; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }

        /* Page Content */
        .container { max-width: 1200px; margin: 0 auto; padding: 120px 1.5rem 4rem; } /* Padding top 120px biar ga ketutup navbar */
        
        .page-header { text-align: center; margin-bottom: 4rem; }
        h1 { font-size: 3rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(135deg, var(--text-dark) 0%, var(--primary-dark) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .subtitle { color: var(--text-gray); font-size: 1.1rem; max-width: 600px; margin: 0 auto; }

        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
        .card { background: white; border-radius: 1.5rem; padding: 2rem; box-shadow: var(--shadow-md); transition: transform 0.3s ease, box-shadow 0.3s ease; border: 1px solid rgba(46, 139, 87, 0.1); display: flex; flex-direction: column; position: relative; overflow: hidden; }
        .card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); border-color: var(--primary-light); }
        .card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, var(--primary-light), var(--primary-dark)); }
        .card-icon { width: 3.5rem; height: 3.5rem; background: var(--bg-green-light); border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; color: var(--primary-dark); }
        .card-category { position: absolute; top: 1.5rem; right: 1.5rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; padding: 0.25rem 0.75rem; border-radius: 20px; background: var(--bg-green-light); color: var(--primary-dark); }
        .card h3 { font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text-dark); line-height: 1.4; }
        .card-meta { font-size: 0.85rem; color: var(--primary-green); font-family: monospace; margin-bottom: 1rem; display: block; }
        .card p { color: var(--text-gray); font-size: 0.95rem; margin-bottom: 2rem; flex-grow: 1; }
        .btn-download { display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 100%; padding: 0.75rem; border-radius: 0.75rem; background: white; border: 2px solid var(--primary-green); color: var(--primary-green); font-weight: 600; text-decoration: none; transition: all 0.3s ease; }
        .btn-download:hover { background: var(--primary-green); color: white; }
    </style>
</head>
<body>

    <div class="bg-shapes">
        <div class="shape-top-right"></div>
        <div class="shape-bottom-left"></div>
    </div>

    <nav class="navbar">
        <a href="{{ route('welcome') }}" class="nav-logo-container">
            <img src="{{ asset('images/logo-ubbg.png') }}" alt="Logo" class="nav-logo-img">
            <span class="nav-logo-text">SiBiling</span>
        </a>
        <ul class="nav-links">
            <li class="nav-item"><a href="{{ route('welcome') }}">Beranda</a></li>
            <li class="nav-item"><a href="{{ route('public.landasan') }}" class="active">Landasan Hukum</a></li>
            <li class="nav-item"><a href="{{ route('public.tentang') }}">Tentang Kami</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>Landasan Hukum & SOP</h1>
            <p class="subtitle">Transparansi dan standar operasional resmi Unit Layanan Bimbingan Konseling Universitas Bina Bangsa Getsempena.</p>
        </div>

        <div class="grid">
            @foreach($dokumen as $dok)
            <div class="card">
                <span class="card-category">{{ $dok['kategori'] }}</span>
                <div class="card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <h3>{{ $dok['judul'] }}</h3>
                <span class="card-meta">{{ $dok['nomor'] }} • {{ $dok['tahun'] }}</span>
                <p>{{ $dok['deskripsi'] }}</p>
                <a href="{{ asset('assets/docs/' . $dok['file']) }}" target="_blank" class="btn-download">
                    <span>Buka Dokumen</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>