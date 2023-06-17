<?php
$conn = mysqli_connect("localhost","id20907097_root", "p%4S&=sA8WUhY>cb", "id20907097_cloudex");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $foto = $_FILES['foto']['name'];
  $temp = $_FILES['foto']['tmp_name'];
  $folder = "uploads/";

  move_uploaded_file($temp, $folder.$foto);

  $tanggal_upload = date('Y-m-d H:i:s');
  $sql = "INSERT INTO savefoto (nama_file, tanggal_upload) VALUES ('$foto', '$tanggal_upload')";
  if (mysqli_query($conn, $sql)) {
    echo "Foto berhasil diupload dan disimpan di database.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload Foto</title>
  <link rel="stylesheet" type="text/css" href="css\css\styleupload.css">
</head>
<body>
  <h1>Upload Foto</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="foto" accept="image/*" required>
    <button type="submit" name="submit">Upload</button>
  </form>
</body>
</html>
