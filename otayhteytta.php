<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kakkupuoti</title>
    <link rel="icon" type="image/ico" href="chef.png"/>
    <meta charset="UTF-8">
    <link href="tyyli.css" rel="stylesheet" type="text/css" />
</head>

<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #65519c;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4562a0;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</style>

<body>
<div class="header">
  <h1>Kakkupuoti</h1>
  <p> Elintarvikealan myymälä </p>
</div>

<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo"></a>
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
<script>
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});
</script>

<div class="row">
  <div class="side">
    <h2>Ota yhteyttä!</h2>
    <div class="container">
      <form action="otayhteytta.php" method="POST">
        <label for="fname">Etunimi</label>
        <input type="text" id="fname" name="firstname" placeholder="Etunimi..">
    <br>
        <label for="lname">Sukunimi</label> 
        <input type="text" id="lname" name="lastname" placeholder="Sukunimi.."> <br>
        <label for="sposti">Sähköposti</label> 
        <input type="text" id="spost" name="sposti" placeholder="Sähköpostiosoite.."> <br>
        <label for="aihe"> Aihe </label>
        <select id="aihe" name="aihealue">
          <option value="tuotteet"> Tuotteet </option>
          <option value="tilaus">Tilaus</option>
          <option value="tili">Käyttäjätili</option>
          <option value="mielipide">Palaute</option>
        </select> <br>
    
        <label for="comment">Kommentti</label><br><br>
        <textarea id="subject" name="kommentti" placeholder="Kirjoita tähän.." style="height:200px"></textarea>
    
        <input name="button" type="submit" value="Lähetä">
      </form>
    </div>
  </div>

  <?php

    $lahettaja = "test@gmail.com";
    
 if (isset($_POST['button'])) {
    $nimi = $_POST ['firstname'];
	$sukunimi = $_POST['lastname'];
	$sposti = $_POST['sposti'];
	$aihe = $_POST['aihealue'];
    $kommentti = $_POST['kommentti'];
    $to = "@gmail.com";
    $subject = "Yhteydenotto";


    $message = '<html><body>';
    $message .= '<h1> Ota yhteyttä </h1>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Nimi: </strong> </td><td>" . $nimi . "</td></tr>";
    $message .= "<tr><td><strong>Sukunimi: </strong> </td><td>" . $sukunimi . "</td></tr>";
    $message .= "<tr><td><strong>Sähköposti: </strong> </td><td>" . $sposti . "</td></tr>";
    $message .= "<tr><td><strong>Aihe: </strong> </td><td>" . $aihe . "</td></tr>";
    $message .= "<tr><td><strong>Kommentti:</strong> </td><td>" . $kommentti . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";


    $headers = 'From: kakkupuoti  <'.$lahettaja .'>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    mail($to, $subject, $message, $headers);
}

if  (isset($_POST['button'])) {
    echo '<script>alert("Lomake lähetetty. Vastaamme mahdollisimman pian. ")</script>';
	
} 


	?>



  <div class="main">
  <div class="tietoa"><h2>Kakkupuoti</h2> <br><br>
    
    <p>Voit lähettää meille palautetta tai kysyä kysymyksiä tässä osiossa! Pyrimme vastaamaan mahdollisimman nopeasti sähköpostiinne. </p>
    <br>
    <p><strong> testestest <br>
      test<br>
      test<br><br>
      
      Sisäänkäynti ovesta A1</strong></p>  <br><br>
      <p><a href="https://www.facebook.com/kakkupuotibook/">Vieraile facebook-sivuillamme!</a></p>
      <br><br>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13489.434653098577!2d25.51270113284286!3d64.99985345797099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cd452484e151%3A0x966e34ee5a889f12!2sKotkantie%202%2C%2090250%20Oulu!5e0!3m2!1sfi!2sfi!4v1579104213581!5m2!1sfi!2sfi" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>
</div>

<div class="footer">
  <h2>p. 04000660 2340 <br>
kakkupuoti@kakkupuoti.fi</h2>
<a href="https://www.facebook.com/kakkupuotibook/" class="fa fa-facebook"></a>
</div>

</body>
</html>