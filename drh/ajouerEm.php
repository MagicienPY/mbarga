<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Ajouter</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php
	session_start();
	session_get_cookie_params();
	ob_start();
	echo $_SESSION['idE'];
	if ($_SESSION['idE'] == ""){
		header("Location:index.php");
	}
	
	?>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="acceulle.php"><img src="assets/images/logo.jpeg" height="70px" width="150px" alt=" art logo "></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="acceulle.php">Acceulle</a></li>
					<li><a href="about.php">gestion</a></li>
					<li class="dropdown">
						<a href="ajouerEm.php" class="dropdown-toggle" data-toggle="dropdown">Ajouter<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="ajouerEm.php">admin</a></li>
							<li class="active"><a href="ajouerEm.php">employé</a></li>
						</ul>
					</li>
					
					<li><a class="btn" href="index.php">inscription / connection</a></li>
					<li>  <h3  class="utilisateur"><?php echo $_SESSION['nom'];?>    en Ligne</h3>  <span class="online_animation"></span> </p>  </li>
					<form action="decon.php" method="post">
					<li><a class="btn" href="index.php">Déconnexion</a></li>
					</form>

				</ul>
			</div>
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Acceulle</a></li>
			<li class="active">Inscription</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Ajouter employé</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Créer vous un compte </h3>
							<p class="text-center text-muted">NB si vous avez deja un compte c'est tres simple, <a href="index.php">Connectez vous </a> Mais si vous n'en avez pas remplissez juste vos informations si dessous s'il vous plaît </p>
							<hr>

							<form action="../../controleur/inscription.php" method="post">
								<div class="top-margin">
									<label>Nom de famille</label>
									<input type="text" name="nom"  class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Prenom</label>
									<input type="text" name="prenom" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Numero de téléphone</label>
									<input type="number" name="tel" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Adresse email <span class="text-danger">*</span></label>
									<input type="text" name="email" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Rôle <span class="text-danger">*</span></label>
									<input type="text" name="role" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Matricule <span class="text-danger">*</span></label>
									<input type="text" name="matricule" class="form-control" required>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>mot de passe <span class="text-danger">*</span></label>
										<input type="text" name="passe1" class="form-control" required>
									</div>
									<div class="col-sm-6">
										<label>Confirmer mot de passe<span class="text-danger">*</span></label>
										<input type="text" name="passe2" class="form-control" required>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											Oui j'ai lus <a href="page_terms.php">les terms et Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="btn" type="submit">Ajouter</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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