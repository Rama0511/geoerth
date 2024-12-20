<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoEarth</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <div class="flex flex-1">
        <!-- Sidebar -->
        <div class="w-1/6 bg-blue-800 text-white h-screen flex flex-col fixed">
            <div class="flex items-center space-x-4 p-4 justify-center">
                <img src="asset/worldwide_477702.png" alt="Logo" class="w-10 h-10">
                <h1 class="text-2xl font-bold">GeoEarth</h1>
            </div>
            <nav class="text-gray-300 text-base font-semibold px-4 py-2">
                <a href="beranda.php" class="flex items-center py-2.5 px-4 rounded hover:bg-gray-700 text-[#FFFF00]"><i class="fa-solid fa-house mr-3"></i><span class="overflow-hidden text-ellipsis whitespace-nowrap">Beranda</span></a>
                <a href="map.php" class="flex items-center py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-map mr-3"></i><span class="overflow-hidden text-ellipsis whitespace-nowrap">Map</span></a>
                <a href="kontak_kami.html" class="flex items-center py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-people-group mr-3"></i><span class="overflow-hidden text-ellipsis whitespace-nowrap">Kontak Kami</span></a>
            </nav>
            <div class="absolute bottom-0 text-gray-300 text-sm font-semibold px-4 py-2">
                <a href="index.php" class="flex items-center py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-arrow-right-from-bracket mr-3"></i><span class="overflow-hidden text-ellipsis whitespace-nowrap">Logout</span></a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-5/6 ml-auto p-8 flex flex-col">
            <div class="flex-1">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">Selamat Datang</h1>
                <p class="text-lg text-gray-700 mb-6">GeoEarth adalah sebuah website Data Spasial seperti Ina-Geospasial dan sebagainya. Website ini dibuat oleh Mahasiswa Institut Teknologi Sumatera. Pembuatan Website ini didasari oleh Tugas Besar Mata Kuliah Sistem Informasi Geografis.</p>
                <img src="asset/map-of-the-world-2401458_1280.jpg" alt="World Map" class="rounded-lg shadow-lg max-w-full h-auto">
            </div>
            <footer class="text-center bg-blue-800 text-white p-4 mt-8">
                Copyright &copy; 2024 Kelompok 7 Sistem Informasi Geografis
            </footer>
        </div>
    </div>
</body>
</html>