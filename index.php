<!DOCTYPE html>
<html>
<head>
	<title>PHP Devoir 1 | Jérémie Rindone</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			<a class="brand" href="#">Exercices de PHP</a>
			<ul class="nav">
				<li><a href="https://github.com/akushy/PHP_DWM">Code Github</a></li>
				<li><a class="inactive" href="#">Plus d'exercices</a></li>
				<li><a class="inactive" href="#">Pense-bête</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<h1>Papa, tu me passes l'auto ?!</h1>
		<div class="row">
			<p class="lead span8">Ton père n'a pas vraiment confiance en toi et en tes tallents de pilote. <br/>
			Réponds correctement aux qustions ci-dessous afin qu'il te passes son bolide. <br/>
			Bonne chance, il est pas de bonne humeur aujourd'hui !</p>
		</div>
		<form method="GET">
			<div class="row">
				<div class="span6">
					<p>Tu me passe l'auto pour que je te fasse le plein ?</p>
					<label class="radio">
						<input type="radio" name="question01" 
						<?php if (isset($_GET["question01"])) { if ($_GET["question01"] == "oui") { $i++; } }
						if( $_GET['question01']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question01" 
						<?php if( $_GET['question01']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non
					</label>
					<p>Tu me passe l'auto pour que je tire des freins à main dans la neige ?</p>
					<label class="radio">
						<input type="radio" name="question02" 
						<?php if( $_GET['question02']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question02" 
						<?php if (isset($_GET["question02"])) { if ($_GET["question02"] == "non") { $i++; } } 
						if( $_GET['question02']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non
					</label>
	
					<p>Tu me passe l'auto pour que j'aille à l'auto-sécurité à ta place ?</p>
					<label class="radio">
						<input type="radio" name="question03" 
						<?php if (isset($_GET["question03"])) { if ($_GET["question03"] == "oui") { $i++; } }
						if( $_GET['question03']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question03" 
						<?php if( $_GET['question03']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non</label>
				</div>
			
				<div class="span6">
					<p>Tu me passe l'auto pour que je l'amène au car-wash ?</p>
					<label class="radio">
						<input type="radio" name="question04" 
						<?php if (isset($_GET["question04"])) { if ($_GET["question04"] == "oui") { $i++; } }
						if( $_GET['question04']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question04"
						<?php if( $_GET['question04']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non
						
					</label>
	
					<p>Tu me passe l'auto pour que je la pousse à fond sur les autoroutes Allemandes ?</p>
					<label class="radio">
						<input type="radio" name="question05" 
						<?php if( $_GET['question05']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question05" 
						<?php if (isset($_GET["question05"])) { if ($_GET["question05"] == "non") { $i++; } }
						if( $_GET['question05']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non
					</label>
	
					<p>Tu me passe l'auto pour que mon pote puisse aller en vacances avec ?</p>
					<label class="radio">
						<input type="radio" name="question06" 
						<?php if( $_GET['question06']=='oui'){ echo 'checked="checked"';} ?>
						value="oui" required>Oui
					</label>
					<label class="radio">
						<input type="radio" name="question06" 
						<?php if (isset($_GET["question06"])) { if ($_GET["question06"] == "non") { $i++; } }
						if( $_GET['question06']=='non'){ echo 'checked="checked"';} ?>
						value="non">Non
					</label>
				</div>
			</div>
	
			<p><button class="btn btn-primary" type="submit">Demander l'auto !</button></p>
	
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET )) {
					if($i <= 2){
						echo 
						"<div class='alert alert-error'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>Dégage punk !</strong> Modifies tes choix, si non tu pourras regonfler les pneus de ton vélo.
						</div>";
					}else if ($i <= 4){
						echo 
						"<div class='alert alert'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>Peut-être !</strong> j'espère que tu es fort pour négocier parce que t'es mal barré...
						</div>";
					} else {
						echo 
						"<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong>Ça passe crème !</strong> Ton père accepte, en plus il te file une petite liasse.
						</div>
						<div class='recompense'></div>";
					}
				} else {}
			?>
		</form>
	</div>
	
	<!-- SCRIPT -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- SCRIPT END -->
</body> 
</html>
