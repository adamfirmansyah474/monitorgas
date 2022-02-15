
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>pemantauan kualitas udara</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href="css/animate.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
   
   <script  type="text/javascript">

      $(document).ready(function(){
      setInterval(function(){
      $("#sensor1").load('sensor1.php');
      },1000); 
    });

    	$(document).ready(function(){
      setInterval(function(){
      	  $("#sensor2").load('sensor2.php');
      },1000); 
    });

    	$(document).ready(function() {
    		setInterval(function(){
    				$("#notif").load('notif.php');
    		}, 60000);
    	});

    </script>
     <script  type="text/javascript">
    $(document).ready(function(){
      setInterval(function(){
        $("#sensor3").load('sensor3.php');
      },1000); 
    });
    </script>
    

  </head>


  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1> Tugas Akhir</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
		            <li><a href="#home" class="smoothScroll">Home</a></li>
			
					<li> <a href="data.php" class="smoothScroll">Data</a></li>
					<li> <a href="grafik.php" class="smoothScroll">Grafik Gas</a></li>
					<li> <a href="logout process.php" class="smoothScroll">Log Out</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>

  
  
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<h1 class="animated bounceIn">Pemantauan Kualitas Udara </h1>
	  		 		<p class="animated slideInLeft">Pada Kandang Sapi</p>
	  		 		
	  		</header>	    
	    </div><!-- /headerwrap -->

		<!--  SERVICES -->
		<div class="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						
						<div class="col-md-9 fade-up service-info">
							<h2>Amoniak(NH3)</h2>
							<h1 ><span  id="sensor1"></span> </h1>
							<p></p>
							<h2>PPM</h2>
						</div>
					</div>
						
					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						
						<div class="col-md-9 fade-up service-info">
							<h2>Hidrogen Sulfida (H2S)</h2>
								<h1><span  id="sensor2"></span></h1>
							<p></p>
							<h2>PPM</h2>
						</div>
					</div>
					<div id="notif"></div>
					
					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						
						<div class="col-md-9 fade-up service-info">
							<h2>Tanggal</h2>
							<h1><span  id="sensor3"></span></h1>
							<p></p>
							<h2></h2>
						</div>
					</div>
				</div>	
					
					
				</div>
			</div>
		</div>
		
		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
				<h1 class="fade-down centered">Pemantauan kualitas udara pada kadang sapi</h1>
				<hr>
				
				<div class="fade-up col-md-6">
					<p>Amonia mempunyai ciri yaitu yang tak berwarna, baunya 
menusuk, terdiri dari unsur nitrogen dan hidrogen, mudah sekali terlarut, 
dan berbahaya bagi kesehatan. 
Amonia juga merupakan salah satu gas pencemar udara yang dihasilkan 
dari penguraian senyawa organik oleh mikroorganisme seperti kompos, 
dalam industri perternakan, dan pengolahan sampah kota. Pada dasarnya 
perairan terdapat amonia dalam jumlah yang lebih banyak dibanding 
permukaan karena minimalnya oksigen. Amonia akan menyebabkan 
iritasi pada saluran pernafasan, hidung, tenggorokan, dan mata </p>
				</div><!-- col-md-6 -->
				
				<div class="fade-up col-md-6">
					<p>Hidrogen Sulfida (H2S) berasal dari suatu proses alamiah dari penguraian zat-zat
organik yang ada di tempat sampah oleh bakteri dan mikroorganisme. H2S
merupakan gas tidak berwarna, beracun, dapat larut dalam air serta berbau khas
sepert itelur busuk. H2S masuk ke dalam manusia melalui udara yang dihirup dan
melalui kulit namum dalam jumlah yang sedikit dibandingkan dengan yang
dihirup. Konsentrasi H2S yang rendah dapat menyebabkan batuk, flu, sakit
tenggorokan dan nyeri dada. Sedangkan pada konsentrasi tinggi dapat
menyebabkan kematian karena H2S bersifat asphyxiant yaitu melumpuhkan
sistem pusat pernapasan </p>
				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->
  		

		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
  </body>
  <script type="text/javascript">
  	
  </script>
</html>
