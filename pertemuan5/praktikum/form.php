<?php

require_once 'dbkoneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/output.css">
</head>

<body>
    <div class=" w-1/2 mx-auto bg-gradient-to-r from-cyan-50 to-blue-50 shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Prodi</h2>
        <form action="proses_prodi.php" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium" for="nama">Nama</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="nama" name="nama" type="text" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="kode">Kode</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="kode" name="kode" type="text" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="kaprodi">Kaprodi</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="kaprodi" name="kaprodi" type="text" />
            </div>
            <div>
                <input type="submit" name="proses" value="Simpan" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
            </div>
        </form>
    </div>
</body>

</html>