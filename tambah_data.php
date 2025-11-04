<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pengguna (nama, email) VALUES ('$nama', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Tambah Data">
</form>
