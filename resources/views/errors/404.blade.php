<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background {
            background-image: url('https://example.com/path/to/your/perfume-background.jpg'); /* URL gambar latar belakang parfum */
            background-size: cover;
            background-position: center;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.8); /* Warna overlay putih dengan sedikit transparansi */
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen background">
    <div class="p-10 mx-auto max-w-md text-center rounded-lg shadow-md overlay">
        <h1 class="mb-4 text-5xl font-bold text-gray-900">404</h1>
        <p class="mb-6 text-lg text-gray-600">Oops! Halaman yang kamu cari tidak ditemukan. Mungkin sedang disemprot dengan parfum baru.</p>
        <a href="{{ url('/') }}" class="inline-block px-6 py-3 text-sm font-medium leading-tight text-white uppercase bg-pink-600 rounded shadow-md transition duration-150 ease-in-out hover:bg-pink-700 hover:shadow-lg focus:outline-none focus:ring-0 active:bg-pink-800 active:shadow-lg">Kembali ke Beranda</a>
    </div>
</body>
</html>
