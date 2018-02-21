<!DOCTYPE HTML>
<html lang="fr">

  <head>
    <title>Bienvenue sur Seecretspot - Connectez-vous</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="plugins/jquery-background-video-master/jquery.background-video.css" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
  </head>

  <body id="index-page">
      <div class="element-with-video-bg jquery-background-video-wrapper">
          <video class="my-background-video jquery-background-video" loop autoplay muted poster="">
              <source src="video/hd0941.mp4" type="video/mp4" class='un'></video>
      </div>
    <nav class="row">
      <div class="col-xs-8" id="logo_title"><i class="fa fa-diamond" aria-hidden="true"></i><span class="hidden-xs">SeecretSpot</span></div>
      <div class="col-xs-4" id="connexion"><a href="index.html"><span class="hidden-xs hidden-sm" id="se_connecter">Se Connecter</span><span class="visible-xs visible-sm"><i class="fa fa-sign-in" aria-hidden="true" id="se_connecter_resp"></i></span></a></div>
    </nav>

    <div class="container">

        <div class="row">
          <div class="col-lg-offset-2 col-lg-8  col-md-offset-2 col-md-6  col-s-offset-2 col-s-8 col-s-offset-2 " id="principal-block">
            <h1 id="titreindex"><i class="fa fa-diamond" aria-hidden="true"></i>SeecretSpot</h1>
            <div class="row">
              <aside class="col-lg-6 col-md-6 col-s-6">
               <div class="well" id="font-index">
               <h2> Poursuivre avec :  </h2>
                <br>
                 <ul class="block-connexion">
                 <li>
                    <a class="btn btn-default"  href="https://fr-fr.facebook.com/" id="bouton-fb">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    Facebook</a>
                 </li>

                 <li>
                   <a class="btn btn-default"  href="https://www.instagram.com/?hl=fr" id="bouton-inst">
                   <i class="fa fa-instagram" aria-hidden="true"></i>
                   Instagram </a>
                 </li>

                 <li>
                   <a class="btn btn-default" href="inscription.html" id="bouton-mail">
                   <i class="fa fa-envelope-o" aria-hidden="true"></i>
                   Email </a>
                </li>

               </ul>
             </div>


            </aside>
              <aside class="col-lg-6 col-md-6 col-s-6">
                <form method="post" action="page-principale.html" class="well" id="font-index">
                 <fieldset>
                 <h2> Déjà membre ?</h2>
                 <label for="identifiants"> Identifiants </label>
                 <input id="identifiants" type="text" class="form-control">
                 <br >
                 <label for="password"> Mot de passe </label>
                 <input id="password" type="password" class="form-control" >
                 <br>
                 <input type="submit" value="Envoyer" id="bouton-inscription-home"/>
                 </fieldset>
               </form>
              </aside>
            </div>
          </div>
       </div>
    </div>



    <footer>

    </footer>
    <script src='js/jquery-3.2.1.js'></script>
    <script src='plugins/jquery-background-video-master/jquery.background-video.js'></script>
    <script src='js/script-index.js'></script>
  </body>
</html>
