<?php
if(isset($_REQUEST["Id"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$Id = $_REQUEST["Id"];
$sql = mysqli_query($conn,"DELETE FROM Sherbimet_Mjekesore Where Id_sherbimi=$Id");
    
if($sql){    header("Location:fshimodshtosherbim.php");
}

 else {
    echo "Fshirja nuk u realizua suksesshem";
}
}
?>