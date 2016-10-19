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
<?php
//Unos u bazu

if (isset($_POST["submit"])) {
  

  $ime =$_POST["ime"];
  $prezime =$_POST["prezime"];
  $email =$_POST["email"];
  $password =$_POST["password"];
  $kratkiOpis =$_POST["kratkiOpis"];
  $DugiOpis =$_POST["DugiOpis"];
  $grad =$_POST["grad"];


 
$q = "INSERT INTO projekat1 (Ime, Prezime, Email, Password, Kratki_opis, Dugi_opis, Grad) VALUES ('$_POST[ime]','$_POST[prezime]','$_POST[email]','$_POST[password]','$_POST[kratkiOpis]','$_POST[DugiOpis]','$_POST[grad]')";
$provjera = mysqli_query($conn,$q);
if ($provjera) {
  echo "Uspjesno uneseno";
}

else{

  echo "Doslo je do greske";
}

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



      <div class="row">

          <div class="col-lg-12">
            

            <form action ="create.php" method="POST">

              <div class="form-group">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime">
              </div>

              <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Prezime">
              </div>

              <div class="form-group">
                <label for="email">Email adresa</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="kratkiOpis">Kratki opis</label>
                <input type="text" class="form-control" id="kratkiOpis" name="kratkiOpis" placeholder="Kratki opis">
              </div>

              <div class="form-group">
                <label id="DugiOpis" for="Dugi opis">Dugi opis</label>
                <textarea  name="DugiOpis" class="form-control" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label name="grad" for="grad">Grad</label>
                <select class="form-control" name="grad">
                  <option>Travnik</option>
                  <option>Sarajevo</option>
                  <option>Zenica</option>
                  <option>Tuzla</option>
                  <option>Mostar</option>
                </select>
              </div>

              <button name="submit" type="submit" class="btn btn-default">Snimi</button>
            </form>
          </div>

      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
