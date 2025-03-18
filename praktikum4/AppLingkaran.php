<?php

require_once 'lingkaran.php';
$lingkaran1 = new lingkaran(8.4);
$lingkaran2 = new lingkaran(10);


echo "Nilai Phi = ".lingkaran::Phi."<br>";
echo "Jari jari lingkaran 1 = ".$lingkaran1->jari."<br>";
echo "Luas lingkaran 1 = ".$lingkaran1->luas()."<br>";
echo "Keliling Lingkaran 1 =".$lingkaran1->keliling()."<br>";
echo $lingkaran1->run()."<br>";