<?php
$conn = mysqli_connect("localhost","id20907097_root", "p%4S&=sA8WUhY>cb", "id20907097_cloudex");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloudex</title>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700&display=swap" rel="stylesheet">

<!--Feather-->
<script src="https://unpkg.com/feather-icons"></script>

<!-- Style -->

    <link rel="stylesheet" href= "css\css\styles.css">
</head>

</body> 

<nav class="navbar">
    <a href="#" 
    class="navbar-logo">Cloudex</a>


    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="upload.php">Upload File</a>
        <a href="#contact">Service</a>
    </div>



 <div class="navbar-extra">
 </div>
</nav>


<section class="hero" id="home">
    <main class="content">
        <h1>Save <span>Your File</span></h1>
        <a href="upload.php" class="cta">Go To Cloud</a>
    </main>
</section>


<?php
$conn = mysqli_connect("localhost","id20907097_root", "p%4S&=sA8WUhY>cb", "id20907097_cloudex");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    // ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // query insert data
    $query = "INSERT INTO contact
                VALUES
                ('', '$nama', '$email', '$message')
                ";

    mysqli_query($conn, $query);
}
?>

<section class="contact" id="contact">

        <div class="container"> 

            <div class="title" data-aos="fade-up">
                <h2 class="titleText">Contact Us</h2>
                <p> Email Us for Service </p>
            </div>

            <div class="box">

                <div class="contactForm" data-aos="fade-right">

                    <h3> Send Message </h3>
            <form action="" method="post">
                    <div class="inputBox" data-aos="fade-right" data-aos-delay="20">
                        <label for="name"></label>
                        <input type="text" name="nama" placeholder="Nama" id="name" required>
                    </div>
                    <div class="inputBox" data-aos="fade-right" data-aos-delay="40">
                        <label for="email"></label>
                        <input type="text" name="email" placeholder="Email" id="email" required>
                    </div>
                    <div class="inputBox" data-aos="fade-right" data-aos-delay="60">
                        <label for="message"></label>
                        <input type="text" name="message" placeholder="Message" id="message" required></input>
                    </div>
                    <div class="inputBox" data-aos="fade-right" data-aos-delay="80">
                    <button type="submit" name="submit"> SEND DATA </button>
                    </div>
            </form>
                </div>

                </div>

            </div>

        </div>

    </section>



<footer>
    <div class="socials">
        <a href="https://twitter.com/home?lang=en-id"><i 
            data-feather="twitter"></i></a>
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="upload.php">Upload File</a>
        <a href="#contact">Service</a>
    </div>

    <div class="credit">
        <p>Created by: <a href="">Kelompok 1 Kelas H</a>. 
            | &copy; 2023.</p>
    </div>

</footer>



<!--feather-->
<script>
    feather.replace()
  </script>

  <!--Javascript-->
  <script src="js\script.js"></script>
</body>
</html>
