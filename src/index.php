 
 <?php

  $conn = require './utils/config.php'; // menghubungkan ke database
  $getAllMahasiswa = require './utils/query.php'; // menghubungkan ke query.php
  $mahasiswa = $getAllMahasiswa($conn); // memanggil fungsi getAllMahasiswa dari query.php
  $conn->close(); // menutup koneksi ke database
  
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>Document</title>
   <style>
   table {
     border-collapse: collapse;
     width: 100%;
   }

   th,
   td {
     border: 1px solid #ddd;
     padding: 8px;
     text-align: left;
   }

   th {
     background-color: #f2f2f2;
   }

   img {
     width: 60px;
     height: auto;
   }
   </style>
 </head>

 <body>
  
   <section class="max-w-screen-xl mx-auto p-4 mt-5">
     <h1 class="text-3xl mb-5">Tabel Mahasiswa</h1>
     <table class="max-w-screen-xl mx-auto">
       <thead>
         <tr>
           <th>ID</th>
           <th>NRP</th>
           <th>Nama</th>
           <th>Email</th>
           <th>Jurusan</th>
           <th>Foto</th>
           <th>Aksi</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         foreach ($mahasiswa as $mhs) : ?>
         <tr>
           <td><?= $no++ ?></td>
           <td><?= $mhs["nrp"]; ?></td>
           <td><?= $mhs["nama"]; ?></td>
           <td><?= $mhs["email"]; ?></td>
           <td><?= $mhs["jurusan"]; ?></td>
           <td><img src="<?= $mhs["foto"]; ?>" alt="<?= $mhs["foto"]; ?>"></td>
           <td>
             <a href="editPage.php?id=<?= $mhs['id']; ?>" class=" px-4 py-2 bg-blue-200 hover:bg-blue-400">edit</a>
             <a href="deletePage.php?id=<?= $mhs['id']; ?>" class="text-white px-4 py-2 bg-red-400 hover:bg-red-700">delete</a>
           </td>
         </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
      <a href="addPage.php" class="bg-blue-500 text-xl text-white mt-10 px-5 py-3 inline-block hover:bg-blue-700 rounded-md">Add Mahasiswa</a>
   </section>
  
 </body>


 </html>