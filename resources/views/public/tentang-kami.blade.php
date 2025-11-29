<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tentang Kami - SIBILING UBBG</title>
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
  <style>
    /* === VARIBEL WARNA (SAMA PERSIS DENGAN WELCOME) === */
    :root {
      --primary-green: #2E8B57;
      --primary-light: #3CB371;
      --primary-dark: #23865F;
      --primary-darker: #1A6B4B;
      --bg-cream: #FFFCF9;
      --bg-green-light: #EAF7F2;
      --bg-green-lighter: #F0FAF7;
      --text-dark: #1A1A1A;
      --text-gray: #4A4A4A;
      --text-light: #9E9E9E;
      --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
      --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.08);
      --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.06);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-cream);
      color: var(--text-dark);
      overflow-x: hidden;
      line-height: 1.6;
    }

    /* === BACKGROUND SHAPES (COPY DARI WELCOME) === */
    .bg-shapes { position: fixed; inset: 0; z-index: -1; overflow: hidden; pointer-events: none; }
    .shape-top-right {
      position: absolute; top: -15%; right: -10%; width: 60%; height: 50%;
      background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-green) 100%);
      border-bottom-left-radius: 60% 40%; opacity: 0.08; animation: float 8s ease-in-out infinite;
    }
    .shape-bottom-left {
      position: absolute; bottom: -15%; left: -10%; width: 60%; height: 50%;
      background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
      border-top-right-radius: 60% 40%; opacity: 0.08; animation: float 10s ease-in-out infinite reverse;
    }
    .shape-center {
      position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; height: 40%;
      background: linear-gradient(135deg, var(--bg-green-light) 0%, var(--bg-green-lighter) 100%);
      border-radius: 50%; opacity: 0.05; animation: pulse 6s ease-in-out infinite;
    }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    @keyframes pulse { 0%, 100% { transform: translate(-50%, -50%) scale(1); } 50% { transform: translate(-50%, -50%) scale(1.1); } }

    /* === NAVBAR (KONSISTEN) === */
    .navbar {
        position: fixed; top: 0; left: 0; right: 0; height: 70px;
        display: flex; align-items: center; justify-content: center;
        padding: 0 2rem; background: rgba(255, 252, 249, 0.95);
        backdrop-filter: blur(10px); z-index: 1000;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        box-shadow: var(--shadow-sm);
    }
    .nav-logo-container { position: absolute; left: 2rem; display: flex; align-items: center; gap: 0.75rem; text-decoration: none; }
    .nav-logo-img { height: 40px; width: auto; transition: transform 0.3s; }
    .nav-logo-img:hover { transform: scale(1.1); }
    .nav-logo-text { font-weight: 800; font-size: 1.25rem; color: var(--primary-dark); }
    
    /* Menu Tengah */
    .nav-links { display: flex; gap: 2.5rem; list-style: none; }
    .nav-item a {
        text-decoration: none; color: var(--text-gray); font-weight: 600; font-size: 1rem;
        transition: color 0.3s ease; position: relative;
    }
    .nav-item a:hover, .nav-item a.active { color: var(--primary-green); }
    .nav-item a.active::after {
        content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 3px;
        background: var(--primary-green); border-radius: 2px;
    }

    @media (max-width: 768px) {
        .navbar { justify-content: space-between; height: 70px; padding: 0 1.5rem; }
        .nav-logo-container { position: static; }
        .nav-logo-text { display: none; }
        .nav-links { gap: 1rem; font-size: 0.9rem; }
    }

    /* === MAIN CONTAINER === */
    .container {
        max-width: 1100px; margin: 0 auto;
        padding: 120px 1.5rem 4rem; /* Top padding biar ga ketutup navbar */
    }

    /* === SECTION 1: OUR STORY (TEXT ONLY, RAPI) === */
    .story-section {
        text-align: center; max-width: 800px; margin: 0 auto 6rem;
        animation: fadeIn 0.8s ease-out;
    }
    
    .section-label {
        display: inline-block; background-color: var(--bg-green-light); color: var(--primary-green);
        padding: 0.5rem 1.2rem; border-radius: 50px; font-weight: 700; font-size: 0.85rem;
        text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1.5rem;
    }

    .story-title {
        font-size: 2.5rem; font-weight: 800; margin-bottom: 1.5rem;
        color: var(--text-dark); line-height: 1.2;
    }

    .story-desc {
        font-size: 1.1rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2.5rem;
    }

    .visi-quote {
        position: relative; padding: 2rem 3rem;
        background: white; border-radius: 1.5rem;
        box-shadow: var(--shadow-md); border: 1px solid rgba(46, 139, 87, 0.1);
    }
    .visi-quote p {
        font-size: 1.25rem; font-weight: 600; font-style: italic; color: var(--primary-dark);
        position: relative; z-index: 1;
    }
    /* Hiasan Kutip */
    .visi-quote::before {
        content: '“'; position: absolute; top: -10px; left: 15px; font-size: 6rem;
        color: var(--bg-green-light); font-family: serif; line-height: 0; z-index: 0; opacity: 0.5;
    }

    /* === SECTION 2: TEAM (GRID SYSTEM) === */
    .team-section { animation: slideUp 0.8s 0.3s both; }
    
    .team-header { text-align: center; margin-bottom: 3rem; }
    .team-header h2 { font-size: 2.25rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.5rem; }
    .team-header p { color: var(--text-gray); font-size: 1.1rem; }

    /* GRID & FLEXBOX MAGIC (BIAR SEJAJAR) */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2.5rem;
        align-items: stretch; /* Paksa tinggi sama */
    }

    .team-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: var(--shadow-md);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column; /* Susun vertikal */
        border: 1px solid rgba(0,0,0,0.03);
        height: 100%; /* Full height container */
    }

    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary-light);
    }

    /* Bagian Atas Kartu (Foto & Header) */
    .card-top {
        position: relative;
        background: linear-gradient(135deg, var(--bg-green-light), var(--bg-green-lighter));
        padding: 3rem 1rem 0; /* Padding atas buat jarak foto */
        text-align: center;
    }
    
    .photo-wrapper {
        width: 120px; height: 120px; margin: 0 auto -60px; /* Negatif margin biar foto "nangkring" */
        position: relative; z-index: 10;
    }
    
    .team-photo {
        width: 100%; height: 100%; object-fit: cover; border-radius: 50%;
        border: 5px solid white; box-shadow: var(--shadow-md);
        background-color: #eee;
    }

    /* Bagian Bawah Kartu (Teks) */
    .card-body {
        padding: 4.5rem 2rem 2rem; /* Padding atas gede kompensasi foto */
        text-align: center;
        flex-grow: 1; /* Isi ruang kosong */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Dorong tombol ke bawah */
    }

    .info-block { margin-bottom: 1.5rem; }
    .team-name { font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem; }
    .team-role { 
        display: inline-block; font-size: 0.85rem; font-weight: 700; 
        color: var(--primary-green); text-transform: uppercase; letter-spacing: 1px;
        margin-bottom: 1rem; border-bottom: 2px solid var(--bg-green-light); padding-bottom: 0.2rem;
    }
    .team-bio { font-size: 0.95rem; color: var(--text-gray); line-height: 1.6; }

    /* Tombol GitHub Style */
    .github-btn {
        display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;
        background-color: var(--text-dark); color: white;
        padding: 0.75rem 1.5rem; border-radius: 50px;
        font-weight: 600; font-size: 0.9rem; text-decoration: none;
        transition: all 0.3s ease; margin: 0 auto;
        width: fit-content;
    }
    .github-btn:hover { background-color: var(--primary-green); transform: scale(1.05); }
    .github-icon { width: 20px; height: 20px; fill: white; }

    /* ANIMASI */
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes slideUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    /* Responsif Mobile */
    @media (max-width: 768px) {
        .story-title { font-size: 2rem; }
        .container { padding-top: 100px; }
        .team-grid { grid-template-columns: 1fr; } /* 1 kolom di HP */
    }
  </style>
</head>
<body>

  <div class="bg-shapes">
    <div class="shape-top-right"></div>
    <div class="shape-bottom-left"></div>
    <div class="shape-center"></div>
  </div>

  <nav class="navbar">
      <a href="{{ route('welcome') }}" class="nav-logo-container">
          <img src="{{ asset('images/logo-ubbg.png') }}" alt="Logo" class="nav-logo-img">
          <span class="nav-logo-text">SiBiling</span>
      </a>
      <ul class="nav-links">
          <li class="nav-item"><a href="{{ route('welcome') }}">Beranda</a></li>
          <li class="nav-item"><a href="{{ route('public.landasan') }}">Landasan Hukum</a></li>
          <li class="nav-item"><a href="{{ route('public.tentang') }}" class="active">Tentang Kami</a></li>
      </ul>
  </nav>

  <div class="container">
    
    <div class="story-section">
        <span class="section-label">Tentang Aplikasi</span>
        <h1 class="story-title">{{ $aboutWeb['judul'] }}</h1>
        <p class="story-desc">{{ $aboutWeb['deskripsi'] }}</p>
        
        <div class="visi-quote">
            <p>"{{ $aboutWeb['visi'] }}"</p>
        </div>
    </div>

    <div class="team-section">
        <div class="team-header">
            <span class="section-label">Tim Kami</span>
            <h2>Meet the Developers</h2>
            <p>Mahasiswa di balik layar yang mendedikasikan kode untuk solusi nyata.</p>
        </div>

        <div class="team-grid">
            @foreach($tim as $member)
            <div class="team-card">
                <div class="card-top">
                    <div class="photo-wrapper">
                        <img src="{{ asset($member['foto']) }}" 
                             alt="{{ $member['nama'] }}" 
                             class="team-photo">
                    </div>
                </div>

                <div class="card-body">
                    <div class="info-block">
                        <h3 class="team-name">{{ $member['nama'] }}</h3>
                        <span class="team-role">{{ $member['role'] }}</span>
                        <p class="team-bio">{{ $member['bio'] }}</p>
                    </div>

                    @if($member['github'])
                    <a href="{{ $member['github'] }}" target="_blank" class="github-btn">
                        <svg class="github-icon" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

  </div>

</body>
</html>