<?php
$buah = ['apel', 'jeruk', 'mangga', 'pisang', 'anggur'];

// menampilkan isi array
echo "buah ke dua adalah $buah[1]";
echo "<br>";
// mencetak jumlah array
echo "jumlah array adalah " . count($buah);

// mencetak seluruh array
echo "<ol>";
foreach ($buah as $b) {
    echo "<li>$b</li>";
}

echo "</ol>";
// menambahkan buah
$buah[] = 'durian';

echo "</ol>";
// hapus buah index ke 2
unset($buah[2]);

// ubah index 3 jdi mangga
$buah[3] = 'mangga';

echo "<ol>";
foreach ($buah as $b) {
    echo "<li>$b</li>";
}
// cetak buah dengan index
echo "<br>";
echo "<ul>";
foreach ($buah as $index => $b) {
    echo "<li>$index. $b</li>";
}

echo "</ul>";





?>