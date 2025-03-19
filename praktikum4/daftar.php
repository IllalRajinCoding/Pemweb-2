<?php
require_once 'nilai_mahasiswa.php';

// Inisialisasi array untuk menyimpan data mahasiswa
session_start();
if (!isset($_SESSION['data_mahasiswa'])) {
    // Data awal
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

    $_SESSION['data_mahasiswa'] = [$mhs1, $mhs2, $mhs3];
}

// Proses form jika ada data yang dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi data
    $nama = htmlspecialchars($_POST['nama']);
    $matakuliah = htmlspecialchars($_POST['matakuliah']);
    $nilai_uts = (int)$_POST['nilai_uts'];
    $nilai_uas = (int)$_POST['nilai_uas'];
    $nilai_tugas = (int)$_POST['nilai_tugas'];

    // Validasi nilai (pastikan berada dalam rentang 0-100)
    if ($nilai_uts >= 0 && $nilai_uts <= 100 && 
        $nilai_uas >= 0 && $nilai_uas <= 100 && 
        $nilai_tugas >= 0 && $nilai_tugas <= 100) {
        
        // Tambahkan data baru
        $mhs_baru = new NilaiMahasiswa();
        $mhs_baru->nama = $nama;
        $mhs_baru->matakuliah = $matakuliah;
        $mhs_baru->nilai_uts = $nilai_uts;
        $mhs_baru->nilai_uas = $nilai_uas;
        $mhs_baru->nilai_tugas = $nilai_tugas;

        // Tambahkan ke array
        $_SESSION['data_mahasiswa'][] = $mhs_baru;
        
        // Pesan sukses
        $pesan = "Data mahasiswa berhasil ditambahkan!";
        $tipe_pesan = "success";
    } else {
        // Pesan error
        $pesan = "Nilai harus berada dalam rentang 0-100!";
        $tipe_pesan = "error";
    }
}

// Ambil data mahasiswa
$data_mahasiswa = $_SESSION['data_mahasiswa'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h2, h3 {
            color: #333;
        }
        
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"], 
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
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
        
        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        
        .alert-error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Sistem Penilaian Mahasiswa</h2>
        
        <!-- Form Input Data -->
        <h3>Input Data Mahasiswa</h3>
        <form method="POST" action="">
            <?php if (isset($pesan)): ?>
            <div class="alert alert-<?= $tipe_pesan ?>">
                <?= $pesan ?>
            </div>
            <?php endif; ?>
            
            <div class="form-group">
                <label for="nama">Nama Mahasiswa:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="matakuliah">Mata Kuliah:</label>
                <input type="text" id="matakuliah" name="matakuliah" required>
            </div>
            
            <div class="form-group">
                <label for="nilai_uts">Nilai UTS:</label>
                <input type="number" id="nilai_uts" name="nilai_uts" min="0" max="100" required>
            </div>
            
            <div class="form-group">
                <label for="nilai_uas">Nilai UAS:</label>
                <input type="number" id="nilai_uas" name="nilai_uas" min="0" max="100" required>
            </div>
            
            <div class="form-group">
                <label for="nilai_tugas">Nilai Tugas:</label>
                <input type="number" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required>
            </div>
            
            <button type="submit">Tambah Data</button>
        </form>

        <!-- Tabel Data Mahasiswa -->
        <h3>Daftar Nilai Mahasiswa</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata kuliah</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Akhir</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_mahasiswa as $index => $mhs) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->matakuliah ?></td>
                        <td><?= $mhs->nilai_uts ?></td>
                        <td><?= $mhs->nilai_uas ?></td>
                        <td><?= $mhs->nilai_tugas ?></td>
                        <td><?= $mhs->nilaiAkhir() ?></td>
                        <td><?= $mhs->kelulusan() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>