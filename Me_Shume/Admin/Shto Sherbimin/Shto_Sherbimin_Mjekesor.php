<?php
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email'])) {
header('Location: ../../../Login/html.php');
}
else if($_SESSION['Tipi'] == 'Perdorues'){
   header('Location: ../../../index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="../../../stylee.css" rel="stylesheet" type="text/css"/>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>

<a class="navbar-brand" href="../../../index.php">HospitAL </a>
<a href="../../../index.php">
<img src="../../../Fotot Carousel/foto 5.png"  Height="48px" Width="50px" />
</a>
</div>
<!--Fillon Menuja-->
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="../../../Rreth_Nesh/RrethNesh.php" >Rreth Nesh</a></li>

<li><a href="../../../Stafi_Mjekesor/Stafi_Mjekesor.php">Stafi Mjekësor</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Më shumë
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="../../SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../../Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="../../Me_Shume/Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
<li><a href="../Admin.php">Admin</a></li>
</ul>
</li>

<li>
<?php 
if(!isset($_SESSION['email']))
{
echo '<a href="../../../Rregjistrimi/Rregjistrimi.php">Rregjistrohu</a>' ;
}
?>
</li>

<li><?php 
if(isset($_SESSION['email']))
{
echo '<a href="../../../Login/logout.php">Logout</a>' ;

}
else{
echo '<a href="../../../Login/html.php">Login</a>';
}
?> 
<li style="color:white"><?php
if(isset($_SESSION['email'])){
echo $_SESSION['email'];
echo "<br>";?>
<span style="color: #31b0d5"><?php
echo $_SESSION['Tipi'];
}
?>
</li>
</ul>
</div>
</div>
</nav>   
</body>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<table border="0" text align="center">
<br>
<br>
<h1 text align="center" style="color:black">&nbsp; Shto Shërbimin Mjekësor</h1><p style="text-align:right; color: blue"><i class="arrow right"><a href="../Admin.php"> ← Kthehu tek Profili Admin</a></i></p>
 
<h5 style="color: red">Plotësoni kutizat me informacionet përkatëse! Shërbimin mjekësor duhet të përmbajnë një përshkrim për atë shërbim që po shtohet.
</h5>
<tr><td>
Titulli :<td><input type="text" name="titulli" Width="400px" style="color:black" required/><br/><br></td>
</td></tr>
<tr><td>
Përshkrimi:<td><textarea rows="9" cols="50" name="pershkrimi" placeholder="Pshm: Dermatologjia është degë e mjekësisë që merret me sqarimin, mjekimin dhe përkujdesjen e pacientëve me sëmundje ngjitëse dhe jo-ngjitëse si dhe me tumoret e lëkurës." style="color:black" required></textarea><br/></td>
</td></tr>

<tr><td>
Përzgjidhni një foto: <td><input type="file" name="choose" required/><br>
<br/><br/></td>
</tr>



<tr><td>
<input type="submit" id="shto" name="shto" value="Shto Shërbimin Mjekësor" style="color:black"/></td>
<td><div id="d1" style="color: green"></div></td>
</tr>
<br>
</table>
</form>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Lidhja dështoj: " . $conn->connect_error);
}

if(isset($_POST["shto"]))
{

if($_FILES["choose"]["error"]>0){
echo "Error ". $_FILES["choose"]["error"];
} else{ $tmp_name = $_FILES["choose"]["tmp_name"];
$name = $_FILES["choose"]["name"];
$type= $_FILES["choose"]["type"];
$size= $_FILES["choose"]["size"];
$direktoria="imazhe/".$name;
if($type != "image/jpg" && $type != "image/png" && $type != "image/jpeg" && $type !=
"image/gif" ) {
echo "Tipet e suportuara per imazh jane jpg, png, jpeg, gif";
}else{
move_uploaded_file($tmp_name, $direktoria);
echo "File u ngarkua me sukses!";
} } 



$titull = filter_input(INPUT_POST, 'titulli');
$pershkrimi = filter_input(INPUT_POST,'pershkrimi');
$email = $_SESSION['email'];

if(empty($titull) || empty($pershkrimi) || empty($direktoria)){
    echo '<script> alert("Ju lutem plotesoni titullin, pershkrimin dhe ngarkoni nje foto!")</script>';
}

else{
$query = "INSERT INTO sherbimet_mjekesore(Titulli,Pershkrimi,Email)
VALUES ('$titull', '$pershkrimi', '$email');";

//ekzekutimi i querit
if(mysqli_query($conn, $query))
{
echo '<script>alert("Të dhënat u shtuan në databazë") </script>';
}
else {
echo "Error: " . $query . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
</body>
</html>
