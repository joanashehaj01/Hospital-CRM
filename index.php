<?php
session_start(); // Right at the top of your script
?> 
<!DOCTYPE html>
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
<link href="Stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="stylee.css" rel="stylesheet" type="text/css"/>
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

<a class="navbar-brand" href="index.php">HospitAL </a>
<a href="index.php">
<img src="Fotot Carousel/foto 5.png"   Height="48px" Width="50px" />
</a>
</div>
<!--Fillon Menuja-->
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="Rreth_Nesh/RrethNesh.php" >Rreth Nesh</a></li>

<li><a href="Stafi_Mjekesor/Stafi_Mjekesor.php">Stafi Mjekësor</a></li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Më shumë
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="Me_Shume/SherbimetMjekesore/Sherbimet/sherbime2.php">Shërbimet Mjekësore</a></li>
<li><a href="Me_Shume/Ler_nje_vizite/2.php">Lër një vizitë online</a></li>
<li><a href="Me_Shume/Kerko sherbimin mjekesor/Kerko sherbimin mjekesor ddl.php">Kërko Shëbimin Mjekësor</a></li>
<li><a href="Me_Shume/Admin/Admin.php">Admin</a></li>
<li><a href="Search.php">Search</a></li>
</ul>
</li>

<li>
<?php 
if(!isset($_SESSION['email']))
{
echo '<a href="Rregjistrimi/Rregjistrimi.php">Rregjistrohu</a>' ;
}
?>
</li>

<li><?php 
if(isset($_SESSION['email']))
{
echo '<a href="Login/logout.php">Logout</a>' ;

}
else{
echo '<a href="Login/html.php">Login</a>';
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

<!--Foto karosel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="Fotot Carousel/foto cover 1.jpg" alt="" width="1000" height="700"/>
<div class="carousel-caption">
</div>      
</div>

<!--Foto karosel 2-->
<div class="item">
<img src="Fotot Carousel/foto cover 2.jpg" alt="" width="1000" height="700"/>
<div class="carousel-caption">
</div>      
</div>

<!--Foto karosel 3-->
<div class="item">
<img src="Fotot Carousel/foto cover 3.jpg" alt="" width="1000" height="700"/>
<div class="carousel-caption">
</div>      
</div> 

<!--Foto karosel 4-->
<div class="item">
<img src="Fotot Carousel/foto cover 4.jpg" alt="" width="1000" height="700"/>
<div class="carousel-caption">
</div>      
</div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<br />
<br />

<!--AboutUs-->
<div class="w3-container w3-padding-32" id="projects">
<div class="about-top-grids">
<div class="col-md-7 about-top-grid">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><center><b>Përse HospitAL?</b></center></h3>
<div class="about-para">
<p style="color:black" style="text-align:justify">
Nëse ke një të sëmurë në shtëpi, zëre se janë të gjithë në familje të sëmurë. 
Situata vështirësohet, veçanërisht në ato raste kur një nga njerëzit tonë më të dashur ka probleme me zemrën. 
Ndërhyrjet kirurgjikale në zemër janë nga më të vështirat, por në  HospitAL këto probleme mund të korigjohen me 
ndërhyrje minimale. Veçantia në HospitAL është ndërhyrja minimale, kjo do të thotë ndërhyrje ku nuk hapet toraksi 
plotësisht, por bëhen prerje në madhësinë 7 deri në 8 cm, çfarë mundëson një proces shërimi më të shpejtë. 
Përveç kësaj në HospitAL realizohen edhe riparime edhe rikonstruksione të kllapave të zemrës. 
Kjo do të thotë që pacientit nuk i zëvendësohen kllapat e zemrës, por i riparohen duke mos i zëvendësuar me artificale. 
Falë ndërhyrjes minimale , pacienti mund të shkojë në shtëpi pas 7 deri në 10 ditë. 
Jeta normale mund të rifillohet pas operacionit të zemrës mbas 6 deri në 8 javë. 
Por shëtitjet në ajër të pastër mund të fillojnë që pas 5 deri 6 ditësh. 
HospitAL nuk është vetëm një emër, ne ofrojmë mjekësinë dhe cilësinë për të gjithë pacientët tanës.
</p>
</div>
</div>
<!--Videoja-->
<div class="col-md-5 pope banner-agileits-btm" id="video">
<div class="button">
<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>
</div>
<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
<div class="agileits_modal_body">
<iframe src="https://player.vimeo.com/video/116177386" width="500px" height="310px"></iframe>
</div>
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>

<br />
<br />
<br />

<div class="container-fluid text-center bg-grey">
<h2 class="auto-style3"><b>Paketat Check Up në HospitAL </b></h2><br />
<div class="row text-center">
<div class="col-sm-4">
<div class="thumbnail"> 
<a href="#demo1" data-toggle="collapse">
<img src="Paketat e Check up-it/Fotot/nen 40.png" Width="550px" Height="300px"/>
</a>   
<p style="color:black"><strong><span style="auto-style2">FEMRAT NËN 40 VJEÇ</span></strong></p>
<div id="demo1" class="collapse"> 

<p style="text-align:justify" class="w3-text-grey" style="color:black">Gjak komplet, Eritrosendimeti, Urinë Komplet, Eritrosendimeti, 
Urinë Komplet, Glicemi esëll, Lipidogramë,  Azotemi, Creatinemi, Uricemi (Acid Urik), Alt (SGPT), Ast (SGOT), 
Ultratingulli i gjinjeve, Ultratingulli i abdomenit, Pap Test, Vizitë gjinekologjike, Radiografia e organeve toakale P.A.,
Ekg – incizim me interpretim, Antigeni HBSAultra, Ac.Anti- HCV, Konsultë Psikologu.
</p>
</div>
</div>  
</div>


<div class="col-sm-4">
<div class="thumbnail"> 
<a href="#demo2" data-toggle="collapse">
<img src="Paketat e Check up-it/Fotot/femra mbi 40.jpg" Width="450px" Height="300px" />
</a>
<p style="color:black"><strong>FEMRAT MBI 40 VJEÇ</strong></p>
<div id="demo2" class="collapse">

<p style="color:black" style="text-align:justify" class="w3-text-grey">Mamografia 41306,Vizitë gjineokologjike, Ac.Anti – HIV duo, Stres Test (Tredmil), Gjak komplet, 
Eritrosendimeti, Urinë Komplet Glicemi esëll, Lipidogramë, Azotemi, Creatinemi, Uricemi (Acid Urik), Alt (SGPT), 
Ast (SGOT), Ultratingulli i gjinjeve, Ultratingulli i abdomenit,Pap Test, Vizitë gjinekologjike, 
Radiografia e organeve toakale P.A., Ekg – incizim me interpretim, Antigeni HBSAultra, Ac.Anti- HCV, Konsultë Psikologu
</p>
</div>
</div>  
</div> 


<div class="col-sm-4">
<div class="thumbnail">
<a href="#demo4" data-toggle="collapse">
<img src="Paketat e Check up-it/Fotot/meshkuj mbi 40.jpg" Width="450px" Height="300px" />
</a>
<p style="color:black"><strong>MESHKUJT MBI DHE NËN 40 VJEÇ</strong></p>
<div id="demo4" class="collapse">
<p style="color:black" style="text-align:justify" class="w3-text-grey">Mamografia 41306, Vizitë gjineokologjike, Ac.Anti – HIV duo, Stres Test (Tredmil),Gjak komplet
Urinë Komplet, Glicemi esëll, Lipidogramë, Azotemi, Creatinemi, Uricemi (Acid Urik), Alt (SGPT), Ast (SGOT), 
Ultratingulli i gjinjeve, Ultratingulli i abdomenit, Pap Test, Vizitë gjinekologjike, Radiografia e organeve toakale P.A.,
Ekg – incizim me interpretim, Antigeni HBSAultra, Ac.Anti- HCV, Konsultë Psikologu
</p>
</div>
</div>
</div>
</div>      
</div>


<!-- Shërbimet që ofrojmë -->
<div class="container-fluid text-center">
<h2><b><span class="auto-style3">Shërbimet që ofrojmë</span></b></h2>
<br>
<div class="row">
<div class="col-sm-4">
<span class="glyphicon glyphicon-plane"></span>
<h4 style="color:black">Shërbim të urgjencës</h4>
<p style="color:black">Shërbimi i urgjencës 24 orë në dispozicionin tuaj.</p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-phone"></span>
<h4 style="color:black">24/7 Shërbim</h4>
<p style="color:black">Kontaktin me ne mund ta keni të vazhdueshëm në çdo orë ,në çdo ditë.</p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-education"></span>
<h4 style="color:black">Staf I Kualifikuar</h4>
<p style="color:black">Pranë nesh gjeni doktorët më të kualifikuar shqiptarë dhe të huaj.</p>
</div>
</div>
<br><br>
<div class="row">
<div class="col-sm-4">
<span class="glyphicon glyphicon-comment"></span>
<h4 style="color:black">Pyetje Online</h4>
<p style="color:black">Tani me anë të teknologjisë ne jemi edhe më pranë jush duke iu përgjigjur pyetjeve tuaja në numrin tonë të telefonit: +355691111111 ose në emailin tonë :<a href="mailto:HospitAL.al@gmail.com">www.HospitAL.al@gmail.com</a></p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-certificate"></span>
<h4 style="color:black">Çertifikimet</h4>
<p style="color:black">HospitAL është një nga spitalet më të çertifikuar dhe më me çmime në vendin tonë.</p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-calendar"></span>
<h4 style="color:black">Rezervo Vizitën Online</h4>
<p style="color:black">Në HospitAL ju nuk është nevoja të prisni në radhë për të rezervuar një vizitë, mjafton ta rezervoni atë online.</p>
</div>
</div>
</div>     



<!-- FORMA E KONTAKTIT -->
<div id="kontakto" class="bg-1">
<div class="container">
<h3 class="text-center">Kontakto</h3>

<div class="row" style="text-align: center;">
<div class="col-md-12">
<p>HospitAL|Kontakti &nbsp;&nbsp;&nbsp;
	<span class="glyphicon glyphicon-map-marker"></span>Tirane,Albania &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="glyphicon glyphicon-phone"></span>Phone: +xxxxxxxxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="glyphicon glyphicon-envelope"></span><a href="mailto:joanashehaj01@gmail.com"> www.HospitAL.al@gmail.com </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
</div>


	<!-- <div class="col-md-8">
	<div class="row">
	<div class="col-sm-6 form-group">
	<input type="text" name="Emer" placeholder="Emer" name="name" class="form-control"/>
	</div>
	<div class="col-sm-6 form-group">
	<input type="email" class="form-control" name="email" placeholder="username@gmail.com" required=""/>
	<br />
	</div>
	</div>
	<textarea class="form-control" name="comments" rows="5" cols="20" placeholder="Komenti" Height="100px"></textarea>
	<br>
	<div class="row">
	<div class="col-md-12 form-group">
	<br>
	<input type="button" class="btn pull-right" onclick="submit" value="Dërgo"/>
	</div>
	</div>
	</div> -->
</div>
</div>
</div>
<br />
<br />


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
</form>
</body>
</html>
