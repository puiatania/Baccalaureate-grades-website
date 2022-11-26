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
  <li id="unu"><a href="adaugare probe.php" class="active"><b>Inscriere probe</b></a></li>
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
$server='localhost';
$user='bac';
$parola='parola';
$bd='bac';
$conexiune=@mysqli_connect($server,$user,$parola,$bd);

$id=$_POST['id_elev'];
$p=$_POST['proba_alegere'];
$i1="SELECT * FROM elevi;";
$r1=mysqli_query($conexiune,$i1);
$ok=0;
while($linie=mysqli_fetch_assoc($r1) and !$ok)
	if($linie['id']==$id)
	{
			$specializare=$linie['specializare'];
			$profil=$linie['profil'];
			$ok=1;
	}
mysqli_free_result($r1);
if($profil=="Real")
{
	$p1="Matematica";
	if($specializare=="Matematica-Informatica" or $specializare=="Matematica-Informatica intensiv informatica" or $specializare=="Matematica-Informatica intensiv engleza" or $specializare=="Stiinte ale Naturii")
		if($p!='Fizica' and $p!='Chimie' and $p!='Biologie' and $p!='Informatica')
			$ok=0;
}
else
	if($profil=="Uman")
	{
			$p1="Istorie";
			if($specializare=="Filologie")
			{
				if($p!="Geografie" and $p!="Logica" and $p!="Psihologie" and $p!="Economie" and $p!="Filosofie")
					$ok=0;
			}
			 else
				 if($specializare=="Stiinte Sociale")
			{
				if($p!="Geografie" and $p!="Logica" and $p!="Psihologie" and $p!="Economie" and $p!="Filosofie" and $p!="Sociologie")
					$ok=0;
			}
	}
if($ok)
{
	$interogare='insert into probe (id_elev,proba_obligatorie,proba_alegere) values(';
	$interogare.=$id.",";
	$interogare.="'".$p1."',"."'".$p."');";
	mysqli_query($conexiune,$interogare);
	if(mysqli_affected_rows($conexiune)>0)
	echo "<br><br><br><br><br><b>Înregistrat cu succes! Felicitari ai terminat înscrierea. Mult succes!</b>";
		else
			echo "Insert fara succes!<br>";
}
	else
		echo "<br><br><br><br><b>Proba la alegere nu este conformă. Te rugăm să încerci din nou.</b>";
mysqli_close($conexiune);
}
else
{
?>
<br>
<br>
<br>
<h1><b> Completeaza formularul pentru a înregistra probele.</b> </h1>
<br>
<br>
<pre>
 <form method='post' action='adaugare probe.php'>
                 ID: <input type='text' name='id_elev'><br>
      Proba alegere: <input type='text' name='proba_alegere'><br>


<input type='submit' value="Adauga inregistrare">
</form>
</pre>
<?php
}
?>
</div>
</body>
</html>