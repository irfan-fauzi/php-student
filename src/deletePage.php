<?php
  require './utils/utils.php';
  $conn = require './utils/config.php';
  // $getMahasiswaById = require './utils/utils.php';
  $id = $_GET["id"];
  $detail = $getMahasiswaById($conn, $id);

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Delete</title>
</head>
<body>
 
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-xl font-bold mb-4 text-center text-red-600">Konfirmasi Hapus</h2>
        <p class="mb-4 text-center">Apakah Anda yakin ingin menghapus data ini?</p>
       
           <div class="mb-4 border p-4 rounded bg-gray-50">
            <p><strong>ID: </strong><?= $detail['id'] ?></p>
            <p><strong>NRP: </strong><?= $detail['nrp'] ?></p>
            <p><strong>Nama: </strong><?= $detail['nama'] ?></p>
            <p><strong>Email: </strong><?= $detail['email'] ?></p>
            <p><strong>Jurusan: </strong><?= $detail['jurusan'] ?></p>
          </div>
        <form method="POST" action="./utils/delete.php" class="flex justify-between">
            <input type="hidden" name="id" value="<?= $detail['id']; ?>">
            <button type="submit" name="confirm_delete" 
                class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                Hapus
            </button>
            <a href="index.php" 
                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                Cancel
            </a>
        </form>
        </div>
    </div>
</body>
</body>
</html>