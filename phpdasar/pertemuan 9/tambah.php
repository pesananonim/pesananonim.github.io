<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(isset($_POST["submit"])) {


    $nama  = $_POST["nama"];
    $pesan = $_POST["pesan"];

    global $conn;

    $query = "INSERT INTO pesananonim
            VALUES 
            ('$nama', '$pesan')
            ";
   mysqli_query($conn, $query);


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MAHASISWA</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
        </ul>
        <ul>
            <li>
                <label for="pesan">Pesan</label>
                <input type="text" name="pesan" id="pesan">
            </li>
        </ul>
        <ul>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
</body>
</html>