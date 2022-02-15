
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>nilai data</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href="css/animate.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
   
   <title>Data Pemngukuran Kualitas Udara Kadang Sapi</title>
	<link rel="stylesheet" type="text/css" href="tabel.css">
<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function() {
				$("#table").load("tabel.php");
			});
		});
	</script>

 

  </head>


  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header" >
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1> Tugas Akhir</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
		            <li><a href="index.php" class="smoothScroll">Home</a></li>
			
					<li> <a href="data.php" class="smoothScroll">Data</a></li>
					<li> <a href="logout process.php" class="smoothScroll">Log Out</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>



  
  
	<div class="container" style="text-align: center; padding-top: 5%;">
	<h1>Data Pengukuran Kualitas Udara Kadang Sapi</h1>
	<h4></h4>
	<table class="table1" style="margin-left:auto; margin-right:auto" >
		<thead>
			<th>No</th>
			<th>NH3 (amonia)</th>
			<th>H2S</th>
			<th>Waktu</th>
		
		</thead>
		<tbody id="table">
			
		</tbody>
	</table>	
	</div>


		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
  </body>
</html>
