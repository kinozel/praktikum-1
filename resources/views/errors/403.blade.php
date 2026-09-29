<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 - Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-sm w-full max-w-md text-center">
        <div class="mb-4">
            <svg class="mx-auto h-16 w-16 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-gray-800 mb-2">403</h1>
        <h2 class="text-xl font-semibold mb-4 text-gray-700">Akses Ditolak</h2>
        <p class="text-gray-600 mb-6 text-sm">
            Maaf, Anda tidak memiliki izin untuk mengakses halaman ini. Halaman tersebut hanya diperuntukkan bagi admin.
        </p>
        <a href="{{ url('/') }}" class="inline-block w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>