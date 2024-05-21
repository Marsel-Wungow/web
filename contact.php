<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "homepage");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

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
  
  // Query untuk memasukkan data
  $query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
  if (mysqli_query($conn, $query)) {
    return mysqli_affected_rows($conn);
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    return 0;
  }
}

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
  // Cek apakah data berhasil dikirimkan
  if (tambah($_POST) > 0) {
    echo "
    <script>
    alert('Pesan berhasil dikirimkan');
    document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Pesan gagal dikirimkan');
    document.location.href = 'index.php';
    </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <form action="contact.php" method="post" class="contact-form">
    <h2>Contact</h2>
    <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit" name="submit">Kirim</button>
</form>

<div class="contact-icons">
    <a href="https://youtube.com/@MarselWungow target="_blank">
      <img src="img/youtube.png" alt="Youtube">
    </a>
    <a href="https://twitter.com/Phineas_1603" target="_blank">
      <img src="img/twitter logo_icon.png" alt="Twitter">
    </a>
    <a href="https://github.com/Marsel-Wungow" target="_blank">
      <img src="img/github.png" alt="Github">
    </a>
    <a href="https://www.instagram.com/accelerator_16" target="_blank">
      <img src="img/instagram logo_icon.png" alt="Instagram">
    </a>
  </div>
</body>
</html>
