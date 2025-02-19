<?php

//array push 
$bulan = [
    "jan", "feb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", 
];

//menambahkan elemen di akhir array
array_push($bulan, "nov", "des");

echo "Array setelah di tambah elemen adalah :\n ";
foreach ($bulan as $k) {
    echo $k."<br>";
};