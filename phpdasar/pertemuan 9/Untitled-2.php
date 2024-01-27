<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


$result = mysqli_query($conn, "SELECT * FROM pesananonim");


// while( $pam = mysqli_fetch_assoc($result) ) {
// var_dump($pam);
// }
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

    <form action="/proses_pesan" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required />

      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" rows="4" required></textarea>

      <button type="submit">Kirim Pesan</button>
    </form>

    <table border="1px" cellpadding="10" cellspacing=""0>
      <tr>
        <th>no</th>
        <th>aksi</th>
        <th>nama</th>
        <th>pesan</th>
      </tr>

      <?php
      while( $row = mysqli_fetch_assoc($result) ) :
      ?>

      <tr>
        <td>1</td>
        <td>
          <a href="">ubah</a>
          <a href="">hapus</a>
        </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nama"]; ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </body>
</html>
