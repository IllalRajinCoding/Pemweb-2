<?php
require_once 'dbkoneksi.php';

// Initialize variables with default values
$kode = $_POST['kode'] ?? null;
$nama = $_POST['nama'] ?? null;
$kaprodi = $_POST['kaprodi'] ?? null;
$_proses = $_POST['proses'] ?? null;

// Validate required fields
if ($_proses === null) {
    die("Error: No operation specified");
}

try {
    $sql = '';
    $ar_data = [];
    $redirect = 'list_prodi.php';

    // Check which operation to perform
    if ($_proses == 'Simpan') {
        // Validate required fields for insert
        if (empty($kode) || empty($nama) || empty($kaprodi)) {
            die("Error: All fields are required for insertion");
        }
        $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?,?,?)";
        $ar_data = [$kode, $nama, $kaprodi];
    } elseif ($_proses == 'update') {
        // Validate required fields for update
        $id_edit = $_POST['id_edit'] ?? null;
        if (empty($kode) || empty($nama) || empty($kaprodi) || empty($id_edit)) {
            die("Error: All fields and ID are required for update");
        }
        $sql = "UPDATE prodi SET kode = ?, nama = ?, kaprodi = ? WHERE id = ?";
        $ar_data = [$kode, $nama, $kaprodi, $id_edit];
    } elseif ($_proses == 'delete') {
        // Validate required field for delete
        $id_hapus = $_POST['id_hapus'] ?? null;
        if (empty($id_hapus)) {
            die("Error: ID is required for deletion");
        }
        $sql = "DELETE FROM prodi WHERE id = ?";
        $ar_data = [$id_hapus];
    } else {
        throw new Exception("Invalid operation");
    }

    // Prepare and execute statement
    $stmt = $dbh->prepare($sql);
    $stmt->execute($ar_data);
    
    // Redirect after successful operation
    header("Location: $redirect");
    exit();
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>