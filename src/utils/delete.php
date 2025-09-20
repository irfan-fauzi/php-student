<?php
include 'config.php'; // Include file koneksi

// Dapatkan ID dari parameter URL (misal: hapus_data.php?id=123)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM mahasiswa WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    header("Location: ../index.php");
    exit();
  } else {
    echo "Gagal menghapus data" . $stmt->error;
  }
  $stmt->close();
}

$conn->close();


//     // Persiapan statement SQL untuk mencegah SQL injection
//     $sql = "DELETE FROM nama_tabel WHERE id = ?"; // Ganti nama_tabel dengan nama tabel Anda
//     $stmt = $conn->prepare($sql);

//     // Bind parameter (menghubungkan variabel ke placeholder)
//     // "i" menandakan bahwa ID adalah integer
//     $stmt->bind_param("i", $id);

//     // Jalankan statement
//     if ($stmt->execute()) {
//         echo "Data berhasil dihapus!";
//         // Redirect ke halaman index.php setelah 1 detik
//         header("Location: index.php");
//         exit(); // Pastikan script berhenti setelah redirect
//     } else {
//         echo "Kesalahan saat menghapus data: " . $stmt->error;
//     }

//     // Tutup statement
//     $stmt->close();
// } else {
//     echo "ID tidak tersedia.";
// }

// // Tutup koneksi database
// $conn->close();
// 
?>