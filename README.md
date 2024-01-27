<?php

require 'function.php';
$pesananonim = query("SELECT * FROM pesananonim");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(isset($_POST["submit"])) {

    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'percobaan.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'percobaan.php';
        </script>
        ";
    }
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: gradientBackground 10s infinite alternate;
        }

        @keyframes gradientBackground {
            0% {
                background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            }
            25% {
                background: linear-gradient(45deg, #fad0c4, #a18cd1);
            }
            50% {
                background: linear-gradient(45deg, #a18cd1, #ff9a9e);
            }
            75% {
                background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            }
            100% {
                background: linear-gradient(45deg, #fad0c4, #a18cd1);
            }
        }

        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
    <div>
    <h1>Pengirim Pesan Anonim</h1>


    <form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">

    <label for="pesan">Pesan</label>
    <input type="text" name="pesan" id="pesan">

      <button type="submit" name="submit">Tambah Data</button>
    </form>
    </div>
  </body>
</html>
