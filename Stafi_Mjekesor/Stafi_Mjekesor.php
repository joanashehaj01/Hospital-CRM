<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server"> 
<title>HospitAL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="css.css" rel="stylesheet" type="text/css"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
.auto-style1 {
font-size: large;
}
.auto-style2 {
color: #000;
font-size: large;
}
.auto-style3 {
color: #000000;
background-color: #FFFFFF;
}
</style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<form> 
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>

<a class="navbar-brand" href="../index.php">HospitAL </a>
<a href="../index.php">
<img src="../Fotot Carousel/foto 5.png"   Height="48px" Width="50px" />
</a>
</div>
<!--Fillon Menuja-->
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="../Rreth_Nesh/RrethNesh.php" >Rreth Nesh</a></li>

<li><a href="../Stafi_Mjekesor/Stafi_Mjekesor.php">Stafi Mjekësor</a></li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Më shumë
<span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="../Me_Shume/SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../Me_Shume/Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="../Me_Shume/Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
<li><a href="../Me_Shume/Admin/Admin.php">Admin</a></li>
</ul>
</li>

<li>
<?php 
if(!isset($_SESSION['email']))
{
echo '<a href="../Rregjistrimi/Rregjistrimi.php">Rregjistrohu</a>' ;
}
?>
</li>
<li><?php 
if(isset($_SESSION['email']))
{
echo '<a href="../Login/logout.php">Logout</a>' ;

}
else{
echo '<a href="../Login/html.php">Login</a>';
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
</form>
</body>
<br><br>
<table style="background-color: blue">
<center>
<h1 style="color:black;">STAFI MJEKESORE</h1>
</center>
<tr>
<td class="Pershkrim">
    <a href="Doktoret/avni.php">
<img src="Foto/dr.avni.png" alt="Dr.Avni Butka"  Width="227px" Height="261px" />
</a>
</td>

<td>
<a href="Doktoret/entela.php" style="text-decoration:none;color:white;text-align: center"><h2>DR.ENTELA TOPTANI</h2>
    <h6>Dermatologe</h6></a>
</td>

<td class="Pershkrim">
<a href="Doktoret/bilbil.php">
<img src="Foto/dr.bilbili.png" alt="Dr.Bilbil Rakipi" Width="227px" Height="261px"/>
</a>
</td>
<td>
<a href="Doktoret/vjollca.php" style="text-decoration:none;color:white;text-align: center"><h2>DR.VJOLLCA HAXHIA</h2>
    <h6>Neurologe</h6></a>></a>
</td>

<td class="Pershkrim">
<a href="Doktoret/sokolhasa.php">
<img src="Foto/dr.sokol hasa.png" alt="Dr.Sokol Hasa" Width="227px" Height="261px" style="color:black"/>
</a>
</td>

<td>
<a href="Doktoret/teuta.php" style="text-decoration:none;color:white;text-align: center"><h2>DR. TEUTA DERVISHI</h2>
    <h6>Endokrinologe</h6></a>
</td>

</tr>








<tr>
<td>
<a href="Doktoret/avni.php" style="text-decoration:none;color:white;text-align: center"><h2>DR. AVNI BUTKA</h2>
    <h6>Alergolog</h6>
</a>
</td>
<td class="Pershkrim">
<a href="Doktoret/entela.php">
<img src="Foto/dr. entela.png" alt="KDr. Entela Toptani" Width="227px" Height="261px"/>
</a>
</td>
<td>
<a href="Doktoret/bilbil.php" style="text-decoration:none;color:white;text-align: center"><h2>DR.BILBIL RAKIPI</h2>
    <h6>Kardiolog</h6></a>
</td>

<td class="Pershkrim">
<a href="Doktoret/vjollca.php">
<img src="Foto/dr.vjollcahaxhia.png" alt="Dermatologjia" Width="227px" Height="261px" style="color:black">
</a>
</td>

<td>
<a href="Doktoret/sokolhasa.php" style="text-decoration:none;color:white;text-align: center"><h2>DR.SOKOL HASA</h2>
    <h6>Okulist</h6></a>
</td>


<td class="Pershkrim">
<a href="Doktoret/teuta.php">
<img src="Foto/dr teuta.png"  alt="Dr.Teuta Dervishi" Width="227px" Height="261px"/>
</a>
</td>
</tr>    
</table>
</body>
</html>
