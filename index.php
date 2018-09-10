<!doctype html>
<html class="no-js" lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fast Shoes</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="sass/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header>
    <?php
    include("menu.php");
    ?>
  </header>

  <div class="card-deck col-dm-12 col-sm-12 mt-2 container mb-2">
    <div class="card">
      <img class="card-img-top" src="img/shoeOne.jpg" alt="Shoes One">
      <div class="card-body">
        <h4 class="card-title">Shoes One</h4>
        <p class="card-text text-prix">39€</p>
        <p class="card-text">Disponible</p>
        <p class="card-text">Chaussure idéal pour le sport.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/shoesTwo.jpg" alt="Shoes Two">
      <div class="card-body">
        <h4 class="card-title">Shoes Two</h4>
        <p class="card-text text-prix">59€</p>
        <p class="card-text">Disponible</p>
        <p class="card-text">Chaussure faite pour la ville.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/shoesTree.jpg" alt="Shoes Tree">
      <div class="card-body">
        <h4 class="card-title">Shoes Tree</h4>
        <p class="card-text text-prix">79€</p>
        <p class="card-text">Disponible</p>
        <p class="card-text">Chaussure confortable.</p>

      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/shoesFour.jpg" alt="Shoes Four">
      <div class="card-body">
        <h4 class="card-title">Shoes Four</h4>
        <p class="card-text text-prix">29€</p>
        <p class="card-text">Indisponbile</p>
        <p class="card-text">Chaussure à petit prix.</p>

      </div>
    </div>
  </div>
  <footer>
    <?php
    include("footer.php");
    ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
  </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>