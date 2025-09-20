<?php
include 'config.php';

 if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'])) {
    echo 'Error';
    exit();
  } 
    $id = $_POST['id'];
    $sql = "DELETE FROM mahasiswa WHERE id = ?";
    $stmt = $conn->prepare($sql); // Query akan dikompilasi dan diparsing oleh server sebelum parameter dimasukkan, sehingga mencegah SQL injection.

    if(!$stmt){
      echo "error: " . $conn->error; // $conn dari config.php
      $conn->close();
      exit();
    }

    $stmt->bind_param("i", $id); // Ini adalah cara untuk mengisi placeholder ? di query dengan nilai variabel. "i" menandakan tipe data dari parameter:
    $stmt->execute(); // Ini adalah perintah untuk menjalankan query yang sudah disiapkan dengan parameter yang sudah diisi sebelumnya.


    // Cek apakah ada baris yang terhapus atau apakah benar id yang dikirim ada di database
    if ($stmt->affected_rows === 0) {
      echo "Gagal menghapus: ID tidak ditemukan!";
      $stmt->close();
      $conn->close();
      exit();
}

    $stmt->close(); // Menutup statement MySQL yang sudah dipakai (dari prepare()).
    $conn->close(); // 
    header("Location: ../index.php");
    exit()

?>