<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Kërko shërbimin mjekësor</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link href="2.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="../../stylee.css" rel="stylesheet" type="text/css"/>
<style>
    
body  {
    
  background-image: url("https://cdn.dribbble.com/users/832254/screenshots/2137577/medical-emergencies.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: bottom right; 
  background-size: 470px 300px;
}
</style>

<script type="text/javascript">
function Afisho(){
var titulli = document.getElementById("titulli").value;
var xmlhttp;
if(window.XMLHttpRequest)
{xmlhttp= new XMLHttpRequest();}
else
if(window.ActiveXObject)
{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
else
{alert("Your browser does not support XMLHTTP!");}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4){
var div=document.getElementById("rezultat");
div.innerHTML = xmlhttp.responseText;
}
}
url='insert.php?titulli='+titulli;
xmlhttp.open("GET",url,true);
xmlhttp.send();

}
</script>
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

<a class="navbar-brand" href="../../index.php">HospitAL </a>
<a href="../../index.php">
<img src="../../Fotot Carousel/foto 5.png"   Height="48px" Width="50px" />
</a>
</div>
<!--Fillon Menuja-->
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="../../Rreth_Nesh/RrethNesh.php" >Rreth Nesh</a></li>
<li><a href="../../Stafi_Mjekesor/Stafi_Mjekesor.php">Stafi Mjekësor</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Më shumë
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="../SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
<li><a href="../Admin/Admin.php">Admin</a></li>
</ul>
</li>

<li>
<?php 
if(!isset($_SESSION['email']))
{
echo '<a href="../../Rregjistrimi/Rregjistrimi.php">Rregjistrohu</a>' ;
}
?>
</li>
<li><?php 
if(isset($_SESSION['email']))
{
echo '<a href="../../Login/logout.php">Logout</a>' ;

}
else{
echo '<a href="../../Login/html.php">Login</a>';
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
<br><br><br>
<body>
  <h5 style="color: black">Ju lutem përzgjidhni një nga shërbimet me poshtë:</h5>
  <select style="color: black" name="titulli" id="titulli" onchange="Afisho()">
  <option style="display:none">Perzgjidhni nje sherbim mjekesor:</option>
  <option value="ALERGOLOGJIA">ALERGOLOGJIA</option>
  <option value="DERMATOLOGJIA">DERMATOLOGJIA</option>
  <option value="KARDIOKIRURGJIA">KARDIOKIRURGJIA</option>
  <option value="KIRURGJIA">KIRURGJIA</option>
  <option value="NEUROLOGJIA">NEUROLOGJIA</option>
  <option value="OKULISTIKA">OKULISTIKA</option>
  <option value="ENDOKRONOLOGJIA">ENDOKRINOLOGJIA</option>
  <option value="HEMATOLOGJIA">HEMATOLOGJIA</option>
  <option value="KIRURGJI PLASTIKE">KIRURGJIA PLASTIKE</option>
  <option value="LABORATOR">LABORATOR</option>
  <option value="PNEUMOLOGJIA">PNEUMOLOGJIA</option>
  </select>
    <div style="color: black" id="rezultat"></div>
</body>
</html>