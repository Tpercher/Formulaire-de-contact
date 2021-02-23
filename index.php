<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Site professionnel de Theo Percheron </title>
		<meta name="description" content="description à inscrire ici" />
		<meta name="google-site-verification" content="3I7gOh7jw9or_G40-4XOEO6GEYsEV0ZG-ZbfzA84PtM" />
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="canonical" href="https://theopercheron.com/" />
	</head>
	<body>
		<section id="contact">
			<h3> Me contacter </h3>
				<?php

									// Déclaration des variables
					$msg_vide = "<p style='text-align: center'>L'envoie n'a pas marché, veuillez remplir correctement l'email !</p>";
					$msg_ok = "<p style='text-align: center'>L'envoi de l'email a été un succès, merci et à bientôt !</p>";

					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$messagerie = $_POST['email'];
					$contenu = $_POST['comments'];

					$entete = "Message de : $nom $prenom\n";
					$corps = "Bonjour,\n\n $contenu\n\n";
					$piedmail = "Me contacter :\n\n$messagerie";

									// Envoi du mail et correction des erreurs
						if (!empty($nom) && !empty($prenom) && !empty($messagerie) && !empty($contenu)) {
							if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $messagerie)) {
								$message = "$entete\n$corps\n$piedmail";
								mail('mettrelemailici', 'Formulaire de mon site web', $message);
								echo $msg_ok;
							}else{
								echo $msg_vide;
							}
							}
				?>

			<article>
				<form method="post" action="#contact">
					<label for="prénom">Prénom<span class="obligatoire">*</span></label>
					<input type="text" placeholder="Ici votre prénom" name="prenom" id ="prénom" required="required">

					<label for="nom">Nom<span class="obligatoire">*</span></label>
					<input type="text" placeholder="Ici votre nom" name="nom" id ="nom" required="required">

					<label for="email">Email<span class="obligatoire">*</span></label>
					<input type="text" placeholder="Ici votre email" name="email" id ="email" required="required">

					<label for="message">Message<span class="obligatoire">*</span></label>
					<textarea id="message" placeholder="Ici votre message" name="comments" required="required"></textarea>

					<p class="txtobligatoire"><span class="obligatoire">*</span> (Ces champs sont obligatoires)</p>

					<input type="submit" name="submit" value="Envoyer">
					<input type="reset" name="reset" value="Effacer">

				</form>
			</article>
		</section>
	<footer>
		<a href="index.php" title="mon site">Theo Percheron</a>
		<span> | &copy; 2017 | </span>
		<a href="#" title="mentions légales"> Tout droit réservé </a>
	</footer>
	</body>
</html>
