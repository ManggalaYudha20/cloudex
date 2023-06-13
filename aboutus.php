<?php
$conn = mysqli_connect("localhost","root", "", "cloudex");

$resultnama = mysqli_query($conn, "SELECT * FROM timfoto");
?>


<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <link rel="stylesheet" href="css\css\styleabout.css">
</head>
<body>
  <h1>About Us</h1>

  <h2>Anggota Tim:</h2>
  <?php while ($row = mysqli_fetch_assoc($resultnama)) : ?>
  <div class="member">
    <img src="css\img\<?php echo $row["foto"]; ?>" widht="50">
    <div class="member-info">
      <h3><?php echo $row["nama"]; ?></h3>
      <h4><?php echo $row["nim"]; ?></h4>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>