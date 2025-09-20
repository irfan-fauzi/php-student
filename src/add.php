<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-6 text-center">Form Mahasiswa</h2>
        <form action="./utils/submit.php" method="POST" class="space-y-4">
            <div>
                <label for="nrp" class="block text-gray-700 mb-1">NRP</label>
                <input type="text" name="nrp" id="nrp" placeholder="Masukkan NRP" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="nama" class="block text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="jurusan" class="block text-gray-700 mb-1">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="foto" class="block text-gray-700 mb-1">Foto (URL sementara)</label>
                <input type="text" name="foto" id="foto" placeholder="Masukkan URL Foto" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
