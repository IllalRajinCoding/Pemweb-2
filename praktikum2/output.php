<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form Results</title>
    <!-- Tambahkan Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php

        // Koneksi ke database
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = isset($_POST['name']) ? $_POST['name'] : '';
            $telpon = isset($_POST['tel']) ? $_POST['tel'] : '';
            $tl = isset($_POST['date']) ? $_POST['date'] : '';

            $datauser = array(
                'nama' => $nama,
                'tel' => $telpon,
                'date' => $tl
            );

            echo "<h2> Data dikirim:</h2>";
            echo '<ul class="list-group">';

            foreach ($datauser as $k => $value) {
                if (!empty($value)) {
                    echo '<li class="list-group-item">' . $k . ': ' . $value .
                        '</li>';
                } else {
                    echo '<li class="list-group-item">' . $k . ': ' . 'Tidak
                    diisi' .
                        '</li>';
                }
            }
        }
        ?>

    </div>
</body>

</html>