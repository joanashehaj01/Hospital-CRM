<?php
$titulli = $_GET["titulli"];
echo $titulli;
$conn = mysqli_connect("localhost","root","","hospital");

if(!$conn){
echo "Gabim ne lidhje".mysqli_errno($conn);
exit;
}

$query = "Select * From sherbimet_mjekesore Where Titulli = '".$titulli."'";
$result = mysqli_query($conn, $query);

echo "<table border='1' align='center'>";
echo "<br>";
echo "<br>";
echo "<tr align='center'>
<th style='color: black'><b>Titulli</b></th>
<th style='color: black'><b>Pershkrimi</b></th>
</tr>";
$row = mysqli_fetch_array($result);
echo "<tr align='center'>
<td style='color: black'>".$row["Titulli"]." </td>
<td style='color: black'> ".$row["Pershkrimi"]." </td>
</tr>";

echo "</table>";
?>
