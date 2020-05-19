<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- font awesome link -->
   <script src="https://kit.fontawesome.com/682d71be2a.js" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <title>Accueil Ferri Lynda</title>
<!-- lien bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <!-- nav et bar de recherche avec bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="artistes.php"> Artistes </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  choix d'artistes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"> Photographe </a>
                  <a class="dropdown-item" href="#"> Peintre </a>
                  <a class="dropdown-item" href="#"> Graveur </a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="graveur.php"> GraveurX</a> <!-- pour plus tard peut etre rajouter un truc -->
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">  <!-- pour plus tard peut etre rajouter un truc -->  </a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn alert-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
    </header>
    <main>
      <div class="container">
          <img src="images/musee1.jpg" alt="fond">

              <div id="intro_color" >

                <p>
                  Le musée lyly lynda est un musée national inauguré en 2000, situé dans le 20eme arrondissement de Paris le long de la rive gauche de la Seine. Il est installé dans l’ancienne gare d'Orsay, construite par Victor Laloux de 1898 à 1900 et réaménagée en musée sur décision du Président de la République Valéry Giscard d'Estaing
                </p>
              </div>
      </div>


      <h2>L'un des musée les plus rare au monde</h2>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
      <br>

            <section class="portfolio-experiment">
                      <a>
                        <span class="text">   <h2> Quelques photos de musée </h2></span><br>
                        <span class="line -bottom"></span>
                      </a>
                      <hr>
                      <img src="images/musee3.jpg" alt="" class="img"><img src="images/musee4.jpg" alt="" class="img"  >
                      <img src="images/musee2.jpg" alt="" class="img"><img src="images/artiste1.jpg" alt="" class="img"  >
            </section>

    <hr>
          <section class="portfolio-experiment">
                    <a>
                      <span class="text">   <h2> Notre Exposition </h2></span><br>
                      <span class="line -bottom"></span>
                    </a>
                    <hr>
                    <img src="images/musee6.jpg" alt="" class="img"><img src="images/musee7.jpg" alt="" class="img"  >
                    <img src="images/musee8.jpg" alt="" class="imgg" >
            </section>

    </main>
    <footer class="footer">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.^php">Acceuil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="artistes.php"> Artistes </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      choix d'artistes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#"> Photographe </a>
                      <a class="dropdown-item" href="#"> Peintre </a>
                      <a class="dropdown-item" href="#"> Graveur </a>

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="graveur.php"> LeGrosse </a> <!-- pour plus tard peut etre rajouter un truc -->
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">  <!-- pour plus tard peut etre rajouter un truc -->  </a>
                  </li>
                  <li>
                      <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square" class="logo"></i>
                      </a>
                      <a href="https://twitter.com/login?lang=fr" target="_blank"><i class="fab fa-twitter-square" class="logo"></i>
                      </a>
                      <a href="https://www.youtube.com/?hl=fr&gl=FR" target="_blank"><i class="fab fa-youtube-square"></i>
                      </a>
                      <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-linkedin"></i>
                      </a>
                      <a href="https://github.com/" target="_blank"><i class="fab fa-github-square"></i>
                      </a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn alert-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
              <br>
              <p  class="p">15 rue Martin Garat 75020</p>
              <p  class="p" >Copyright</p>
              <p  class="p" >Mention légales</p>
              <p  class="p" >Ferri lynda<br>
              année 2020</p>

    </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="script.js">

     </script>
  </body>
</html>
