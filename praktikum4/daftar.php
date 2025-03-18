<?php
require_once 'nilai_mahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Bunga";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;
$mhs1->nilai_tugas = 78;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Dewi";
$mhs2->matakuliah = "Pemrograman Web";
$mhs2->nilai_uts = 70;
$mhs2->nilai_uas = 75;
$mhs2->nilai_tugas = 72;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Agoy";
$mhs3->matakuliah = "Pemrograman Web";
$mhs3->nilai_uts = 24;
$mhs3->nilai_uas = 20;
$mhs3->nilai_tugas = 40;

$data_mahasiswa = [$mhs1, $mhs2, $mhs3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>

<body>

    <h3>Daftar Nilai Mahasiswa</h3>
    <table>
        <thead>
            <tr>
                <th>Nama
                </th>
                <th>
                    Mata kuliah
                </th>
                <th>
                    Nilai Uas
                </th>
                <th>
                    Nilai Uts
                </th>
                <th> Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->matakuliah ?></td>
                    <td><?= $mhs->nilai_uas ?></td>
                    <td><?= $mhs->nilai_uts ?></td>
                    <td><?= $mhs->nilai_tugas ?></td>
                    <td><?= $mhs->nilaiAkhir() ?></td>
                    <td><?= $mhs->kelulusan() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>