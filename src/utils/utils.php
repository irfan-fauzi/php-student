<?php
  $getMahasiswaById = function ($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $mahasiswa = $result->fetch_assoc();
    $stmt->close();
    return $mahasiswa ?: null;
  };
  return $getMahasiswaById;
?>