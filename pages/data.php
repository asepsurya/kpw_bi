<?php
include 'assets/koneksi.php';
$query = $koneksi->query("SELECT * FROM tb_ukm");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nama'];
}
echo json_encode($data);
?>