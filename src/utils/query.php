<?php
// --- IGNORE ---
  require 'config.php'; // menghubungkan ke database

  $getAllMahasiswa = function($conn) {
    $sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql); // $conn diambil dari config.php, query = menjalankan perintah sql ke database
    $mahasiswa = [];
    if ($result->num_rows > 0) { // num_rows = jumlah baris data yang ada di tabel
      while ($row = $result->fetch_assoc()) { // fetch_assoc = mengambil data dari tabel dan mengubahnya menjadi array asosiatif
        $mahasiswa[] = $row;
      }
    }
    return $mahasiswa;
  };

  return $getAllMahasiswa;
?>