<?php

class NilaiMahasiswa {
    public $nama;
    public $gender;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;
    public const presentase_uts = 0.25;
    public const presentase_uas = 0.30;
    public const presentase_tugas = 0.45;

    public function nilaiAkhir () {
        $nilai_akhir = $this->nilai_uts * self::presentase_uts + $this->nilai_uas * self::presentase_uas + $this->nilai_tugas * self::presentase_tugas;
        return $nilai_akhir;
    }

    public function kelulusan () {
        if($this->nilaiAkhir()>= 60) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}

?>