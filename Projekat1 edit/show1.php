<?php

//Konekcija
$conn = mysqli_connect('mysql4.000webhost.com', 'a1829662_Belmo1','vclub.palma','a1829662_Belmo1');

if ( mysqli_connect_errno()) {
  echo mysqli_connect_errno();
  die();

} 

else {
  echo"USPJESNA KONEKCIJA "."<br>";
}
?>
<hr>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Stranica</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="nav.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Projekat</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="index.php">Pocetna</a></li>
            <li><a href="#">Projekti</a></li>
            <li><a href="#">Usluge</a></li>
            <li><a href="#">Download</a></li>
            <li><a href="#">O nama</a></li>
            <li><a href="#">Kontakt</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Vedin Karic</h1>
        <?php 
              $q = "SELECT * FROM projekat1 WHERE id='14' ";
              $query = mysqli_query($conn,$q);
              while ($rezultat = mysqli_fetch_array($query)) {
              echo $rezultat['Kratki_opis']. " " .$rezultat["Dugi_opis"]. " " .$rezultat["Email"]. " " .$rezultat["Grad"]. "<br>";
                }
                ?>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Kontaktiraj</a></p>
      </div>



      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
