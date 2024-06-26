<?php
// Koneksi ke database mysql
include "conn.php";

// Membuat query/sql untuk mengambil data nama penulis
$sql = "SELECT * FROM PENULIS";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Query error: " . mysqli_error($conn));
}

$item = array(); // Inisialisasi $item sebagai array kosong

while ($data = mysqli_fetch_array($query)) {
    $item[] = array(
        'nama' => $data["nama_penulis"],
        'tahun_terbit' => $data["tahun"]
    );
}

$response = array(
    'status' => 'oke',
    'data' => $item
);

echo json_encode($response);
?>
