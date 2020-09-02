<?php
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email'])) {
header('Location: ../../Login/html.php');}
else if($_SESSION['Tipi'] == 'Perdorues'){
   header('Location: ../../index.php');
}
?>
<!DOCTYPE html>
<html>
<head runat="server">
<title> Admin|HospitAL </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../Stylesheet.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
body  {
  background-image: url("https://i.pinimg.com/originals/a8/11/a2/a811a271be7d26f6b72e3ce520c158e2.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position:  right bottom; 
}
</style>
</head>

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
<li><a href="../../Me_Shume/SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../../Me_Shume/Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="../../Me_Shume/Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>

<li><a href="../../Me_Shume/Admin/Admin.php">Admin</a></li>
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

<body>
<form action="" method="POST">
<br/><br/><br/>

<div>

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<!-- The Grid -->
<div class="w3-row-padding">

<!-- Left Column -->
<div class="w3-third">

<div class="w3-white w3-text-grey w3-card-4">
<div class="w3-display-container">
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

$query = "SELECT * FROM Rregjistrimi where Email='joana@gmail.com' limit 1";
$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


$dir_path = "../../Rregjistrimi/imazhe/";
$extensions_array = array('jpg','png','gift','jpeg');
$search_dir = "$dir_path/";
$images = glob("$search_dir/*");
sort($images);

// Image selection and display:

//display first image
if (count($images) > 0) { // make sure at least one image exists
$img = $images[0]; // first image
echo "<br>";
echo "<img src='$img'  width='100%' height='60%'/> ";
} else {
// possibly display a placeholder image?
}
$emri = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["Emri"]."&nbsp;&nbsp".$row["Mbiemri"]. "<br>";    
$adresa = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["Adresa"].","."Albania"."<br>";
$emaili = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row["Email"]."<br>";
$cel = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."0" .$row["Telefoni"]."<br>";
$it = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."IT"."<br>";

mysqli_close($conn);
}
?>
<div class="w3-display-bottomleft w3-container w3-text-white">
<i class="w3-text-white"></i>
<label name="emri" style="font-size: xx-large"><?php echo $emri; ?></label>
</div>
</div>
<br />
<div class="w3-container">
<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><label name="it"><?php echo $it; ?></label></p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><label name="adr"><?php echo $adresa; ?></label></p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><label name="email"><?php echo $emaili; ?></label></p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><label name="cel"><?php echo $cel; ?></label></p>
<hr />
<br>
</div>
</div><br>
<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird">
<div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 style="color:black" class="w3-text-grey w3-padding-16">
    <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Profili Administratorit</h2>
<ul>
<div class="w3-container">

<li><h5 class="w3-opacity">
<a href="FshiModifiko/Sistemi_Fshi_Modifiko.php" style="color:black">Fshij, Modifiko dhe Shto Stafin Mjekësor</a>
</h5></li>
<li><h5 class="w3-opacity">
<a href="fshimodifikoshtosherbim/fshimodshtosherbim.php" style="color:black">Fshij, Modifiko dhe Shto Shërbimin Mjekësor</a>
</h5></li>
<li><h5 class="w3-opacity">
<a href="UserVeprime/fshimodshtouser.php" style="color:black">Fshij, Modifiko dhe Shto një Përdorues</a>
</h5></li>
<li><h5 class="w3-opacity">
<a href="ShifVizitenOnline/ShikoVizitatOnline.php" style="color:black">Shiko Vizitat online</a>
</h5></li>
</div></ul>
</div>
</div>

<!-- End Right Column -->
</div>
<!-- End Grid -->
</div>
<!-- End Page Container -->
</div>
</body>
</div>
</form>
</body>
</html>
