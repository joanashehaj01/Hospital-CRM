<?php
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email'])) {
header('Location: ../../Login/html.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="lerviz.css" rel="stylesheet" type="text/css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="../../stylee.css" rel="stylesheet" type="text/css"/>
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

<a class="navbar-brand" href="../../index.php">HospitAL </a>
<a href="../../index.php">
<img src="../../Fotot Carousel/foto 5.png"   Height="48px" Width="50px" />
</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
    <li><a href="../../Rreth_Nesh/RrethNesh.php" >Rreth Nesh</a></li>

<li><a href="../../Stafi_Mjekesor/Stafi_Mjekesor.php">Stafi Mjekësor</a></li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Më shumë
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="../SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="2.php">Lër një vizitë online</a></li>
<li><a href="../Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
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
</form>
</body>
<body>

<div class="bg-img">
    <form action="" method="Post" class="containerr">
        <h1 style="color:black">Lër Një Vizitë Online</h1>

    <label><b>Emër Mbiemër</b></label>
    <input type="text" placeholder="Emri Mbiemri" name="emri" required>

    <label><b>Nr.Celularit</b></label>
    <input type="number" placeholder="Numri cel" name="nr" required>
    
    <label><b>Shërbimet Mjekesore</b></label>
    <select name="sherbimet" 
style=" width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;">
<option style="display:none;" selected>Zgjidhni shërbimin mjekësor</option>
<option>Alergologjia</option>
<option>Dermatologji</option>
<option>Kardiokirurgjia</option>
<option>Kirurgjia e përgjithshme</option>
<option>Neurologjia</option>
<option>Okulistika</option>
<option>Endokrinologjia</option>
<option>Hematologjia</option>
<option>Kirurgjia Plastike</option>
<option>Laborator</option>
<option>Ortopedia</option>
<option>Pneumologjia</option>
</select>
<input type="submit" value="Lër një vizitë" name="ler" class="btn" >

  </form>
    
</div>
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
if(isset($_POST["ler"])){
$emri = filter_input(INPUT_POST, 'emri');
$cel = filter_input(INPUT_POST, 'nr');
$sherbimi = filter_input(INPUT_POST,'sherbimet');
$email = $_SESSION['email'];

if(empty($emri) || empty($cel)){
echo '<script> alert("Ju lutem plotesoni emrin,cel dhe sherbimin!")</script>';
}

else{
$sql = "INSERT INTO vizita(Emer_Mbiemer, Nr_Celularit, Sherbimet_Mjekesore,Email) "
. "VALUES ('$emri', '$cel', '$sherbimi', '$email');";
if(mysqli_query($conn, $sql))
{
echo '<script>alert("Vizita u realizua suksesshëm!") </script>';
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
mysqli_close($conn);
}
?>
</body>
</html>