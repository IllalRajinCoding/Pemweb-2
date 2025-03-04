<?php
// Array skill dengan bobot
$skills = [
    "html" => ["name" => "HTML/CSS", "point" => 20],
    "js" => ["name" => "JavaScript", "point" => 20],
    "rwd" => ["name" => "RWD Bootstrap", "point" => 20],
    "php" => ["name" => "PHP", "point" => 30],
    "py" => ["name" => "Python", "point" => 30],
    "java" => ["name" => "Java", "point" => 50]
];

// Array prodi
$prodi_list = [
    "si" => "Sistem Informasi",
    "ti" => "Teknik Informatika",
    "bd" => "Bisnis Digital"
];

// Array gender
$gender_list = [
    "l" => "Laki-Laki",
    "p" => "Perempuan"
];

// Inisialisasi variabel
$nim = $nama = $gender = $prodi = $email = $domisili = '';
$selected_skills = [];
$total_point = 0;

// Proses form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $domisili = isset($_POST['domisili']) ? $_POST['domisili'] : '';

    // Proses checkbox skill yang dipilih
    if (isset($_POST['skill']) && is_array($_POST['skill'])) {
        $selected_skills = $_POST['skill'];

        // Hitung total point berdasarkan skill yang dipilih
        foreach ($selected_skills as $skill) {
            if (isset($skills[$skill])) {
                $total_point += $skills[$skill]["point"];
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                            <div class="mb-3">
                                <h5>Informasi Pribadi</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="30%">NIM</th>
                                        <td><?php echo htmlspecialchars($nim); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?php echo htmlspecialchars($nama); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo isset($gender_list[$gender]) ? $gender_list[$gender] : ''; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Program Studi</th>
                                        <td><?php echo isset($prodi_list[$prodi]) ? $prodi_list[$prodi] : ''; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Domisili</th>
                                        <td><?php echo htmlspecialchars($domisili); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo htmlspecialchars($email); ?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="mb-3">
                                <h5>Skill Web & Programming</h5>
                                <?php if (!empty($selected_skills)): ?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Skill</th>
                                                <th>Point</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($selected_skills as $skill):
                                                if (isset($skills[$skill])):
                                            ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $skills[$skill]['name']; ?></td>
                                                        <td><?php echo $skills[$skill]['point']; ?></td>
                                                    </tr>
                                            <?php
                                                endif;
                                            endforeach;
                                            ?>
                                            <tr class="table-primary">
                                                <th colspan="2" class="text-end">Total Point</th>
                                                <th><?php echo $total_point; ?></th>
                                            </tr>
                                        </tbody>
                                    </table>

                                <?php else: ?>
                                    <div class="alert alert-warning">
                                        Tidak ada skill yang dipilih.
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="text-end mt-4">
                                <a href="index.php" class="btn btn-secondary">Kembali ke Form</a>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                Tidak ada data yang dikirim. Silakan isi form terlebih dahulu.
                            </div>
                            <div class="text-center">
                                <a href="index.php" class="btn btn-primary">Kembali ke Form</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Function untuk mendapatkan kategori skill berdasarkan total point
    function getSkillCategory($point)
    {
        if ($point >= 100) {
            return "Sangat Baik";
        } elseif ($point >= 60) {
            return "Baik";
        } elseif ($point >= 40) {
            return "Cukup";
        } elseif ($point > 0) {
            return "Kurang";
        } else {
            return "Tidak Memadai";
        }
    }
    ?>
</body>

</html>