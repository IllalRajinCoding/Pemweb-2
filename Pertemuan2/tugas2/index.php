<?php
// Array nama-nama kota di Indonesia
$kota = [
    "Jakarta" => "Jakarta",
    "Surabaya" => "Surabaya",
    "Bandung" => "Bandung",
    "Medan" => "Medan",
    "Semarang" => "Semarang",
    "Makassar" => "Makassar",
    "Palembang" => "Palembang",
    "Yogyakarta" => "Yogyakarta",
    "Denpasar" => "Denpasar",
    "Balikpapan" => "Balikpapan",
    "Padang" => "Padang",
    "Manado" => "Manado",
    "Malang" => "Malang",
    "Batam" => "Batam",
    "Pekanbaru" => "Pekanbaru"
];

// Array skill dengan bobot
$skills = [
    "html" => ["name" => "HTML/CSS", "point" => 20],
    "js" => ["name" => "JavaScript", "point" => 20],
    "rwd" => ["name" => "RWD Bootstrap", "point" => 20],
    "php" => ["name" => "PHP", "point" => 30],
    "py" => ["name" => "Python", "point" => 30],
    "java" => ["name" => "Java", "point" => 50]
];

$selected_kota = isset($_POST['domisili']) ? $_POST['domisili'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <style>
        .bootstrap-iso .formden_header h2,
        .bootstrap-iso .formden_header p,
        .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: black
        }

        .bootstrap-iso form button,
        .bootstrap-iso form button:hover {
            color: white !important;
        }

        .asteriskField {
            color: red;
        }
    </style>
</head>

<body>
    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
    <div class="bootstrap-iso">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form method="post" action="progres.php">
                        <div class="form-group ">
                            <label class="control-label " for="nim">
                                NIM
                            </label>
                            <input class="form-control" id="nim" name="nim" type="text" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="nama">
                                Nama Lengkap
                            </label>
                            <input class="form-control" id="nama" name="nama" type="text" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="gender">
                                Jenis Kelamin
                            </label>
                            <select class="select form-control" id="gender" name="gender">
                                <option value="l">
                                    Laki-Laki
                                </option>
                                <option value="p">
                                    Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="prodi">
                                Program Studi
                            </label>
                            <select class="select form-control" id="prodi" name="prodi">
                                <option value="si">
                                    Sistem Informasi
                                </option>
                                <option value="ti">
                                    Teknik Informatika
                                </option>
                                <option value="bd">
                                    Bisnis Digital
                                </option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="control-label ">
                                Skill Web & Programming
                            </label>
                            <div class=" ">
                                <?php foreach ($skills as $key => $skill): ?>
                                <div class="checkbox">
                                    <label class="checkbox">
                                        <input name="skill[]" type="checkbox" value="<?php echo $key; ?>" />
                                        <?php echo $skill["name"]; ?> (<?php echo $skill["point"]; ?> point)
                                    </label>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="domisili">
                                Domisili
                            </label>
                            <select class="select form-control" id="domisili" name="domisili">
                                <?php foreach ($kota as $value => $label): ?>
                                <option value="<?php echo $value; ?>" <?php echo ($selected_kota == $value) ? 'selected' : ''; ?>>
                                    <?php echo $label; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="email">
                                Email
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="email" name="email" type="text" />
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary " name="submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
