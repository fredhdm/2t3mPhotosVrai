<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'anniversaire';

//*****Contenu dynamique de la page*****//
$titrePage = 'Fête pour filles et ado Traitement de Star 6 ans, 7 ans, 8 ans, 9 ans, 10 ans, 11 ans, 12 ans, 13 ans et 14 ans.';
$descriptionPage = 'Pour la fête de votre fille, laissez-la, ainsi que ses amies,  se faire traiter comme des STARS avec maquillage et manucure avant de passer à la séance photos digne d\'une parade de mode!';

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
<meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-anniversaire-pour-filles.png"/>
<link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe/anniversaire-pour-filles"/>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>
</head>

<body class="ts">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>
<div class="container">
                <div class="bigPicture" style="background-image: url(/images/entete/photographe-anniversaire-pour-filles.png);">
                                <div class="pageLabel">
                                                <h1>Anniversaire<br>
                                                                pour filles et ados</h1>
                                </div>
                </div>
                <section>
                                <div class="content">
                                                <div class="colonneUn">
                                                                <h2>Anniversaire pour filles et ados de 6 à 14 ans</h2>
                                                                <p> <?php echo($descriptionPage) ?> </p>
                                                                <p>Au début de la fête, les stars reçoivent les services de <strong>manucure</strong> et/ou de <strong>maquillage</strong>. Le photographe en profite pour réaliser des photographies de l’ambiance et du plaisir qui se dégage de l’activité!</p>
                                                                <p>Ensuite, le plaisir continue en passant à la <strong>séance photos professionnelles</strong> avec <strong>parade de mode</strong>, <strong>photos de groupe</strong>, <strong>photos en duo</strong>, <strong>sauts dans les airs</strong> sans oublier de laisser place aux idées et concepts de la fêtée! Nous terminons en <strong>développant les cadeaux apportés</strong> par les amies, nous <strong>mangeons le gâteaux</strong> et <strong>tout le monde repart avec un sourire</strong> qui en dit long!</p>
                                                                <p><a href="https://www.facebook.com/groups/anniversairepourfilles/" target="_blank">Joindre le groupe de cette thématique</a> pour encore plus de photographies!</p>
                                                               <div class="rose"> <h3>Anniversaire à l'intérieur</h3>
                                                                <p>L'activité peut se dérouler à votre domicile si vous désirez prolonger l'événement avant ou après notre forfait!</p>
                                                                <h3>Anniversaire à l'extérieur</h3>
                                                                <p>C'est l'été et vous aimeriez que l'activité se déroule à l'extérieur? Aucun problème, nous nous déplaçons pour vous offrir ce magnifique forfait!</p></div>
                                                </div>
                                                <div class="colonneDeux logos"> <img src="/images/logo-traitement-de-star.png" alt="Anniversaire pour filles Traitement de STAR"> </div>
                                                <div class="mosaique traitementDeStar">
                                                                <?php for($i=1;$i<=5;$i++) { ?>
                                                                <div class="cover wow" style="background-image:url(/dynamique/anniversaire-pour-filles/anniversaire-pour-filles-<?php echo($i)?>.jpg);"></div>
                                                                <?php } ?>
                                                </div>
                                                <div class="mosaique traitementDeStar">
                                                                <?php for($i=1;$i<=5;$i++) { ?>
                                                                <div class="cover wow" style="background-image:url(/dynamique/anniversaire-pour-filles-exterieur/anniversaire-pour-filles-exterieur-<?php echo($i)?>.jpg);"></div>
                                                                <?php } ?>
                                                </div>
                                                <div class="colonneUn">
                                                                <h3>1,2,3...Party!</h3>
                                                                <p>Voyez une petite vidéo de quelques moments saisis lors d’un anniversaire au studio! </p>
                                                                <a href="https://youtu.be/zj9nb0cLmyk" target="_blank" title="Publicité anniversaire pour filles"><img src="/images/youtube-traitement-de-star.png" alt="Publicité anniversaire pour filles"/></a>
                                                                <h3 style="margin-top:25px;">On parle de nous</h3>
                                                                <p>Nous sommes heureux de faire partie du Petit guide des fêtes d’enfants à Québec réalisé par l’équipe de <a href="http://ici.radio-canada.ca/premiere/emissions/radio-canada-cet-apres-midi/segments/chronique/36253/fete-enfants-quebec-guide-suggestions-activites-plaisirs-anniversaire" title="Écouter l'extrait" target="_blank"                                                                  
                                                                onclick="gtag('event', 'Click', {'event_category':'Traitement de STAR','event_label':'Écouter l\'extrait du reportage'});">Ici Radio-Canada Première!   C’est à 14m30s</a> <u>ou</u> <a href="/telechargement/petit-guide-fetes-enfants-quebec.pdf" target="_blank" onclick="gtag('event', 'Click', {'event_category':'Traitement de STAR','event_label':'Consultez le petit guide en PDF'});">consultez le guide en format PDF</a>.</p>
                                                                <a href="http://ici.radio-canada.ca/premiere/emissions/radio-canada-cet-apres-midi/segments/chronique/36253/fete-enfants-quebec-guide-suggestions-activites-plaisirs-anniversaire" title="Écouter l'extrait" target="_blank" onclick="gtag('event', 'Click', {'event_category':'Traitement de STAR','event_label':'Écouter l\'extrait du reportage'});"><img src="/images/ambiance-traitement-de-star.png" alt="Photo d'ambiance pendant l'anniversaire pour filles"/></a> </div>
                                                <div class="colonneDeux texte">
                                                                <h3>Ça, c'est un traitement de Star</h3>
                                                                <p>Nous ne pouvons pas dire le contraire, le plaisir est au rendez-vous! </p>
                                                                <p><img src="/images/_publicites/montage-filles-sautent.png"</p>
                                                </div>
                                </div>
                                <div class="bleuPoudre">
                                                <div class="forfaitContainer">
                                                                <div class="forfait wow fadeIn"> <img src="/images/forfait-or.png" alt="Forfait anniversaire pour filles OR"/> </div>
                                                                <div class="forfait wow fadeIn"> <img src="/images/forfait-argent.png" alt="Forfait anniversaire pour filles ARGENT"/> </div>
                                                                <div class="forfait wow fadeIn"> <img src="/images/forfait-bronze.png" alt="Forfait anniversaire pour filles BRONZE"/> </div>
                                                </div>
                                </div>
                                <div>
                                                <p class="button"><a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('event', 'Click', {'event_category':'Traitement de STAR', 'event_label':'Demande d\'information'});"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                                </div>
                </section>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>