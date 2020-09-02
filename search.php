<html>
<head><title>Search</title></head>
<body>
<br>
<form action="" method = "Post">
Search: <input type="text" name="kerko"/>
<br><br>
<input type="submit" name="search" value="Kerko" />
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

if(isset($_POST["search"]))
{
$kerko=trim($_POST["kerko"]);

if (empty($kerko)){
    
$validime_array[]="Fusha e search duhet të plotësohet!";
}

if(empty($validime_array)){
    
$query = "Select * From sherbimet_mjekesore WHERE Titulli LIKE '".$kerko."%'";
$res = mysqli_query($conn,$query);

$msg = mysqli_num_rows($res);

if($msg >= 1){  
    
?>
<script type="text/javascript">
document.getElementById("d1").innerHTML = "Filtrimi u krye me sukses!";
</script>
<?php
   
    
echo "<table border='hidden' color:black align='center'>";
echo "<tr align='center'> </tr>";
echo "<tr align='center'>
<th style='color:black'> Nr. </th>
<th style='color:black'>Titull</th>
<th style='color:black'> Pershkrimi </th>
<th style='color:black'>Email</th>
<th style='color:black'>Foto</th>
</tr>";

$i=0;
while($row = mysqli_fetch_array($res, MYSQLI_BOTH)){
echo "<tr align='center'>

<td style='color:black'>".++$i."</td>
<td style='color:black'>".$row["Titulli"]."</td>
<td style='color:black'>".$row["Pershkrimi"]."</td>
<td style='color:black'>".$row["Email"]."</td>
<td style='color:black'>".$row["Foto"]."</td>
<tr>";
}
echo "</table>";
}

 else {
     
?>
<script type="text/javascript">
document.getElementById("d2").innerHTML = "Nuk ka asnje te dhene per kete sherbim!";
</script>
<?php
}
}

if (empty($kerko)){
    ?>
<script type="text/javascript">
document.getElementById("d2").innerHTML = "Ju lutem plotesoni fushen!";
</script>
<?php
   
}

mysqli_close($conn);
}
?>


</html>