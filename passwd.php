<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tilaa uusi salasana kakkupuodin sivuille!</title>
<link href="tyyli.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<div class="salasana">
<form id="passwd" name="passwd" method="post" action="passwd.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    
	<h2 align="center"> Anna sähköpostiosoite ja tilaa uusi salasana! </h2>
    <tr>
      <td><b>Sähköpostiosoite</b></td>
      <td><input name="sposti" type="email" class="textfield" id="email" /></td>
    </tr>

    <form method ="post">
      <td><input type="submit" name="button1" value="Tilaa uusi salasana" /></td>
    </form>
	
  </table>
</div>
 <?php
	
   
    if (isset($_POST['button1'])) {
        $email = $_POST["sposti"];
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        $passwd = substr(str_shuffle($chars), 0, 8);
        $to = $email;
	    $subject = 'Uusi salasana';
        $message = 'Tervetuloa!' . ''
                . 'Uusi salasana : ' . $passwd . ''
                . 'Voit nyt kirjautua tällä salasanalla';
        $headers = 'From: Your name <'.$email .'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        mail($to, $subject, $message, $headers);
	}
$servername = "localhost";
	$username = "user";
	$password = "testtt";
	$dbname = "kakkupuoti";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE members SET passwd='$passwd'  WHERE email='$email'"; 
//'".md5('$newpasswd')."'
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    
} else {
    echo "Error updating record: " . mysqli_error($conn);

}

mysqli_close($conn);
   
	
	
    ?>
</form>







</body>
</html>
