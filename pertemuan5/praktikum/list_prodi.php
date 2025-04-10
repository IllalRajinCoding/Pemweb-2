<?php


require_once 'dbkoneksi.php';

// buat query
$sql = "SELECT * FROM prodi ORDER BY kode DESC";
// eksekusi query
$rs = $dbh->query($sql);

?>
<table>
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Kaprodi</th>
        <th>Aksi</th>
    </tr>
    <?php $nomor =1; foreach($rs as $row) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row->kode; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->kaprodi; ?></td>
            <td><a href="editprodi.php?id=<?php echo $row->id; ?>">Edit</a> | <a href="hapusprodi.php?id=<?php echo $row->id; ?>">Hapus</a></td>
        </tr>
    <?php } ?>

</table>