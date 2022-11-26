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
  <li id="unu"><a href="proiect.php" class="active"><b>Stergere inregistrare</b></a></li>
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
if($_SERVER['REQUEST_METHOD']=='POST')
{
	// Eliminare persoana selectata din tabela
	$server='localhost';
	$user='bac';
	$parola='parola';
	$bd='bac';
	$conexiune=mysqli_connect($server,$user,$parola,$bd);
	$interogare='delete from elevi where id=';
	$interogare.=$_POST['id_persoana'];
	mysqli_query($conexiune,$interogare);
	if(mysqli_affected_rows($conexiune)!=1)
		echo "<h1>Eliminare fara succes!</h1>";
	else
		echo "<br><br><br><br><h1>Eliminare cu succes! <a href='stergere proba.php'> Trebuie să ștergi și probele înregistrate </a></h1>";
	mysqli_close($conexiune);
}
else
{
?>
<br>
<br>
<br>
<h1><b> Pentru a șterge înregistrarea ta, te rugăm sa te selectezi. </b><h1>
<form method='post' action='proiect.php'
onsubmit="return confirm('Esti sigur ca vrei sa stergi persoana selectata?')">
<select name='id_persoana'>
<?php
$server='localhost';
$user='bac';
$parola='parola';
$bd='bac';
$conexiune=mysqli_connect($server,$user,$parola,$bd);
$interogare='select * from elevi';
$rezultat=mysqli_query($conexiune,$interogare);
while($linie=mysqli_fetch_assoc($rezultat))
{
	echo "<option value='".$linie['id']."'>";
	echo $linie['id'],": ",$linie['nume']," ",$linie['prenume']," ",$linie['initiala_tata']," ",$linie['clasa']," ",$linie['profil']," ",$linie['specializare'];
	echo "</option>";
	
}
mysqli_free_result($rezultat);
mysqli_close($conexiune);
?>
</select>
<input type='submit' value='Sterge persoana selectata!'>
</form>
<?php
} // de la else
?>
</div>
</body>
</html>