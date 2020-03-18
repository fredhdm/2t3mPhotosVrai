<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'photographe';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographe professionnel corporatif de la région de Lévis, Québec, Chaudière-Appalache';
$descriptionPage = 'Frédéric possède à la fois un côté cartésien en raison de son habileté pour la gestion de projets et un côté créatif pour le volet photographie de son métier.';

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
                                                                
                                                                <p>Humoriste dans l’âme et avec beaucoup d’entregent, Frédéric travaille dans le secteur multimédia depuis de nombreuses années. Grâce à son côté entrepreneur, il développe son entreprise pour ensuite collaborer à la création de divers projets web dans le domaine du tourisme à Québec. Le milieu stimulant du tourisme devient alors pour lui une source infinie d’inspiration. Frédéric possède à la fois un côté cartésien en raison de son habileté pour la gestion de projets et un côté créatif pour le volet photographie de son métier.
 </p><p><?php echo($descriptionPage) ?></p>
                                                                
                                                </div>
                                                <div class="colonneDeux">
                                                                <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                                                </div>
                                                <p class="hightlight">Un service rapide,<br>
                                                                efficace et personnalisé!</p>
                                              
                                               
                                </div>
                </section>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>