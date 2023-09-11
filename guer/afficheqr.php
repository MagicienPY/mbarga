<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Qr de LOCUS</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="style.css">

	
</head>

<body>
	<!-- Fixed navbar -->

	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="acceulle.html"><img src="assets/images/logo.jpeg" height="70px" width="150px" alt=" art logo "></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="acceulle.php">Acceulle</a></li>
						</li>
						<li><a href="contact.html">consulter</a></li>
					</ul>
				</div>
			</div>
		</div> 
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary">

	</header>

	<!-- container -->
	<div class="container">

	
	<div class="wrapper">
		<header>
			<h1>Gueritte HORODATAGE</h1>

			<p>ENTREE</p>
		</header>
		<div class="form">
		<?php
		require('../../model/log.php');

		$date = date('y-m-d');
		$user = $pdo->prepare("SELECT * FROM planing WHERE date = ?");
		$user->execute(array($date));
		
		$ligne = $user->fetch();
		
		$d = $ligne['date'] ;$h1 = $ligne['heure'];
	
		
		?>
		<input class="mini1" height="2px" width="1px" value="<?php echo $d,$h1;?>" type="text" >
			<button>Generate QR Code</button>
		</div>
		<div class="qr-code">
			<img src="" alt="qr-code">
		</div>
		</div>

		<script src="script.js"></script>
		
	</div>	<!-- /container -->

	<div class="wrapper">
		<header>
			<h1>Gueritte HORODATAGE</h1>

			<p>SORTIE</p>
		</header>
		<div class="form1">
		<?php
		require('../../model/log.php');

		$date = date('y-m-d');
		$user = $pdo->prepare("SELECT * FROM planing WHERE date = ?");
		$user->execute(array($date));
		
		$ligne = $user->fetch();
		
		$d = $ligne['date'] ;$h1 = $ligne['heure_fin'];
	
		
		?>
		<input class="mini1" height="2px" width="1px" value="<?php echo $d,$h1;?>" type="text" >
			<button>Generate QR Code</button>
		</div>
		<div class="qr-code1">
			<img src="" alt="qr-code">
		</div>
		</div>

		<script src="script.js"></script>
		
	</div>	<!-- /container -->
	


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>