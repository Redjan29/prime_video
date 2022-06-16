<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Maison des sports - Formulaire</title>
</head>
<body>
    <header>
    <a href="./pages/login.php" class="connexion">
            Connexion <span class="material-icons"> login </span>
    </a>
        <h1>Maison des ligues tous les sports</h1>
        <a href="./index.php"><img src="./asset/logo.png" alt="icone de sport"></a>
    </header>

    <main>

    <section>
       <h2>Prêt à la compétition? Remplissez le formulaire proposé dans cette page</h2>
      <p>Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
        prochain on vous propose toutes les séance de sport sur vos support préférés</p>
    </section>

    <ul class="grid-picture-large">

    <li data-image="./asset/tennis.jpg" data-title="tennis"
        data-description="c'est un film épatant, entre action et émotion..." data-dates="02/01/2020">
        <figure>
          <img src="./asset/tennis.jpg" alt="tennis">
          <figcaption>
            <h2>
              <i class="material-icons" aria-hidden="true">
                pages
              </i>
              Agrandir

            </h2>
          </figcaption>
        </figure>
      </li>

      <li data-image="./asset/ping_pong.jpg" data-title="tennis de table"
        data-description="c'est un film épatant, entre action et émotion..." data-dates="02/01/2020">
        <figure>
          <img src="./asset/ping_pong.jpg" alt="tennis de table">
          <figcaption>
            <h2>
              <i class="material-icons" aria-hidden="true">
                pages
              </i>
              Agrandir

            </h2>
          </figcaption>
        </figure>
      </li>

      <li data-image="./asset/squash.jpg" data-title="squash"
        data-description="c'est un film épatant, entre action et émotion..." data-dates="02/01/2020">
        <figure>
          <img src="./asset/squash.jpg" alt="squash">
          <figcaption>
            <h2>
              <i class="material-icons" aria-hidden="true">
                pages
              </i>
              Agrandir

            </h2>
          </figcaption>
        </figure>
      </li>

      <li data-image="./asset/badminton.jpg" data-title="Badminton"
        data-description="c'est un film épatant, entre action et émotion..." data-dates="02/01/2020">
        <figure>
          <img src="./asset/badminton.jpg" alt="Badminton">
          <figcaption>
            <h2>
              <i class="material-icons" aria-hidden="true">
                pages
              </i>
              Agrandir

            </h2>
          </figcaption>
        </figure>
      </li>
  </ul>

    <?php
   
    include_once './pages/inscription.inc.php';
    ?>
  
    </main>
  
    <?php
    include_once './src_inc/footer_inc.php';
    include_once './src_inc/modale_inc.php';
    ?>

 
  <script src="./js/app.js"></script>
  <script src="./js/test.js"></script>
</body>

</html>