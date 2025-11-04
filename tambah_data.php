<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Contoh menambahkan data ke tabel "siswa"
$sql = "INSERT INTO siswa (nama, umur) VALUES ('Nofalia', 20)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
