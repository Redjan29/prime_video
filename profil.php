<?php 
    session_start();
    require_once './pages/config.php'; // ajout connexion bdd 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/logo.webp">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Maison des sports</title>
</head>
<body>
    <header>
        <a href="./pages/deconnexion.php" class="connexion">Déconnexion</a>
        <h1>Maison des ligues tous les sports</h1>
        <a href="accueil_membre.php"><img src="./asset/logo.webp" alt="steam_logo"></a>
        
    </header>
    <main>
    <?php 

try {
    $sqlQuery = 'SELECT * FROM client';
    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute();
    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



foreach ($users as $user) {

    if ($user['id'] === $_SESSION['user']) {
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        echo
        '<ul class="info">' .
            '<li>' . '<span class="champ">' ."Nom : " . '</span>' .'<span class="nom">'. $user['pseudo'] .'</span>'. '</li>' . 
            '<li>' . '<span class="champ">' ."Email : " .'</span>'. $user['email'] . '</li>' .
            '<li>' . '<span class="champ">'."ID : " .'</span>'. $user['id'] . '</li>' .
            '</ul>';
    }
   
}



 include_once "./pages/eventviewer.php"
     ?>

<?php 
if (!empty($_POST)) {
    include_once "./pages/supprime_profil.php";
    
    if($request){
        print "<p class=\"success\"> Votre compte a été supprimée</p>";
        session_destroy();
        sleep(2);
        header("Location: ./");
    }
    
}
?>
     <a href="./edit_user.php">Changer le profil</a>

     <!-- <form method="POST" action="">
                    <input type="submit" id="delete "name="delete "class="button" value="Supprimer ce profil">
                </form> -->

    </main>
        
    
</body>
</html>

