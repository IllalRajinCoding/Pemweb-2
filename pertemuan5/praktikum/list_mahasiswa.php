<?php
require_once 'dbkoneksi.php';

// buat query
$sql = "SELECT * FROM mahasiswa ORDER BY nim DESC";  // assuming the table is called mahasiswa
// eksekusi query
$rs = $dbh->query($sql);
// tampilkan hasil query
foreach($rs as $row) {
    echo $row->nim . " - " . $row->nama . " - " . $row->thn_masuk . "<br>";
}
?>