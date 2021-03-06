<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Käyttäjätilit</title>
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
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}






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


/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
            <a href="admin-index.php" class="nav-links">Profiili</a>
        </li>
        <li>
            <a href="lisaa.php" class="nav-links">Lisää tuotteita</a>
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
<div class="tekstiä">
<h1> Käyttäjätilit</h1>
<h2> Hallinnoi käyttäjätilejä </h2>
</div>


<div class="form-style-3">
<form action="tilit.php" method="POST">
<fieldset><legend>Poista</legend>
<label for="numb"><span>Member id<span class="required">*</span></span><input type="text" class="input-field" name="membid" value="" /></label>
<label><span> </span><input type="submit" name="button2" value="Lähetä" /></label>
</fieldset>
</form>

<?php
 if (isset($_POST['button2'])) {
 
	
 
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";

	
	
	$numero = $_POST['membid'];


	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$sql = "DELETE FROM members WHERE member_id='$numero'";


if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Käyttäjä poistettu")</script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);}
	?>

<div class="form-style-3">
<form action="tilit.php" method="POST">
<fieldset><legend>Muokkaa</legend>
<label for="numb"><span>Member id<span class="required">*</span></span><input type="text" class="input-field" name="membid" value="" /></label>
<label for="numb"><span>Etunimi<span class="required">*</span></span><input type="text" class="input-field" name="etu" value="" /></label>
<label for="numb"><span>Sukunimi<span class="required">*</span></span><input type="text" class="input-field" name="suku" value="" /></label>
<label for="numb"><span>Sähköposti<span class="required">*</span></span><input type="text" class="input-field" name="email" value="" /></label>
<label><span> </span><input type="submit" name="button3" value="Lähetä" /></label>
</fieldset>
</form>

<?php
 if (isset($_POST['button3'])) {
 
	
 
	$servername = "localhost";
	$username = "annpeso";
	$password = "kirahvikameli61";
	$dbname = "annpeso";

	
	
	$numero = $_POST['membid'];
    $etu = $_POST['etu'];
    $suku = $_POST['suku'];
    $sposti = $_POST['email'];

	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$sql = "UPDATE members 
SET  firstname='$etu', lastname='$suku', email='$sposti'
WHERE member_id='$numero'";


if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Käyttäjää muokattu")</script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);}
	?>
<?php
$servername = "localhost";
$username = "a";
$password = "";
$dbname = "";

$memberid = $_SESSION ['SESS_MEMBER_ID'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT member_id, firstname, lastname,login, passwd, email FROM members  ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="erittely">';
        echo "Member id: " . $row["member_id"]. "<br>",
        " Etunimi: " . $row["firstname"]. "<br>",
        " Sukunimi:" . $row["lastname"]. "<br>",
        "   Käyttäjätunnus: ". $row["login"] . "<br>",
		 "  Sähköposti:  " . $row["email"]. "<br>"; 
		 echo "<br>";
	
		 echo '</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</form> 
</body>
</html>
