  <?php
if(isset($_REQUEST["Id"])){ 
    
$id=$_REQUEST["Id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$uemri = trim($_POST["uemer"]);
$ucv = trim($_POST["ucv"]);
$uspecializimi = trim($_POST["uspecializimi"]);


$query="UPDATE Doktoret Set Emer_Mbiemer ='$uemri', CV='$ucv',Specializimi='$uspecializimi' Where Id_Doktori=$id";
$result = mysqli_query($conn,$query);

if(mysqli_affected_rows($conn)>=1){
echo "<p>($id) Record Updated<p>";;
}else{
    echo "<p>($id) Not Updated<p>";
}
}
?>