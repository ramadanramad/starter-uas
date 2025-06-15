<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal System</title>

    <!-- Google Font & Tailwind CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      body {
        font-family: 'Inter', sans-serif;
      }
      /* Custom util for glass effect */
      .glass {
        background: rgba(255, 255, 255, 0.25);
        border-radius: 1rem;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
      }
    </style>
  </head>
  <body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-fuchsia-600 flex items-center justify-center py-10 px-6">
    <!-- container -->
    <div class="w-full max-w-6xl grid md:grid-cols-2 gap-10 items-center">
      <!-- Hero Section -->
      <div class="text-white md:text-left text-center space-y-6">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight drop-shadow-lg">
          Welcome to <span class="text-yellow-300">Portal System</span>
        </h1>
        <p class="text-lg opacity-90 max-w-md mx-auto md:mx-0">
          One gateway for all your content. Sign in to manage articles, teams, and analytics — built with Laravel 11.
        </p>
        @auth
          <a
            href="{{ url('/dashboard') }}"
            class="inline-block px-8 py-3 rounded-full font-semibold bg-yellow-300 text-gray-900 hover:bg-yellow-200 transition">
            Go to Dashboard
          </a>
        @else
          <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0 justify-center md:justify-start">
            <a
              href="{{ route('login') }}"
              class="inline-block px-8 py-3 rounded-full font-semibold bg-white text-indigo-600 hover:bg-indigo-50 transition">
              Login
            </a>
            @if(Route::has('register'))
              <a
                href="{{ route('register') }}"
                class="inline-block px-8 py-3 rounded-full font-semibold border border-white text-white hover:bg-white hover:text-indigo-600 transition">
                Register
              </a>
            @endif
          </div>
        @endauth
      </div>

      <!-- Card Section -->
      <div class="glass p-10 md:p-14 text-gray-800 space-y-6">
        <h2 class="text-2xl font-bold text-indigo-700">Why Join Us?</h2>
        <ul class="space-y-4 text-sm md:text-base">
          <li class="flex items-start space-x-3">
            <span class="text-indigo-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></span>
            <span>Secure, role‑based access for writers, editors, and admins.</span>
          </li>
          <li class="flex items-start space-x-3">
            <span class="text-indigo-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg></span>
            <span>Draft‑first publishing workflow with image uploads.</span>
          </li>
          <li class="flex items-start space-x-3">
            <span class="text-indigo-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/></svg></span>
            <span>Modern UI powered by Tailwind CSS & AdminLTE dashboard.</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- footer -->
    <footer class="absolute bottom-4 text-white text-xs w-full text-center opacity-75">
      © {{ date('Y') }} Portal System. All rights reserved.
    </footer>
  </body>
</html>
