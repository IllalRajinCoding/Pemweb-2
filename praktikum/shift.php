<?php 

$rokok = ['surya', 'gudang garam', 'sampoerna', 'dji sam soe', 'marlboro'];

// menghapus
$awal = array_shift($rokok);
$akhir = array_pop($rokok);

// rokok yang di hapus 
echo "rokok yang di hapus $awal dan $akhir \n";
// rokok yang tersisa
echo "<ol>";
foreach ($rokok as $r) {
    echo "<li>" . $r . "</li>";
}
echo "</ol>";
?>