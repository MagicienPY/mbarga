<html lang="fr">
<head>
    <meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
    <title>planing liste</title>
</head>
<body>
<?php
	session_start();
	
	ob_start();
	echo $_SESSION['idE'];
	if ($_SESSION['idE'] == ""){
		header("Location:index.php");
	}
	
	?>
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="acceulle.php"><img src="assets/images/logo.jpeg" height="70px" width="150px" alt=" art logo "></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="acceulle.php">Acceulle</a></li>
					<li><a href="about.php">Appropos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">services <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.php">Casque</a></li>
							<li class="active"><a href="sidebar-right.php">Home assistant</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
					<li>  <h3  class="utilisateur"><?php echo $_SESSION['nom'];?>    en Ligne</h3>  <span class="online_animation"></span> </p>  </li>
					<li><a class="btn" href="../../controleur/decon.php">deconnecxion</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php 
	require('../../model/log.php');
	$reqid = $pdo->prepare("SELECT * FROM planing");
            
	$reqid->execute();
	
	?>
    <h1>CONSULTER</h1>
    <h2>LISTE PLANING</BR></h2> 
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>JOUR</th>
                    <th>HEURE</th>
                    <th>HEURE DE FIN</th>
                    
                  </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
	<?php 
	while($ligne = $reqid->fetch()){ 
		$_SESSION['date'] = $ligne['date'];
        $_SESSION['heure'] = $ligne['heure'];
        $_SESSION['heure_fin'] = $ligne['heure_fin'];
		?>
		<tr>
			<td><?php echo $_SESSION['date'] ?></td>
			<td><?php echo $_SESSION['heure'] ?></td>
			<td><?php echo $_SESSION['heure_fin'] ?></td>


		</tr>
	
	<?php

	}
	?>
	
  </table>
   
    <footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+237 691 569 975<br>
								<a href="mailto:#">juniornote7@gmai.com</a><br>
								<br>
								CAMEROUN, Yaoundé, Sous-manguier apres Nkomo
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Nous suivre</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>ensemble faisons de ce monde un monde meilleur</p>
							
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Acceulle</a> | 
								<a href="about.php">Appropos</a> |
								<a href="sidebar-right.php">services</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.php">se connecter</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2023, fais par LOCUS AIA<a href="#" rel="designer"> services pour la population et par la population</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

</body>
</html>