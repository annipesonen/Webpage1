<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Index</title>
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

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
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
<h1> Admin panel</h1>
<h2> Täällä voit hallinnoida sivustoasi </h2>
</div>





</form> 
</body>
</html>
