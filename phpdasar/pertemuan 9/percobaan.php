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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengirim Pesan Anonim</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      h1 {
        text-align: center;
        color: #333;
      }

      form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      label {
        display: block;
        margin-bottom: 8px;
      }

      input[type="text"],
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <h1>Pengirim Pesan Anonim</h1>


    <form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">

    <label for="pesan">Pesan</label>
    <input type="text" name="pesan" id="pesan">

      <button type="submit" name="submit">Tambah Data</button>
    </form>
  </body>
</html>