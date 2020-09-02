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


<?php
if(isset($_REQUEST["Id"])){
$id=$_REQUEST["Id"];

$conn = mysqli_connect("localhost", "root","", "hospital");
    
if (!$conn) {
echo "Probleme me lidhjen: " . mysqli_connect_errno();
exit;
}
$query = "SELECT * FROM Rregjistrimi Where ID=$id";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

if(isset($_POST["edit"])){
        $emri = filter_input(INPUT_POST,'emri');
        $mbiemri =  filter_input(INPUT_POST,'mbiemri');
        $email = filter_input(INPUT_POST,'email');
        $tel =  filter_input(INPUT_POST,'tel');
        $rrethi = filter_input(INPUT_POST,'rrethi');
        $adresa =  filter_input(INPUT_POST,'adresa');
        $tipi = filter_input(INPUT_POST,'tipi');
      
        $sql="UPDATE Rregjistrimi SET Emri='".$emri."', Mbiemri='".$mbiemri."', Email='".$email."', Telefoni='".$tel."', Rrethi='".$rrethi."', Adresa='".$adresa."', Tipi='".$tipi."' WHERE ID=".$id;
        $res = mysqli_query($conn,$sql );
        echo $res;
    if($res)
        { echo 'Update u be me sukses!'; 
    header("Location:fshimodshtouser.php");
       
}
else
    {echo 'Update nuk u be suksesshem!';}
}
?>
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
</form>
</body>
<br>
<br>
<br>
<form action="modifikouser.php?Id=<?php echo $id;?>" method="POST">
<table style="text-align: left">
<tr><td style="color:black">Emri<br><td><input type="text" style="color:black" name="emri" value="<?php echo $row[2];?>"/></td></td></tr>
<tr><td style="color:black"> Mbiemri <td><input type="text" name="mbiemri" style="color:black" value="<?php echo $row[3];?>"/></td></td></tr>
<tr><td style="color:black">Email<br><td><input type="text" style="color:black" name="email" value="<?php echo $row[1];?>"/></td></td></tr>
<tr><td style="color:black"> Telefoni <td><input type="text" name="tel" style="color:black" value="<?php echo $row[5];?>"/></td></td></tr>
<tr><td style="color:black">Rrethi<br><td><input type="text" style="color:black" name="rrethi" value="<?php echo $row[6];?>"/></td></td></tr>
<tr><td style="color:black"> Adresa <td><input type="text" name="adresa" style="color:black" value="<?php echo $row[7];?>"/></td></td></tr>
<tr><td style="color:black">Tipi<br><td><input type="text" style="color:black" name="tipi" value="<?php echo $row[8];?>"/></td></td></tr>
 
       
<tr><td colspan="2"> <input type="submit" style="color:black" value="Modifiko Përdoruesin" id="edit" name="edit" /></td>
</tr>
</table>
</form>

<?php mysqli_close($conn);}

 else {
header ("Location:index.php");    
} 
?>

    