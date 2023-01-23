<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link rel="shortcut icon" href="bato.png">
  
            <title>La quête de Jason</title>
        </head>
        
        <body>
  

<!-- Header section -->
<header>
  <h1>Les Argonautes</h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
  
</header>

<!-- Main section -->

<main>
	

  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form action="" method="post" class="new-member-form">
    <label for="name">Nom de l'Argonaute:</label>
        <input id="name" name="nom" type="text" required placeholder="Charalampos" />
        <button type="submit" value="envoyer" name="envoyer">Recruter</button>
  </form>

  
  <!-- Member list -->
  <h2>&#8486; Membres de l'équipage &#8486;</h2>
  <p>Les candidat(e)s retenu(e)s pour avoir le titre d'<strong>Argonaute</strong> sont:</p>
   
  <?php
$user = 'id20183160_root';
$password = '2sW9AUc8%m+vf!1Q'; //To be completed if you have set a password to root
$database = 'id20183160_argonautess'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = new mysqli('localhost',$user, $password, $database, $port);

    
    if(isset($_POST['envoyer']))
    {
		
      $nom = $_POST['nom'];

      $sql = ("INSERT INTO `membres`(`nom`) VALUES ('".$nom."')");
	  
	  $mysqli->query($sql); 
	 
    }
?>
  
  	<?php
	$mysqli = new mysqli("localhost", "id20183160_root", "2sW9AUc8%m+vf!1Q", "id20183160_argonautess");


if ($mysqli -> connect_errno) {
    echo "Échec de la connexion :" . $mysqli -> connect_error;
    exit();
}

$sql = "SELECT nom FROM membres ORDER BY nom ";

if ($result = $mysqli -> query($sql)) {
    printf ("<ul>");
    while ($field = $result -> fetch_assoc()) {
        printf ("<li>%s</li>",$field['nom']);
	
    }
	printf ("</ul>");
	
	$result -> free_result();
		
}
  

	$mysqli -> close();
	
?>

</main>

  

<footer>
  <p>Réalisé par Cédric en l'an 41 de son ère</p>
</footer>


        </body>
</html>