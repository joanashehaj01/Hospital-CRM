<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head runat="server"> 
<title>LogIn</title>
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
<link href="../newCascadeStyleSheet.css" rel="stylesheet" type="text/css"/>
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
</body>

<form action="Login.php" method="POST">
<div class="body"></div>
<div class="grad"></div>
<div class="header">
<div style="color:black"><b> LOGIN</b> </div>
</div>
<br>
<div class="login">
<input type="text" placeholder="username" name="email" required><br>
<input type="password" placeholder="password" name="pass" required><br><br>
<input type="submit" name="submit1" value="Login" style="color:black"><br><br>


<div class="loginn">Nëse nuk keni një llogari klikoni këtu ↓ :<br>
<a href="../Rregjistrimi/Rregjistrimi.php">
<input type="button" name="submit2" value="Rregjistrohu" 
style="width: 260px;
height: 35px;
background: #fff;
border: 1px solid #fff;
cursor: pointer;
border-radius: 2px;
color: black;
font-family: 'Exo', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 6px;
margin-top: 10px;">
</a>
</div>
</div>
</form>
</html> 














