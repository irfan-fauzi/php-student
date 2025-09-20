<?php
  require 'config.php';

  if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'])) {
    echo "Request tidak valid";
    exit();
  }
  
  $id = (int)$_POST["id"];
  $nrp = htmlspecialchars($_POST["nrp"]) ?? '';
  $nama = htmlspecialchars($_POST["nama"]) ?? '';
  $email = htmlspecialchars($_POST["email"]) ?? '';
  $jurusan = htmlspecialchars($_POST["jurusan"]) ?? '';
  $foto = htmlspecialchars($_POST["foto"]) ?? '';

  $sql = "UPDATE mahasiswa SET nrp = ?, nama = ?, email = ?, jurusan = ?, foto = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('sssssi', $nrp, $nama, $email, $jurusan, $foto, $id);
  $stmt->execute();

  if ($stmt->affected_rows === 0) {
    echo "Data tidak diubah atau ID tidak ditemukan.";
  }

  $stmt->close(); 
  $conn->close();
  header("Location: ../index.php");
  exit();

  
?>