<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SiBiling') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* === VARIABLES (SAMA DENGAN BERANDA) === */
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

            body {
                font-family: 'Inter', sans-serif;
                background-color: var(--bg-cream);
                color: var(--text-dark);
                line-height: 1.6;
                overflow-x: hidden;
            }

            /* === BACKGROUND SHAPES === */
            .bg-shapes { position: fixed; inset: 0; z-index: -1; overflow: hidden; pointer-events: none; }
            .shape-top-right {
                position: absolute; top: -15%; right: -10%; width: 60%; height: 60%;
                background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-green) 100%);
                border-bottom-left-radius: 50% 40%; opacity: 0.08; animation: float 8s ease-in-out infinite;
            }
            .shape-bottom-left {
                position: absolute; bottom: -15%; left: -10%; width: 60%; height: 60%;
                background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
                border-top-right-radius: 50% 40%; opacity: 0.08; animation: float 10s ease-in-out infinite reverse;
            }
            @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }

            /* Card Auth Style */
            .auth-card {
                background: white;
                border-radius: 1.5rem;
                box-shadow: var(--shadow-lg);
                border: 1px solid rgba(46, 139, 87, 0.1);
                animation: slideUp 0.6s ease-out;
            }

            @keyframes slideUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        </style>
    </head>
    <body class="antialiased">
        
        <div class="bg-shapes">
            <div class="shape-top-right"></div>
            <div class="shape-bottom-left"></div>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 p-6">
            <div class="mb-6 text-center">
                <a href="/" class="flex flex-col items-center gap-2 group">
                    <img src="{{ asset('images/logo-ubbg.png') }}" alt="Logo UBBG" class="w-20 h-20 transition-transform duration-300 group-hover:scale-110 drop-shadow-md">
                    <span class="text-2xl font-extrabold tracking-tight" style="color: var(--primary-dark);">SiBiling</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-8 py-10 auth-card">
                {{ $slot }}
            </div>
            
            <div class="mt-8 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} Unit Pelayanan Bimbingan Konseling UBBG.
            </div>
        </div>
    </body>
</html>