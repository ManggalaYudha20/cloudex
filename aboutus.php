<?php
$conn = mysqli_connect("localhost","id20907097_root", "p%4S&=sA8WUhY>cb", "id20907097_cloudex");

$resultus = mysqli_query($conn, "SELECT * FROM about");
?>



<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <link rel="stylesheet" type="text/css" href="css\css\styleabout.css">
</head>
<body>
  <h1>About Us</h1>
  <h1>Tim Pengembang Cloudex</h1>
  <?php while ($row = mysqli_fetch_assoc($resultus)) : ?>
  <table>
    <tr>
      <th>Foto</th>
      <th>Nama</th>
      <th>NIM</th>
    </tr>
    <tr>
      <td><img src="css\img\<?php echo $row["foto"]; ?>" widht="50"></td>
      <td><?php echo $row["nama"]; ?></td>
      <td><?php echo $row["nim"]; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
