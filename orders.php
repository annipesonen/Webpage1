<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Minun tilaukset</title>
<link rel="icon" type="image/ico" href="chef.png" />
<link href="tyyli.css" rel="stylesheet" type="text/css" />
</head>

<body>
<style type="text/css">

.erittely {
    
    width: 600px;
height: 300px;
margin: 0 auto;  
  padding: 30px;
  border: 5px solid gray;
  word-wrap: break-word;
  text-align: center;
  font-size: 18px;
  font-family: serif;
  text-align:center;
}
.tekstiä {
    text-align: center;
    padding:20px;
    font-family: serif;
}

</style>
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
            <a href="member-index.php" class="nav-links">Profiili</a>
        </li>
        <li>
            <a href="orders.php" class="nav-links">Tilaukset</a>
        </li>
        <li>
            <a href="logout.php" class="nav-links">Kirjaudu ulos</a>
        </li>
    </ul>
</nav>
<div class="tekstiä">
<h1>Tilaukset </h1>
<h2> Alle on listattu kaikki omat tilauksesi: </h2>
</div>
<?php
$servername = "localhost";
$username = "user";
$password = "test";
$dbname = "kakkupuoti";

$memberid = $_SESSION ['SESS_MEMBER_ID'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT tilausnum, memberid, nimi, email, puhnro, tuote, tietoja FROM kakkupuoti where memberid=$memberid ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="erittely">';
        echo "Tilausnumero: " . $row["tilausnum"]. "<br>",
        "Member Id: " . $row["memberid"]. "<br",
        "  Nimi:   " . $row["nimi"]. "<br>",
        "   Sähköposti: ". $row["email"] . "<br>",
         "  Puhelinnumero: " . $row["puhnro"]. "<br>",
         "  Tuote: ". $row["tuote"] . "<br>",
          " Tietoja: ". $row["tietoja"] .  "<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
