<?php

/**
 * Class Tabung
 */
class Tabung
{
    public $r;
    public $t;
    public const PHI = 3.14;

    public function __construct($r, $t)
    {
        $this->r = $r;
        $this->t = $t;
    }

    public function getVolume() {
        $volume = self::PHI * $this->r * $this->r * $this->t;
        return $volume;
    }

    public function getLuasPermukaan() {
        $luasPermukaan = 2 * self::PHI * $this->r * ($this->r + $this->t);
        return $luasPermukaan;
    }

    public function Cetak() {
        echo "Jadi, tabung dengan jari-jari " . $this->r . " dan tinggi " . $this->t . " memiliki volume " . $this->getVolume() . " dan luas permukaan " . $this->getLuasPermukaan();
    }
}
?>