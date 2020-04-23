<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>kakkupuoti</title>
        <link rel="icon" type="image/ico" href="chef.png"/>
        <meta charset="UTF-8">
        <link href="tyyli.css" rel="stylesheet" type="text/css" />
</head>


  <body>
<div class="header">
  <h1>Kakkupuoti</h1>
  <p> Elintarvikealan myymälä </p>
</div>

<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">OSAO</a>
    <ul class="main-nav" id="js-menu">
        <li>
            <a href="Etusivu.html" class="nav-links">Etusivu</a>
        </li>
        <li>
            <a href="aukiolo.html" class="nav-links">Aukioloajat</a>
        </li>
        <li>
            <a href="otayhteytta.php" class="nav-links">Ota yhteyttä</a>
        </li>
        <li>
            <a href="tuotteet.php" class="nav-links">Tuotteet</a>
        </li>
        <li>
            <a href="login.php" class="nav-links">Kirjaudu</a>
        </li>
        <li>
            <a href="register.php" class="nav-links">Rekisteröidy</a>
        </li>
    </ul>
</nav>
<br> <div class="tuoteotsikko">
<h2>Esimerkkejä tuotteista</h2><br><br>
<h4>Tällä sivulla näet esimerkkejä myytävistä tuotteista. Tuotteet vaihtelevat päivittäin/viikottain. Kirjautuneena käyttäjänä näet lomakkeen, jonka kautta
voit tilata tuotteita. 
</h4></div>
<br><br>
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "kakkupuoti";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT product_id, nimi, tietoa, pvm FROM tuotteet  ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="uusierittely">';
        echo "Tuotteen nimi: " . $row["nimi"]. "<br>",
        " Päivämäärä:  " . $row["pvm"]. "<br>",
        " Lisätietoa:   " . $row["tietoa"]. "<br>",
        "#" . $row["product_id"];
         echo "<br>";
         echo "<br>";
		 echo '</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="tuote1.jpg">
      <img src="tuote1.jpg" alt="macarons" width="600" height="400">
    </a>
    <div class="desc">Macaronseja</div>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="suklaakakku.jpg">
      <img src="suklaakakku.jpg" alt="suklaakakku" width="600" height="400">
    </a>
    <div class="desc">Suklaakakku</div>
   
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="cupcakes.jpg">
      <img src="cupcakes.jpg" alt="muffinit" width="600" height="400">
    </a>
    <div class="desc">Muffinit</div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="donitsi.jpg">
      <img src="donitsi.jpg" alt="donitseja" width="600" height="400">
    </a>
    <div class="desc">Donitseja</div>
    
  </div>
</div>


  



<div class="clearfix"></div>

<div style="padding:6px;">
  <p></p>
  <p></p>
</div>

</div>

<div class="footer">
  <h2>p. 04000660 2340 <br>
      kakkupuoti@kakkupuoti.fi</h2>
      <a href="https://www.facebook.com/kakkupuotibook/" class="fa fa-facebook"></a>
</div>

</body>
</html>