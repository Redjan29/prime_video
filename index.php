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
    <a href="./pages/login.php" class="connexion">
            Connexion <span class="material-icons"> login </span>
        </a>
        <h1>Maison des ligues tous les sports</h1>
        <img src="./asset/logo.webp" alt="steam_logo">
        
    </header>
   
    <?php
    include_once("./src_inc/main_inc.php");
    include_once("./src_inc/footer_inc.php");
    include_once("./src_inc/modale_inc.php");
    ?>
   
          
    
  <script src="./js/app.js"></script>
</body>
</html>