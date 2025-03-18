<?php

class lingkaran
{
    // untuk mengambil public non const bisa menggunakan $this
    public $jari;
    // untuk mengambil public const bisa menggunakan self
    public const Phi = 3.14;
    // untuk mengambil private bisa menggunakan $this
    public function __construct($jari)
    {
        $this->jari = $jari;
    }
    public function luas()
    {
        $luas = self::Phi * $this->jari * $this->jari;
        return $luas;
    }
    public function keliling()
    {
        $keliling = 2 * self::Phi * $this->jari;
        return $keliling;
    }

    public function run()
    {
        echo "Jari-jari lingkaran = " . $this->jari . "<br>";
        echo "Luas lingkaran = " . $this->luas() . "<br>";
        echo "Keliling lingkaran = " . $this->keliling() . "<br>";
    }
}