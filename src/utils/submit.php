<?php
  $conn = require 'config.php';
  
  $nrp = htmlspecialchars($_POST["nrp"]) ?? '';
  $nama = htmlspecialchars($_POST["nama"]) ?? '';
  $email = htmlspecialchars($_POST["email"]) ?? '';
  $jurusan = htmlspecialchars($_POST["jurusan"]) ?? '';
  $foto = htmlspecialchars($_POST["foto"]) ?? '';

  if (!$nrp || !$nama || !$email || !$jurusan || !$foto) {
    echo 'data tidak lengkap';
  }

  try {
   
    $stmt = $conn->prepare('INSERT INTO mahasiswa (nrp, nama, email, jurusan, foto) VALUES (?, ?, ?, ?, ?) '); //  // Tanda ? adalah placeholder untuk nilai yang akan dimasukkan nanti. adi kita tidak langsung menulis data di query, tapi menyiapkan tempatnya dulu.
    // tidak langsung berisi data, tapi menunggu bind_param.
    $stmt->bind_param("sssss", $nrp, $nama, $email, $jurusan, $foto);
    $stmt->execute();
    
    // cek apakah ada data yang ditambah?
    if ($stmt->affected_rows === 0) {
      echo "Gagal menghapus: ID tidak ditemukan!";
      $stmt->close();
      $conn->close();
      exit();
    }

    $stmt->close();

    // redirect ke index.php
    header("Location: ../index.php");
    exit;
  } catch (Exception $e) {  
    echo "terjadi error". $e->getMessage();
  }
  

?>