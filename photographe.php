<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'photographe';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographe professionnel famille, maternité et portrait corporatif de la région de Lévis, Québec, Chaudière-Appalache';
$descriptionPage = 'En étant membre de l\'association des Photographes Professionnels du Québec, je m’engage à m’efforcer d\'élever et d’ennoblir le statut de la profession de la photographie, par la dignité de ma conduite, par la présentation de mon travail, par la tenue de mon studio ou place d\'affaire et par tout contact avec le public sous quelle que forme que se soit.';

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> <?php echo($titrePage) ?> </title>
<meta name="DESCRIPTION" content="<?=$descriptionPage?>"/>
<meta property="fb:app_id" content="452453981804995"/>
<meta property="og:url" content="<?=$domaineEnCours . $urlEnCours?>"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?=$titrePage?>"/>
<meta property="og:description" content="<?=$descriptionPage?>"/>
<meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-photographe.png"/>
<link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe"/>
<link href="/css/responsive.css" rel="stylesheet" type="text/css" media="screen">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>
<div class="container">
                <div class="bigPicture" style="background-image: url(/images/entete/le-photographe.png);">
                                <div class="pageLabel">
                                                <h1>Frédéric Bergeron<br>
                                                                Photographe</h1>
                                </div>
                </div>
                <section>
                                <div class="content">
                                                <div class="colonneUn">
                                                                <h2>Frédéric Bergeron Photographe</h2>
                                                                <p>
                                                                <p><?php echo($descriptionPage) ?></p>
                                                                <p>Frédéric Bergeron débute la photographie pour répondre à ses besoins de photos pour la conception de sites Internet, c'était il y a plus de 15 ans!  Sa passion grandissante pour les possibilités qu'offraient sa caméra, il commence à offrir ses concepts à ses proches.  Les résultats étant très appréciés, il se dit : "pourquoi pas ?". Il met tout en place pour pouvoir ajouter le mot 'professionnel' après son titre de photographe. </p>
                                                                <p>Ayant touché à toutes les sphères du métier, il ne se concentre que sur celles-ci : Maternité, famille, forfaits pour ados et femmes, portraits corporatifs, photographies commerciales et son plus grand succès, les fêtes d'enfants, spécialement pour les filles.  Depuis 2014, Frédéric a fait l'acquisition d'un vaste studio de 700 pieds carré à Lévis, dans le secteur de Saint-Nicolas, pour pouvoir encore mieux accueillir et servir sa clientèle. </p>
                                                                </p>
                                                </div>
                                                <div class="colonneDeux">
                                                                <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                                                </div>
                                                <p class="hightlight">Un service rapide,<br>
                                                                efficace et personnalisé!</p>
                                                <div class="colonneUn">
                                                                <h3>Mieux me connaître!</h3>
                                                                <p>Une petite présentation que je dois refaire à cause du son et de l'image, mais bon, vous en saurez un peu plus sur moi ;) </p>
                                                                <a href="https://youtu.be/BH9TUqWsiUI" target="_blank" title="Biographie de Frédéric Bergeron"  onclick="gtag('event', 'Click', {'event_category':'Le photographe','event_label':'Bio de Fred sur YouTube'});"><img src="/images/youtube-biographie-photographe.png" alt="Biographie Frédéric Bergeron"/></a> </div>
                                                <div class="colonneDeux texte">
                                                                <h3 style="margin-top:25px;">On parle de nous</h3>
                                                                <p>Nous sommes heureux de faire partie du Petit guide des fêtes d’enfants à Québec réalisé par l’équipe de <a href="http://ici.radio-canada.ca/premiere/emissions/radio-canada-cet-apres-midi/segments/chronique/36253/fete-enfants-quebec-guide-suggestions-activites-plaisirs-anniversaire" title="Écouter l'extrait" target="_blank"                                                                  
                                                                onclick="gtag('event', 'Click', {'event_category':'Le photographe','event_label':'Écouter l\'extrait du reportage'});">Ici Radio-Canada Première!   C’est à 14m30s</a> <u>ou</u> <a href="/telechargement/petit-guide-fetes-enfants-quebec.pdf" target="_blank" onclick="gtag('event', 'Click', {'event_category':'Le photographe','event_label':'Consultez le petit guide en PDF'});">consultez le guide en format PDF</a>.</p>
                                                                <a href="http://ici.radio-canada.ca/premiere/emissions/radio-canada-cet-apres-midi/segments/chronique/36253/fete-enfants-quebec-guide-suggestions-activites-plaisirs-anniversaire" title="Écouter l'extrait" target="_blank" onclick="gtag('event', 'Click', {'event_category':'Le photographe','event_label':'Écouter l\'extrait du reportage'});"><img src="/images/ambiance-traitement-de-star.png" alt="Photo d'ambiance pendant l'anniversaire pour filles"/></a> </div>
                                </div>
                </section>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>