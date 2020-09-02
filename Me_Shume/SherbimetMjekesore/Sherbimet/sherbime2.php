<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sherbimet Mjekesore</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link href="2.css" rel="stylesheet" type="text/css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../../Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
.auto-style1 {
font-size: large;
}
.auto-style2 {
color: #000;
font-size: large;
}
.auto-style3 {
color: #000000;
background-color: #FFFFFF;
}
</style>
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

<li><a href="sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="../../Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="../../Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
<li><a href="../../Admin/Admin.php">Admin</a></li>
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



<body>
<div class="container gallery-container">
<h2 style="color:black;text-align: center;">SHËRBIMET MJEKËSORE</h2>
<div class="tz-gallery">

<div class="row">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/alergologjia.png">
<img src="../Foto/alergologjia.png" alt="Alergologjia">
</a>
<div class="caption">
<a href="Alergologjia.php">
<h3>ALERGOLOGJIA</h3>
<p style="text-align:justify">
Alergologjia eshte nje sherbim qe trajton semundjet si:
•	astma
•	riniti alergjik
•	sinusiti
•	urtikaria

</p></a>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/dermatologji.png">
<img src="../Foto/dermatologji.png" alt="Dermatologjia">
</a>
<div class="caption">
<a href="Dermatologjia.php">
<h3>DERMATOLOGJIA</h3>
<p style="text-align:justify">
Sëmundjet e lëkurës janë të shumta, por vetëm disa prej tyre detyrojnë pacientët që të paraqiten tek mjeku dhe të marrin mjekim. 
</p></a>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/kardiokirurgji.png">
<img src="../Foto/kardiokirurgji.png" alt="Kardiokirurgji">
</a>
<div class="caption">
<a href="Kardiokirurgji.php">
<h3>KARDIOKIRURGJIA</h3>
<p style="text-align:justify">
Shërbimi i Kardiokirurgjisë është një shërbim plotësisht i konsoliduar dhe një nga më të shquarit e qendrës sonë spitalore.
</p></a>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/endokrinologji.png" alt="Endokrinologji">
<img src="../Foto/endokrinologji.png" alt="Endokrinologji">
</a>
<div class="caption">
<a href="endokrinologji.php">
<h3>ENDOKRINOLOGJIA</h3>
<p style="text-align:justify">
Endokrinologjia është një pjesë e mjekësisë interne, po ashtu ka edhe kirurgji endokrine.Gjëndra endokrine quhen ato gjëndra, të cilat japin prodhimet e tyre brenda në trup.
</p></a>
</div>
</div>
</div>



<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/neurologji.png">
<img src="../Foto/neurologji.png" alt="Neurologji">
</a>
<div class="caption">
<a href="Neurologji.php">
<h3>NEUROLOGJIA</h3>
<p style="text-align:justify">
Sëmundjet vaskulare cerebrale (Aksidentet vaskulare cerebrale) – Ishemia dhe hemorragjia cerebrale;
Diagnostikimi i malformacioneve të vazave cerebrale (Aneurizma, AV, kavernoma etj)
</p></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/okulistike.png">
<img src="../Foto/okulistike.png" alt="Okulistik">
</a>
<div class="caption">
<a href="Okulistike.php">
<h3>OKULISTIKA</h3>
<p style="text-align:justify">
Okulistika është dega e mjekësisë e cila merret me sëmundjet e kirurgjisë dhe rrugeve vizive, duke përfshirë të syve, trurit, dhe zonat përreth syve, të tilla si:
sistemi lakrimal dhe lotimi.
</p></a>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/hematologji.png" alt="Hematologjia">
<img src="../Foto/hematologji.png" alt="Hematologjia">
</a>
<div class="caption">
<a href="hematologji.php">
<h3>HEMATOLOGJIA</h3>
<p style="text-align:justify">
Hematologjia është shkenca e cila merret me studimin e gjakut. Për këtë qëllim përdorë disa 
mënyra ndër të cilat është e njohur analizat e gjaku nëpërmjet të cilës mblidhen shënime mbi 
gjendjen e gjakut në një qenie.
</p></a>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/pneumologji.png" alt="Pneumologji">
<img src="../Foto/pneumologji.png" alt="Pneumologji">
</a>
<div class="caption">
<a href="pneumologji.php">
<h3>PNEUMOLOGJIA</h3>
<p style="text-align:justify">
Pneumologjia është degë e mjekësisë së brendshme (interne), 
e cila merret kryesisht me sëmundjet e mushkërive.
</p></a>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/otopedi.png" alt="Ortopedia">
<img src="../Foto/otopedi.png" alt="Ortopedia">
</a>
<div class="caption">
<a href="otopedi.php">
<h3>ORTOPEDI</h3>
<p style="text-align:justify">
Ortopedia ose kirurgjia (gjithashtu dha ortopedi) është dega e kirurgjisë në fjalë që kanë të bëjnë me kushtet e sistemit muskuloskeletal.
</p></a>
</div>
</div>
</div>

</div>



<div class="row">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/kirurgji e pergjithshme.png" alt="Kirurgji e pergjithshme">
<img src="../Foto/kirurgji e pergjithshme.png" alt="Kirurgji e pergjithshme">
</a>
<div class="caption">
<a href="Kirurgjia.php">
<h3>KIRURGJIA E PËRGJITHSHME</h3>
<p style="text-align:justify">
Kirurgjia është një shërbim që përdorë teknikata të dobishme për të hetuar dhe/ose i trajtojnë një gjendje patologjike 
të tilla si sëmundje apo lëndim.
</p></a>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/laborator.png" alt="Laborator">
<img src="../Foto/laborator.png" alt="Laborator">
</a>
<div class="caption">
<a href="laborator.php">
<h3>LABORATOR</h3>
<p style="text-align:justify">
Laboratori është qendër ose institucion që bën eksperimente e kërkime në një fushë të shkencës a të teknikës, 
analiza e prova të ndryshme sipas kërkesave të prodhimit, të mjekësisë etj.
</p></a>
</div>
</div>
</div>  


<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<a class="lightbox" href="../Foto/kirurgji plastike.png" alt="Kirurgjia plastike">
<img src="../Foto/kirurgji plastike.png" alt="Kirurgjia Plastike">
</a>
<div class="caption">
<a href="kirurgjiaplastike.php">
<h3>KIRURGJIA PLASTIKE</h3>
<p style="text-align:justify">
Kirurgjia plastike është një procedurë kirurgjikale specifike, e cila kryhet nga kirurgët të kualifikuar 
për të riparuar lëkurën dhe indet që mund të kenë pasur dëmtime nga sëmundje të ndryshme etj.
</p></a>
</div>
</div>
</div>
</div> 



</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
<!-- Footer -->
<footer class="text-center">
<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
<span class="glyphicon glyphicon-chevron-up"></span>
</a><br><br>

<p class="auto-style1"><strong>HospitAL</strong></p> 
<p>
<span style=" font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color:rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
<span class="auto-style5" style="color:black">© 2019 HospitAL. All Rights Reserved.</span></span></p>
</footer>
</body>
</html>