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
  <li id="unu"><a href="tabel probe.php" class="active"><b>Tabel probe</b></a></li>
</ul>
<ul id="doi">
 
  <li id="doi"><a href="https://profesorjitaruionel.com">Subiectele din ultimii ani</a></li>
  <li id="doi"><a href="https://www.portalinvatamant.ro/articole/sfatul-specialistului-85/5-trucuri-pentru-a-invata-eficient-inainte-de-evaluarea-nationala-si-bacalaureat-2003.html">Sfaturi pentru învățat</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Știri</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Site-ul oficial al MEN</a></li>
  <li id="doi">  Atestat 2021 MARIN MARIA și PUIA TANIA </li>
</ul>

<div style="margin-left:12%;padding:1px 16px; text-align:center; text-valign:middle; font-family:'Rockwell';">
<h1>Înregistrari probe la alegere</h1>
<hr>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$server='localhost';
$user='bac';
$parola='parola';
$bd='bac';
$proba=$_POST['proba'];
if($proba=='Fizica' or $proba=='Chimie' or $proba=='Biologie' or $proba=='Informatica' or $proba=='Logica' or $proba=='Geografie' or $proba=='Filozofie' or $proba=='Economie' or $proba=='Psihologie' or $proba=='Sociologie')
{$conexiune=mysqli_connect($server,$user,$parola,$bd);
$interogare='select nume,prenume from elevi,probe where probe.id_elev=elevi.id and proba_alegere=';
$interogare.="'".$proba."';";
$rezultat=mysqli_query($conexiune,$interogare);
echo "<table width='75%' align='center' border='1' cellpadding='10'>";
echo "<tr align='center'>";
echo "<td><b>NUME</b><td><b>PRENUME</b>";
while($linie=mysqli_fetch_assoc($rezultat))
{ 
    echo "<tr align='center'>";
	echo "<td>",$linie['nume'],"<td>",$linie['prenume'];
}
mysqli_free_result($rezultat);
mysqli_close($conexiune);
}
 else
	 echo "Proba căutată nu există. Încercați din nou.";
}
else
	{
?>
<form method='post' action='tabel probe.php'>
         Proba: <input type='text' name='proba'><br>
<input type='submit' value="Cauta!">
</form>
<?php
	}
?>
</div>
</body>
</html>