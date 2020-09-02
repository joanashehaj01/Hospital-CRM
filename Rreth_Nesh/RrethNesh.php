<?php
session_start(); // Right at the top of your script
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
<link href="../stylee.css" rel="stylesheet" type="text/css"/>
<style>
body  {
  background-image: url("https://www.analyticsindiamag.com/wp-content/uploads/2018/11/race-AI-med-banner.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-position: right; 
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
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
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="RrethNesh.php" >Rreth Nesh</a></li>

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
    
<br />
<br />
<h2><center><b> <span class="auto-style1" style="color:black">HospitAL</span> </b></center></h2>
<div>
<div class="text-justify">
<div class="text-left">
<p>
<span class="auto-style1" style="color:black">HospitAL është qëndra e vetme e vërtetë për shëndetin në të gjithë rajonin e cila siguron trajtim të plotë kardiak që nga diagnostikimi deri te trajtimi dhe më pas ndjekja. 
Dhe kjo është për 24 orë në 24. HospitAL nuk është vetëm një emër, por për të gjithë stafin dhe investitorët është 
një filozofi.Kjo do të thotë se praktikohet mjekësi bashkëkohore sipas direktivave ndërkombëtare. Departamentet bashkëpunojnë me 
njëra-tjetrën në një mënyrë që të arrihet trajtimi dhe kujdesi më i mirë për pacientet . Dhe dicka tjetër shumë e rëndësishme 
është që edhe ana financiare ka çmime fikse për procedurat, pa kosto të mëtejshme apo të fshehta për pacientët dhe familjet e tyre. 
</span>
</p>
</div>
<div>
<br />

&nbsp;&nbsp;&nbsp; <span class="auto-style2" style="color:black"><b>Developed and Design by:</b></span></div><br>
<p><img src="avatarfoto/joana1.bmp" alt="Avatar" class="avatar"><span class="auto-style1" style="color:blue">&nbsp;&nbsp; Joana Shehaj ,</span> <a href="mailto:joana.shehaj@fshnstudent.info" style="color:blue"> www.joanashehaj01@gmail.com </a></p>

</div>
</div>         
<br>
<br />
<br />
<br />
<br />
<br />
<p class="text-justify">
<span class="auto-style1" style="color:black">Për më shumë informacion mund të kontaktoni në emailin e faqes: </span> <a href="mailto:hospital.al@gmail.com" style="color:black"><b>www.hospital.al@gmail.com</b></a>
</p>
<body>
<!--Footer--> 
<footer class="text-center">
<p class="auto-style1" style="color:black"><strong>HospitAL</strong></p> 
<p style="color:black"> &nbsp;&nbsp;&nbsp; All Rights Reserved. 2019 </p>
</footer>
</body>
</html> 
