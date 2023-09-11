<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>acceulle</title>
	
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
</head>

<body class="home">
	<!-- Fixed navbar -->

	<?php
	require('../../model/log.php');

	$date = date('d-m-y h:i:s');
	#$heure = time('h:m:s');
	#echo $heure

	$user = $pdo->prepare("SELECT * FROM planing WHERE date = ?");
    $user->execute(array($date));

	$ligne = $user->fetch();
   
	
	?>
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="acceulle.html"><img src="assets/images/logo.jpeg" height="70px" width="150px" alt=" art logo "></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="acceulle.html">Acceulle</a></li>
					<div class="form">
					
					<li><a href="afficheqr.php">Afficher QR</a></li>
					
					</div>
					<li class="dropdown">
						
						<li><a href="afficheqr.php">consulter </a></li>
					<li><a class="btn" href="../../controleur/decon.php">deconnecxion</a></li>
				</ul>
			</div>
		</div>
	</div> 
	

	
	<header id="head">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Retrouvé le meilleur chez LOCUS AIA </h2>
		<p class="text-muted">
			ici nous permettons a tous le monde de voir le monde a la même échelle.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Une raison de choisir LOCUS AIA</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Fiabilité</h4></div>
					<div class="h-body text-center">
						<p>Notre système est parmi les meilleur solution elle regorge d'une plethore de module et de fonctionnalité</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Rapidité et éfficacité</h4></div>
					<div class="h-body text-center">
						<p>Étant donné que nous parlons de la vie des être hummain il est donc question pour nous de rendre nos sonlutions encre plus solide et efficace </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Santé</h4></div>
					<div class="h-body text-center">
						<p>Bien que nos solutions visent a aider le publique a deficiance visuel et tous le monde, nous suivons aussi l'etat sanitaire de notre communauté</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Bonne humeur</h4></div>
					<div class="h-body text-center">
						<p>Il a été vérifier par nos analystes que tous le monde sur terre aime vivre facilement alors grâce a la aisance d'utilisation des produits LOCUS vous serrez toujours de bonne Humeur </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Questions frequentes</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Es-ce que votre Casque vas nous donner la vue ?</h3>
				<p>Pas encore! <a href="#">consulter les fonctionnalité</a> - mais nous pouvosn dir que grace a l'efficacité de notre IA et de l'assistant virtuel les aveugles on une troisieme vue sur la vie!</p>
			</div>
			<div class="col-sm-6">
				<h3>Doit on faire confiance a une IA ?</h3>
				<p>
					Honnetement nous faisons confiance a un tas de choses que nous ignorons même les aveugle fons confiance a la canne : <a href="http://unsplash.com"> a regarder </a>c'est une video qui vous permettra de mieux comprendre</p>
			</div>
		</div> <!-- /row -->

		
		<div class="jumbotron top-space">
			<h4>ma vie grace a ce casque est plus tactique et facile , surtous que ce casque est facile a utilisé...</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Lire plus»</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


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
								<a href="about.html">Appropos</a> |
								<a href="sidebar-right.html">services</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">se connecter</a></b>
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

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="script.js"></script>
</body>
</html>