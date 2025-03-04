<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="p-10 mx-auto max-w-md text-center bg-white rounded-lg shadow-md">
        <h1 class="mb-4 text-4xl font-bold text-gray-900">403</h1>
        <p class="mb-6 text-lg text-gray-600">Maaf, kamu tidak memiliki izin untuk mengakses halaman ini.</p>
        <a href="{{ url('/') }}" class="inline-block px-6 py-3 text-sm font-medium leading-tight text-white uppercase bg-red-600 rounded shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg">Kembali ke Beranda</a>
    </div>
</body>
</html>
