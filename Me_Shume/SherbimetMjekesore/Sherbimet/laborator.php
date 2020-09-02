<?php session_start();?>
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
<link href="../../../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
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
<img src="../../../Fotot Carousel/foto 5.png"   Height="48px" Width="50px" />
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
<li><a href="../../../Me_Shume/SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../../../Me_Shume/Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="../../../Me_Shume/Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>

<li><a href="../../../Me_Shume/Admin/Admin.php">Admin</a></li>
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
<form action="" method="POST"></form>
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



$query = "SELECT * FROM Sherbimet_Mjekesore where Titulli='Laborator'";
$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){


$dir_path = "../../Admin/Shto Sherbimin/imazhe/";
$extensions_array = array('jpg','png','gift','jpeg');
$search_dir = "$dir_path/";
$images = glob("$search_dir/*");
sort($images);

// Image selection and display:

//display first image
if (count($images) > 0) { // make sure at least one image exists
$img = $images[7]; // first image
echo "<br>";
echo "<img src='$img' height='450' width='100%' /> ";
} else {
// possibly display a placeholder image?
}

printf ("%s \n",$row[1]);
printf ("<br>");
printf ("<br>");
printf ("%s \n",$row[2]);
}
?>
