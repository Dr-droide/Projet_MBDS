<!DOCTYPE html>
<html>

<body>
	<?php
			$conn = oci_connect('test_user', 'test_password', 'localhost/orcl');
			if (!$conn) {
			die("Erreur lors de la connexion à la base de données");
			}
			
			if ($_POST['username']!=  'efef' ){
				echo '<h1> Erreur, nom utilisateur invalide </h1>';
				echo '<p> <a href="Connection.html">Recommencer</a></p>';
			}
			elseif ($_POST['password']!= 'sdjh'  ){
				echo '<h1>Erreur, mot de passe<h1/>';
				echo '<p> <a href="Connection.html">Recommencer</a></p>';
			}
			else{
				;
				
			}
			
	?>
</body>
</html>