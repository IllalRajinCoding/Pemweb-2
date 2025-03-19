
<?php
class NilaiMahasiswa {
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;
    
    // Menghitung nilai akhir dengan bobot: 30% UTS, 35% UAS, 35% Tugas
    public function nilaiAkhir() {
        $nilai = ($this->nilai_uts * 0.25) + ($this->nilai_uas * 0.30) + ($this->nilai_tugas * 0.45);
        return number_format($nilai, 2);
    }
    
    // Menentukan status kelulusan (Lulus jika nilai akhir >= 60)
    public function kelulusan() {
        $nilai_akhir = $this->nilaiAkhir();
        if ($nilai_akhir >= 60) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}
?>