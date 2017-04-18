<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php 

 	try
	{

	    // On se connecte à MySQL

	    $bdd = new PDO('mysql:host=localhost;dbname=gsbCompteRendu;charset=utf8', 'root', 'root');

	}

	catch(Exception $e)

	{

	    // En cas d'erreur, on affiche un message et on arrête tout

	        die('Erreur : '.$e->getMessage());

	}


	if (isset($_GET['username']) AND isset($_GET['mdp'])) // On a le nom et le prénom

	{
	    $utilisateur = $_GET['username'];
	    $mdp = $_GET['mdp'];
	}
	else // Il manque des paramètres, on avertit le visiteur
	{
	    echo 'Il faut renseigner un username et un mdp !';
	}
	// Si tout va bien, on peut continuer

	// On récupère tout le contenu de la table jeux_video


	$reponse = $bdd->query('SELECT * FROM appuser WHERE username=\'' . $utilisateur . '\' and password=\'' . $mdp . '\' ');

	$test=0;

	while ($donnees = $reponse->fetch())
	{
		$test=1;
	}
	
	echo $test;


	$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
 </body>
</html>