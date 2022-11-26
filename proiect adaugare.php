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
  <li id="unu"><a href="proiect adaugare.php" class="active"><b>Inscriere</b></a></li>
</ul>
<ul id="doi">
 
  <li id="doi"><a href="https://profesorjitaruionel.com">Subiectele din ultimii ani</a></li>
  <li id="doi"><a href="https://www.portalinvatamant.ro/articole/sfatul-specialistului-85/5-trucuri-pentru-a-invata-eficient-inainte-de-evaluarea-nationala-si-bacalaureat-2003.html">Sfaturi pentru învățat</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Știri</a></li>
  <li id="doi"><a href="https://www.edupedu.ro/">Site-ul oficial al MEN</a></li>
  <li id="doi">  Atestat 2021 MARIN MARIA și PUIA TANIA </li>
</ul>

<div style="margin-left:12%;padding:1px 13px; text-align:center; text-valign:middle; font-family:'Rockwell';">
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$server='localhost';
$user='bac';
$parola='parola';
$bd='bac';
$conexiune=@mysqli_connect($server,$user,$parola,$bd);


$interogare="INSERT INTO elevi(nume,prenume,cnp,initiala_tata,clasa,profil,specializare) VALUES(";// . lipeste siruri
$interogare.="'".$_POST['nume']."',";
$interogare.="'".$_POST['prenume']."',";
$interogare.="'".$_POST['cnp']."',";
$interogare.="'".$_POST['intiala_tata']."',";
$interogare.="'".$_POST['clasa']."',";
$interogare.="'".$_POST['profil']."',";
$interogare.="'".$_POST['specializare']."')";

mysqli_query($conexiune,$interogare);

if(mysqli_affected_rows($conexiune)>0)
	echo "<br><br><br><br><br>Înregistrat cu succes! <br>Pentru continuarea înregistrarii,<b><a href='adaugare probe.php'>mergi la adaugare probe.</a></b>";
else
	echo "Insert fara succes!<br>";

mysqli_close($conexiune);
}
else
{
?>
<h1> <b> Completeaza formularul pentru a te înregistra.</b> </h1>
<pre>
<form method='post' action='proiect adaugare.php'>
         Nume:  <input type='text' name='nume'><br>
      Prenume:  <input type='text' name='prenume'><br>
          CNP:  <input type='text' name='cnp'><br>
Initiala Tata:  <input type='text' name='intiala_tata'><br>
        Clasa:  <input type='text' name='clasa'><br>
       Profil:  <input type='text' name='profil'><br>
 Specializare:  <input type='text' name='specializare'><br>
<input type='submit' value="Adauga inregistrare">
</form>
<pre>
<?php
}
?>
</div>
</body>
</html>