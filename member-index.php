<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link rel="icon" type="image/ico" href="chef.png" />
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

<h1>Tervetuloa <?php echo $_SESSION['SESS_FIRST_NAME'];?> ! </h1>
  <!-- <a href="member-profile.php">My Profile</a> | <a href="logout.php">Logout</a> | <a href = "orders.php">Tilaukset</a> -->
<br><br>
<h2>Käyttäjätiedot </h2>
<h3> Etunimi: <?php echo $_SESSION ['SESS_FIRST_NAME']; ?> </h3>
<h3> Sukunimi: <?php echo $_SESSION ['SESS_LAST_NAME'] ; ?> </h3>
<br>
<p>Tee tilaus täyttämällä lomake </p><br><br>

<div class="form-style-3">
<form action="member-index.php" method="POST">
<fieldset><legend>Henkilötiedot</legend>
<h3>Member id: <?php echo $_SESSION ['SESS_MEMBER_ID']; ?> </h3><br>
<label for="field1"><span>Nimi <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field2"><span>Sähköposti <span class="required">*</span></span><input type="email" class="input-field" name="field2" value="" /></label>
<label for="field3"><span>Puhelinnumero <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
</fieldset>
<fieldset><legend>Tilaus</legend>
<label for="field4"><span>Tuote</span><select name="field4" class="select-field">
<option value="kakut">Kakut</option>
<option value="leivonnaiset">Leivonnaiset</option>
<option value="lihakalakasvis">liha-, kala- ja kasvisruoat</option>
<option value="jälkiruoat">Jälkiruoat</option>
</select></label>
<label for="field6"><span>Lisätietoa tilauksesta (määrä, tuotetoiveet, päivämäärä yms)<span class="required">*</span></span><textarea name="field6" class="textarea-field"></textarea></label>
<label><span> </span><input type="submit" name="button1" value="Lähetä" /></label>
</fieldset>
</form>
</div>
 <?php
 if (isset($_POST['button1'])) {
 
	
 
	$servername = "localhost";
	$username = "user";
	$password = "test";
	$dbname = "kakkupuoti";

	
	$memberid = $_SESSION ['SESS_MEMBER_ID'];
	$nimi = $_POST['field1'];
	$sposti = $_POST['field2'];
	$puhnro = $_POST['field3'];
  $tuote = $_POST['field4'];
  $tietoja= $_POST['field6'];

	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$lahettaja = "@gmail.com";
    if (isset($_POST['button1'])) {
        $email = $_POST["field2"];
        $nimi = $_POST['field1'];
		$sposti = $_POST['field2'];
		$puhnro = $_POST['field3'];
  		$tuote = $_POST['field4'];
  		$tietoja= $_POST['field6'];
        $to = $email;
		$subject = 'Tilausvahvistus';
		
		$message = '<html><body>';
		$message .= '<h1> Kiitos tilauksestasi! </h1>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Nimi: </strong> </td><td>" . $nimi . "</td></tr>";
		$message .= "<tr><td><strong>Sähköposti:</strong> </td><td>" . $sposti . "</td></tr>";
		$message .= "<tr><td><strong>Puhelinnumero: </strong> </td><td>" . $puhnro . "</td></tr>";
		$message .= "<tr><td><strong>Tuote: </strong> </td><td>" . $tuote . "</td></tr>";
		$message .= "<tr><td><strong>Tietoja:</strong> </td><td>" . $tietoja . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";


        $headers = 'From: Kakkupuoti  <'.$lahettaja .'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        mail($to, $subject, $message, $headers);
	}
 		

	
	$sql = "INSERT INTO kakkupuoti(memberid, nimi , email , puhnro , tuote , tietoja) VALUES( '$memberid','$nimi', '$sposti','$puhnro', '$tuote' , '$tietoja')";
	
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Tilaus vastaanotettu. Lähetimme sinulle sähköpostiin tilausvahvistuksen. Muistathan tarkistaa myös roskapostikansion. ")</script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);}
	?>

</form> 
</body>
</html>
