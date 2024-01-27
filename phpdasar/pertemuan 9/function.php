<?php
$conn = mysqli_connect("sql107.infinityfree.com", "u954815338_pesananonim", "Muhamadirfan1234.", "u954815338_phpdasar");



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
global $conn;
$nama  = htmlspecialchars($data["nama"]);
$pesan = htmlspecialchars($data["pesan"]);



$query = "INSERT INTO pesananonim
VALUES 
('$nama', '$pesan')
";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);

}

function hapus($nama) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pesananonim WHERE id = $nama");
    return mysqli_affected_rows($conn);
}

?>
