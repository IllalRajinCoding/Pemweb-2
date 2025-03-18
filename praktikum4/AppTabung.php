<?php

require_once 'tabung.php';

$tabung = new Tabung(7, 10);

echo "Nilai PHI adalah ". Tabung::PHI . PHP_EOL;
echo "<br> Jari-jari lingkaran 1 = ". $tabung->r . PHP_EOL;
echo "<br> Luas lingkaran 1 = ". $tabung->getVolume() . PHP_EOL;
echo "<br> Keliling lingkaran 1 = ". $tabung->getLuasPermukaan() . PHP_EOL;
echo "<hr>";
echo "<br>";


echo "Jadi, tabung dengan jari-jari " . $tabung->r . " dan tinggi " . $tabung->t . " memiliki volume " . $tabung->getVolume() . " dan luas permukaan " . $tabung->getLuasPermukaan();