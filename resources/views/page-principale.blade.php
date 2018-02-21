<!DOCTYPE HTML>
<html lang="fr">

  <head>
    <title>Seecretspot - Page d'accueil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/carrousel.css" rel="stylesheet">
    <link href="css/listeamis.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
  </head>

  <body>

    <nav class="row">
      <div class="col-xs-8" id="logo_title"><a href="page-principale.html" id="retour-flux"><i class="fa fa-diamond" aria-hidden="true"></i><span class="hidden-xs">SeecretSpot</span></a></div>
      <div class="col-xs-4">
        <ul id="menu_connect">
          <li class="menu_share"><a href="#" id="menu_lien_share"><span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span><i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></a></li>
          <li class="menu_icon"><a href="mon-profil.html" class="menu_lien"><i class="fa fa-user" aria-hidden="true"></i></a></li>
          <li class="menu_icon"><a href="message.html" class="menu_lien"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
          <li class="menu_icon"><a href="resultats.html" class="menu_lien"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          <li class="menu_icon"><a href="parametres.html" class="menu_lien"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <header class="row">
        <h1 class="col-xs-12">Chercher votre futur Seecret Spot</h1>
        <form method="post" action="resultats.html" class="col-xs-12"  id="form-recherche">
          <input type="search" name="barre-de-recherche" id="barre-de-recherche" placeholder="Rechercher">
          <input type="submit" class="btn fa-input" value="&#xf002;"  id="bouton-recherche"/>
        </form>
      </header>

      <div class="principal-block">
      <div class="row">

        <section class="col-md-8 col-xs-12">

          <div class="row">
            <div class="col-xs-12 photo-spot">
              <div class="row" id="choupi">
                <div class="col-sm-1 hidden-xs" id="gauche">
                  <img src="images/prev.png" alt="Précédent" id="prec" />
                </div>
                <div class="col-sm-10 col-xs-12" id="carrouselImages">
                  <img src="images/col-de-la-forclaz.jpg" alt="Col de la Forclaz" class="imagesCarrousel" id="premiereImage" />
            
                  <img src="images/gorges-du-fier.jpg" alt="Gorges du Fier" class="imagesCarrousel secondImages" />
            
                  <img src="images/Les-Aravis-Lac-des-Confins.jpg" alt="Lac des Confins" class="imagesCarrousel secondImages" />
            
                  <img src="images/arriveeSousFauteuil_tournette.jpg" alt="La Tournette" class="imagesCarrousel secondImages" />
            
                  <img src="images/croix-du-nivolet.jpg" alt="Croix du Nivolet" class="imagesCarrousel secondImages" />
                </div>
                <div class="col-sm-1 hidden-xs" id="droit">
                  <img src="images/next.png" alt="Suivant" id="suivant" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12">
                  <img src="images/col-de-la-forclaz.jpg" alt="Col de la Forclaz" id="imageCachee" />
                </div>
              </div>
              <div class="row" id="boutons">
                <div class="col-md-offset-1 col-md-3 hidden-sm hidden-xs">
                  <div class="hashtag">#Haute-Savoie</div>
                </div>
                <div class="col-md-4 col-xs-12">
                  <i class="fa fa-circle" aria-hidden="true" id="0"></i>
                </div>
                <div class="hidden-lg hidden-md col-sm-offset-1 col-sm-7 col-xs-8">
                  <div class="hashtag">#Haute-Savoie</div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="icon-image">
                    <i class="fa fa-diamond" aria-hidden="true"></i>
                    <a href="message.html" class="a-icon">
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <img src="images/riviere-fier.jpg" alt="photo-du-fier" style="width: 100%" class="photo-spot">
            </div>
            <div class="col-xs-9">
              <div class="hashtag"> #Haute-Savoie #Baignade</div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
              <i class="fa fa-diamond" aria-hidden="true"></i>
              <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
              </div>
            </div>

            <div class="col-xs-12">
              <img src="images/velo-montagne.jpg" alt="photo-velo-en-croatie" style="width: 100%" class="photo-spot">
            </div>
            <div class="col-xs-9">
              <div class="hashtag"> #Croatie #Vélo </div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
              <i class="fa fa-diamond" aria-hidden="true"></i>
              <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-xs-12">
              <img src="images/grotte.jpg" alt="photo-velo-en-croatie" style="width: 100%" class="photo-spot">
            </div>
            <div class="col-xs-9">
              <div class="hashtag"> #Grotte </div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
                <i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
              </div>
            </div>

            <div class="col-xs-12">
              <img src="images/ruine.jpg" alt="photo-velo-en-croatie" style="width: 100%" class="photo-spot">
            </div>
            <div class="col-xs-9">
              <div class="hashtag"> #ruine </div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
                <i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
              </div>
            </div>


            <div class="col-xs-12">
              <img src="images/ruine2.jpg" alt="photo-velo-en-croatie" style="width: 100%" class="photo-spot">
            </div>
            <div class="col-xs-9">
              <div class="hashtag"> #Ruine </div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
                <i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>

        </section>

        <aside class="col-xs-4 hidden-sm hidden-xs">
          <div class="row"></div>
          <h2 class="col-xs-12">Mes Seecret Friends :</h2>
          <section class="col-xs-12" id="listeamis"></section>
        </aside>

        <footer>

        </footer>
      </div>
      </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
      <script src="js\page_principale.js" charset="utf-8"></script>
      <script src="js/carrousel.js"></script>
      <script src="js/listeamis.js"></script>
  </body>
</html>
