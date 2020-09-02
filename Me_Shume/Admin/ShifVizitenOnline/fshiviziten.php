<?php
if(isset($_REQUEST["Id"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$Id = $_REQUEST["Id"];
$sql = mysqli_query($conn,"DELETE FROM Vizita Where SSN=$Id");
    
if($sql){    header("Location:ShikoVizitatOnline.php");
}

 else {
    echo "Fshirja nuk u realizua suksesshem";
}
}
?>