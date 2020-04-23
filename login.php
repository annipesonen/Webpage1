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
<div class="kirjaudu">
<p>&nbsp;</p>
<p><a href="register.php">Klikkaa tästä</a> rekisteröityäksesi. </p>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="250"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
	<p><a href="passwd.php">Salasana unohtunut?</a> </p>
  </table>
</form>
</div>




<div class="footer">
  <h2>p. 04000660 2340 <br>
kakkupuoti@kakkupuoti.fi</h2>
<a href="https://www.facebook.com/kakkupuotibook/" class="fa fa-facebook"></a>
</div>

</body>
</html>