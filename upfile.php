<?php
$conn = mysqli_connect("localhost","root", "", "cloudex");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload File</title>
  <link rel="stylesheet" href="css\css\styleup.css">
</head>
<body>

<?php
 // Cek koneksi ke database
 if ($conn->connect_error) {
  die("Koneksi ke database gagal: " . $conn->connect_error);
}

if (isset($_FILES['file'])) {
  // Mengambil data file yang diupload
  $namaFile = $_FILES['file']['name'];
  $ukuranFile = $_FILES['file']['size'];
  $tipeFile = $_FILES['file']['type'];
  $tmpFile = $_FILES['file']['tmp_name'];

  // Membaca file yang diupload
  $fp = fopen($tmpFile, 'r');
  $isiFile = fread($fp, filesize($tmpFile));
  $isiFile = addslashes($isiFile);
  fclose($fp);

  // Menyimpan data file ke dalam database
  $sql = "INSERT INTO foto (namaFile, ukuranFile, tipeFile, isiFile) VALUES ('$namaFile', '$ukuranFile', '$tipeFile', '$isiFile')";
}

?>
  <h1>Upload File</h1>

  <form class="upload-form" action="upfile.php" method="POST" enctype="multipart/form-data">
    <label for="file">Choose a file:</label>
    <input type="file" id="file" name="file">

    <button type="submit">Upload</button>
  </form>
</body>
</html>
