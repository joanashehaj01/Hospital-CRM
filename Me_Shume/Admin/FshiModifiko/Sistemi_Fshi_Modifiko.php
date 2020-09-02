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
<link href="../../../stylee.css" rel="stylesheet" type="text/css"/>

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
<li><a href="../../../Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
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
</form><br><br>
<h3 style="text-align: center;color:blue"><b> Fshi,Modifiko dhe Shto Stafin Mjekësor </b></h3>
<p style="text-align:right; color: blue"><i class="arrow right"><a href="../Admin.php"> ← Kthehu tek Profili Admin</a></i></p>
</body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
echo "Gabim ne lidhje".mysqli_errno($conn);
exit;
}

$query = "Select * FROM Doktoret";
$sql = mysqli_query($conn, $query);
echo "<table border='1' color:black align='center'>";
echo "<tr align='center'> </tr>";
echo "<tr align='center'>
<th style='color:black'> Nr. </th>
<th style='color:black'>Emër Mbiemër</th>
<th style='color:black'> CV </th>
<th style='color:black'>Specializimi</th>
<th style='color:black'>Fshi Doktorin</th>
<th style='color:black'>Modifiko Doktorin</th>
<th style='color:black'>Shto Doktorin</th>
</tr>";

$i=0;
while($row = mysqli_fetch_array($sql)){
echo "<tr align='center'>

<td style='color:black'>".++$i."</td>
<td style='color:black'>".$row["Emer_Mbiemer"]."</td>
<td style='color:black'>".$row["CV"]."</td>
<td style='color:black'>".$row["Specializimi"]."</td>
<td style='color:black'><a href='Fshi.php?Id=".$row[0]."'>Fshi Stafin Mjekesor</td>
<td style='color:black'><a href='Modifiko.php?Id=".$row[0]."'>Modifiko Stafin Mjekesor</td>
<td style='color:black'><a href='../Shto Stafin/Shto_stafin_mjekesor.php'> Shto stafin </td>
<tr>";
}
echo "</table>";
mysqli_close($conn);
?>
