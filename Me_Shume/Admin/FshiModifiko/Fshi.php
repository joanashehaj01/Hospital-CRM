<?php
    if(isset($_REQUEST["Id"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $Id = $_REQUEST["Id"];
    $sql = mysqli_query($conn,"DELETE FROM Doktoret Where Id_Doktori=$Id");

    if($sql){    header("Location:Sistemi_Fshi_Modifiko.php");
    }

     else {
        echo "Fshirja nuk u realizua suksesshem";
    }
    }
?>