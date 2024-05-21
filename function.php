<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "homepage");

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];  
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data){
  global $conn;

  $name = htmlspecialchars($data["name"]);
  $email = htmlspecialchars($data["email"]);
  $message = htmlspecialchars($data["message"]);
  

 // query insert data
  $query = "INSERT INTO contact
  VALUES
  ('', '$name', '$email', '$message')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


?>