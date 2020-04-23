<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kakkupuoti</title>
    <link rel="icon" type="image/ico" href="chef.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="tyyli.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">




.form-style-3{
	max-width: 450px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #F072A9;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	padding: 20px;
	background: #FFF4F4;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #FFA0C9;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #903ac2;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:300px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #F072A9;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:70%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #903ac2;
	border: 1px solid #C94A81;
	padding: 5px 15px 5px 15px;
	color: #FFCBE2;
	box-shadow: inset -1px -1px 3px #FF62A7;
	-moz-box-shadow: inset -1px -1px 3px #FF62A7;
	-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.required{
	color:red;
	font-weight:normal;
}
</style>

<body>

<div class="header">
  <h1>Oppipuoti</h1>
  <p> Elintarvikealan myymälä </p>
</div>

<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">OSAO</a>
    <ul class="main-nav" id="js-menu">
        <li>
            <a href="admin-index.php" class="nav-links">Profiili</a>
        </li>
        <li>
            <a href="lisaa.php" class="nav-links">Tuotehallinta</a>
        </li>
        <li>
            <a href="tilit.php" class="nav-links">Käyttäjätilit</a>
        </li>
        <li>
            <a href="admin-orders.php" class="nav-links">Tilaukset</a>
        </li>
        <li>
            <a href="logout.php" class="nav-links">Kirjaudu ulos</a>
        </li>
    </ul>
</nav>

<div class="row">
<div class="side">
<h1> Lisää tuote</h1><br><br>

<div class="form-style-3">
<form action="lisaa.php" method="POST">
<fieldset><legend>Lisää</legend>
<label for="field1"><span>Nimi <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field2"><span>Päivämäärä <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
<label for="field6"><span>Lisätietoa<span class="required">*</span></span><textarea name="field6" class="textarea-field"></textarea></label>
<label><span> </span><input type="submit" name="button1" value="Lähetä" /></label>
</fieldset>
</form>

 <?php
 if (isset($_POST['button1'])) {
 
	
 
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";

	
	
	$nimi = $_POST['field1'];
	$pvm = $_POST['field2'];
	$tietoja= $_POST['field6'];

	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$sql = "INSERT INTO tuotteet (nimi , pvm , tietoa) VALUES( '$nimi', '$pvm', '$tietoja')";

$result = @mysqli_query($link, $sql);	
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Tuote lisätty ")</script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);}
	?>

</form> 



<h1> Poista tuote</h1><br><br>

<div class="form-style-3">
<form action="lisaa.php" method="POST">
<fieldset><legend>Poista</legend>
<label for="numb"><span>Tuotenumero <span class="required">*</span></span><input type="text" class="input-field" name="productid" value="" /></label>
<label><span> </span><input type="submit" name="button2" value="Lähetä" /></label>
</fieldset>
</form>
<?php
 if (isset($_POST['button2'])) {
 
	
 
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";

	
	
	$numero = $_POST['productid'];


	$sql = "DELETE FROM tuotteet WHERE product_id='$numero'";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	


$result = @mysqli_query($link, $sql);	
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Tuote poistettu")</script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);}
	?>
</div>
</div>







<div class="main">
<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";



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
        echo '<div class="erittely">';
        echo "Tuotteen nimi: " . $row["nimi"]. "<br>",
        " Päivämäärä:  " . $row["pvm"]. "<br>",
        " Lisätietoa:   " . $row["tietoa"]. "<br>",
        "#" . $row["product_id"];
         echo "<br>";
		 echo '</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</div>
</div>
</body>
</html>