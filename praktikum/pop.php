<?php 
$siswa = [
    [
        "nama" => "Illal",
        "kelas" => "XII RPL 1",
        "alamat" => "Jl. Jendral Sudirman No. 2",
        "nilai" => [
            "mtk" => 70,
            "b.inggris" => 80,
            "b.indonesia" => 90,
            "rpl" => 100
        ]
    ],
    [
        "nama" => "Udin",
        "kelas" => "XII RPL 2",
        "alamat" => "Jl. Jendral Sudirman No. 3",
        "nilai" => [
            "mtk" => 80,
            "b.inggris" => 90,
            "b.indonesia" => 100,
            "rpl" => 70
        ]
    ],
    [
        "nama" => "Cici",
        "kelas" => "XII RPL 3",
        "alamat" => "Jl. Jendral Sudirman No. 4",
        "nilai" => [
            "mtk" => 90,
            "b.inggris" => 100,
            "b.indonesia" => 70,
            "rpl" => 80
        ]
    ]
];

echo "<ol>";
foreach ($siswa as $siswa_list) {
    echo "<li> nama :" . $siswa_list['nama'] . "</li>";
    echo "<li> kelas :" . $siswa_list['kelas'] . "</li>";
    echo "<li> alamat :" . $siswa_list['alamat'] . "</li>";
    echo "<li> nilai :" . "</li>";
    foreach ($siswa_list['nilai'] as $mapel => $nilai) {
        echo "<ul>";
        echo "<li> $mapel : $nilai </li>";
        echo "</ul>";
    }
}
echo "</ol>";

// hapus siswa index ke 1
unset($siswa[1]);
echo "<ol>";
foreach ($siswa as $siswa_list) {
    echo "<li> nama :" . $siswa_list['nama'] . "</li>";
    echo "<li> kelas :" . $siswa_list['kelas'] . "</li>";
    echo "<li> alamat :" . $siswa_list['alamat'] . "</li>";
    echo "<li> nilai :" . "</li>";
    foreach ($siswa_list['nilai'] as $mapel => $nilai) {
        echo "<ul>";
        echo "<li> $mapel : $nilai </li>";
        echo "</ul>";
    }
}

?>