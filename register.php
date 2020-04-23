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

<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>


<div class="register">
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name </th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>Email </th>
      <td><input name="email" type="text" class="textfield" id="email" /></td>
    </tr>
    <tr>
      <th width="124">Login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="passwd" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
</div>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
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