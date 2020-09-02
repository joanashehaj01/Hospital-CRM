<?php
// Inialize session

session_start();

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

if(isset($_POST["submit1"])){

$email = filter_input(INPUT_POST,'email');
$passwordKoduar = md5($_POST['pass']);

$emri = $row["Emri"];

if(empty($email) || empty($passwordKoduar)){
    
    echo '<script> alert("Ju lutem plotesoni emailin dhe passwordin!")</script>';
     header("refresh:0;url=html.php");
}
 else{
$sql = mysqli_query($conn, "SELECT * FROM rregjistrimi WHERE email = '".$email."' and password = '".$passwordKoduar."'");

 if(mysqli_num_rows($sql) == 1)
    {
     $row = mysqli_fetch_array($sql, MYSQLI_BOTH);
     
     if($row['Tipi'] == 'Admin')
     {
       
      $_SESSION['Tipi'] = $row["Tipi"];
      $_SESSION['email'] = $email;
      $_SESSION['Emri'] = $emri;
      header("Location:../Me_Shume/Admin/Admin.php");
    }
    else if($row["Tipi"] == 'Perdorues'){
      $_SESSION['Tipi'] = $row["Tipi"];
      $_SESSION['email'] = $email;
      
      header("Location:../index.php");
    }
    }
   else
{
      echo '<script> alert("Emaili/Passwordi nuk jane te sakta.Ju lutem provojeni përsëri!") </script>';
      header("refresh:0;url=html.php");
}
    }
}
?>