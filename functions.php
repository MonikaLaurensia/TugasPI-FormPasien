<?php 

include "connection.php";

function query($query){
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}


function tambah($data) {
    global $conn;
  //ambil data dari tiap elemen dalam form
  $no_rk = htmlspecialchars($data["no_rk"]);
  $name = htmlspecialchars($data["name"]);
  $gender = htmlspecialchars($data["gender"]);
  $age = htmlspecialchars($data["age"]);
  $no_hp = htmlspecialchars($data["no_hp"]);
  $address = htmlspecialchars($data["body"]);
  $poli = htmlspecialchars($data["poli"]);

  // query insert data
  $query = "INSERT INTO pasien
              VALUES
              ('','$no_rk','$name','$gender','$age','$no_hp','$address','$poli')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
  //ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $no_rk = htmlspecialchars($data["no_rk"]);
  $name = htmlspecialchars($data["name"]);
  $gender = htmlspecialchars($data["gender"]);
  $age = htmlspecialchars($data["age"]);
  $no_hp = htmlspecialchars($data["no_hp"]);
  $address = htmlspecialchars($data["body"]);
  $poli = htmlspecialchars($data["poli"]);

  // query insert data
  $query = "UPDATE pasien SET 

            no_rk = '$no_rk',
            name = '$name',
            gender = '$gender',
            age = '$age',
            no_hp = '$no_hp',
            address = '$address',
            poli = '$poli'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn; 
    mysqli_query($conn, "DELETE FROM pasien WHERE id = $id");

    return mysqli_affected_rows($conn);

} 



