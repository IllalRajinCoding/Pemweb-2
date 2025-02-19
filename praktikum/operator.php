<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Kalkulator</h2>
        <label for="">Angka 1</label>
        <input type="number" name="angka1">
        <br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2">
        <br>
        <label for="">Operasi</label>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
        <br>
        <label for=""></label>
    </form>
    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
        }

        echo "Hasil dari $angka1 $operasi $angka2 = $hasil
        ";

        define('phi', 3.14);
        $jari =8;
        $luas = phi * $jari * $jari;
        $keliling = 2 * phi * $jari;
        echo "Luas Lingkaran = $luas";
        echo "Keliling Lingkaran = $keliling";
    }
    ?>
</body>

</html>