<?php
session_start(); // Right at the top of your script
?>
<html lang="en">
<head runat="server"> 
<title>Rregjistrohu</title>
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
<link href="y.css" rel="stylesheet" type="text/css"/>
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
<img src="../Fotot Carousel/foto 5.png" Height="48px" Width="50px" />

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
echo '<a href="Rregjistrimi.php">Rregjistrohu</a>' ;
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
<body>
    
<form action="" method="POST">
<table border="0" text align="center">
<br>
<th>
<h1 style="font-size:38px;color: black"><b> Rregjistrohu</b></h1></th>
<div class="login">
<tr><td><label style="font-size:18px;color: black"><b>Emri:</b></label>
<td><input type="text"  name="emri" placeholder="Emri"  ><br/><br/></td><td>
</tr>

<tr>
    <td><label style="font-size:18px;color: black"><b>Mbiemri:</b></label>
<td><input type="text" name="mbiemri"  placeholder="Mbiemri" ><br/><br/></td><td>
</tr>

<tr>
    <td><label style="font-size:18px;color: black"><b> Email:</b></label>
<td><input type="email" name="email" placeholder="Email" ><br/><br/></td></td>
</tr>


<tr>
    <td><label style="font-size:18px;color: black"><b> Telefoni:</b></label>
<td><input type="number" name="cel"  placeholder="Telefoni"><br/><br/></td></td>
</tr>

<tr>
<td><label style="font-size:18px;color: black"><b> Rrethi:</b></label>
<td><select name="ddl" style="width: 250px;
	height: 30px;
	background: white;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;">
<option style="display:none">Zgjidhni rrethin:</option>
<option>Berat</option>
<option>Bulqizë</option>
<option>Delvinë</option>
<option>Devoll</option>>
<option>Dibër</option>
<option>Durrës</option>
<option>Elbasan</option>
<option>Fier</option>
<option>Gjirokastër</option>
<option>Gramsh</option>
<option>Has</option>
<option>Kavajë</option>
<option>Kolonjë</option>
<option>Korçë</option>
<option>Krujë</option>
<option>Kuçovë</option>
<option>Kukës</option>
<option>Kurbin</option>
<option>Lezhë</option>
<option>Librazhd</option>
<option>Lushnje</option>
<option>Malësisë e Madhe</option>
<option>Mat</option>
<option>Mirditë</option>
<option>Peqin</option>
<option>Përmet</option>
<option>Pogradec</option>
<option>Pukë</option>
<option>Sarandë</option>
<option>Shkodër</option>
<option>Skrapari</option>
<option>Tepelenë</option>
<option>Tiranë</option>
<option>Tropojë</option>
<option>Vlorë</option>
    </select><br/><br/></td></td>
</tr>

<tr>
<td><label style="font-size:18px;color: black"><b> Adresa:</b></label>
<td><input type="text" name="adresa"  placeholder="Adresa"><br/><br/></td>
</tr>

<tr>
    <td><label style="font-size:18px;color: black"><b> Password:</b></label>
    <td><input type="password" name="t4"  placeholder="Password"><br/><br/></td></td>
</tr>


<tr>
    <td><label style="font-size:18px;color: black"><b>Konfirmo Password:</b></label>
    <td><input type="password" name="kp" placeholder="Konfirmo Password"><br/><br/></td></td>
</tr>


<tr>
<td colspan="2" style="font-size:18px;color: black">
    <input type="submit" name="submit1" value="Rregjistrohu" class="btn"/>
    <br><br>
    <a href="../Login/html.php">
        <input type="button" name="submit2" value="Logohu" class="btn">
    </a>
</td>

</tr>
<br><br><br>
<tr>
<td><div id="d1" style="color:green; text-align: left"></div> 
</td>
</tr>
</table>
</form>
    </body>

    

<?php
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Lidhja dështoj: " . mysqli_connect_errno());
}

$validime_array=array();

if(isset($_POST["submit1"]))
{

//vendos inputet    
$passKoduar = md5($_POST['t4']);
$konfirmoPass=md5($_POST['kp']);
$emer = trim($_POST["emri"]);
$mbiemer = trim($_POST["mbiemri"]);
$email = trim($_POST["email"]);
$tel = trim($_POST["cel"]);
$adr = trim($_POST["adresa"]);
$rrethi=trim($_POST["ddl"]);
$tipi = "Perdorues";

if (empty($emer)){
$validime_array[]="Fusha e emrit duhet të plotësohet!";
}
 
if (empty($mbiemer)){
$validime_array[]="Fusha e mbiemrit duhet të plotësohet!";
}

if (empty($email)){
$validime_array[]="Fusha e emailit duhet të plotësohet!";
}

if (empty($tel)){
$validime_array[]="Fusha e tel duhet të plotësohet!";
}

if (strlen($tel) < 10){
$validime_array[]=" Tel nuk duhet të ketë më pak se 10 shifra!";}

if (empty($passKoduar)){
$validime_array[]="Fusha e Passwordit duhet të plotësohet!";
}

if(empty($konfirmoPass)){
$validime_array[]="Fusha e Konfirmo Password duhet të plotësohet!";
}


if (empty($adr)){
$validime_array[]="Fusha e adreses duhet te plotesohet!";
}


if (empty($rrethi)){
$validime_array[]="Fusha e rrethit duhet te plotesohet!";
}

if ($passKoduar!= $konfirmoPass){
$validime_array[]="Passwordet duhet te perputhen!";}

if (strlen($passKoduar) < 8 ){
$validime_array[]="Password duhet te kete me teper se 8 karaktere!";}

if(empty($validime_array)){
    
$query = "INSERT INTO rregjistrimi(Emri,Mbiemri,Email,Password,Telefoni,Adresa,Rrethi,Tipi)
VALUES ('$emer', '$mbiemer', '$email', '$passKoduar', '$tel', '$adr', '$rrethi','$tipi');";

$count=0;
$res = mysqli_query($conn,"select * from rregjistrimi where email='$_POST[email]'");
$count= mysqli_num_rows($res);

if($count>0)
{
?>
<script type="text/javascript">
document.getElementById("d1").innerHTML = "Ky email ekziston ne databaze!";
</script>
<?php
}
else
{
if(mysqli_query($conn, $query));
?>
<script type="text/javascript">
document.getElementById("d1").innerHTML = "U rregjistruat me sukses!";
</script>
<?php
}
}


else {
echo "<ul style='text-align: left'>";
foreach($validime_array as $value){
echo "<li style='color:red'>". $value . "</li>";
}
echo "</ul>";
}
mysqli_close($conn);
}
?>

</html>