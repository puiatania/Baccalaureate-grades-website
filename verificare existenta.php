<!DOCTYPE html>
<html lang="en">
<head>
<title>Bacalaureat</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
<style>
.active {
  background-color: #4CAF50;
  color: white;
}

ul#unu {
  list-style-type: none;
  margin: 0;
  padding: 0;
  top: 0px;
  left: 0px;
  right: 0px;
  overflow: hidden;
  background-color: #566BE3;
  position: sticky;
  top: 0;
  font-family: 'Secular One', sans-serif;
}

li#unu {
  float: left;
}

li#unu a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li#unu a:hover {
  background-color: #29367D;
}
ul#doi {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 12%;
  background-color: #72ACE6;
  position: fixed;
  height: 100%;
  overflow: auto;
  font-family:'Rockwell';
}

li#doi a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li#doi a:hover 
{
  background-color: #2463A2;
  color: white;
}
</style>
</head>
<body>


<ul id="unu">
  <li id="unu"><a href="index.php"><b>Înapoi spre Pagina Principală</b></a></li>
  <li id="unu"><a href="verificare existenta.php" class="active"><b>Verificare existenta</b></a></li>
</ul>
<ul id="doi">
 
  <li id="doi"><a href="https://profesorjitaruionel.com">Subiectele din ultimii ani</a></li>
  <li id="doi"><a href="https://www.portalinvatamant.ro/articole/sfatul-specialistului-85/5-trucuri-pentru-a-invata-eficient-inainte-de-evaluarea-nationala-si-bacalaureat-2003.html">Sfaturi pentru învățat</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Știri</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Site-ul oficial al MEN</a></li>
  <li id="doi">  Atestat 2021 MARIN MARIA și PUIA TANIA </li>
</ul>

<div style="margin-left:12%;padding:1px 16px; text-align:center; text-valign:middle; font-family:'Rockwell';">
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$server = 'localhost';
$user = 'bac';
$parola = 'parola';
$bd = 'bac';
$conexiune = @mysqli_connect($server,$user,$parola,$bd);
$conexiune or die("<b>Eroare de conexiune(</b>");
$elev= $_POST['cnp'];
$interogare = 'SELECT * FROM elevi';
$rezultat = @mysqli_query($conexiune,$interogare);
$ok = 0;
while($linie = mysqli_fetch_assoc($rezultat) and $ok == 0)

	if($linie['cnp'] == $elev)
      {
		 $id=$linie['id'];
         $ok = 1;
	  }
      if($ok)
		echo "<br><br><br><br><br><br><b>Elevul este inscris cu ID ",$id,"!</b>";
	else 
		echo "<br><br><br><br><br><br><b><a href='proiect adaugare.php'>Mergi la înscriere!</a></b>";

}
else
{
?>
<br>
<br>
<br>
<br>
<br>
<br>
<h1><b>Înainte de a te înscrie, te rugăm să verificăm împreună dacă nu ai făcut-o deja înainte.</b></h1>
<br>
<br>
<br>
<form method='post' action='verificare existenta.php'>

<b>CNP: </b> <input type='text' name='cnp'><br>

<input type='submit' value="Verifica inregistrare">
</form>
<?php
}
?>
</div>
</body>
</html>