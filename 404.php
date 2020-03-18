<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );


//*****Contenu dynamique de la page*****//
$titrePage = 'Photographe portrait corporatif, immobilier, culinaire à Lévis - Québec / Frédéric Bergeron';
$descriptionPage = 'Photographe professionnel passionné depuis plus de ' . ( date( "Y" ) - 2003 ) . ' ans, laissez-moi créer les images dignes de vos exigences et de vos besoins. Je vous reçois dans un magnifique studio chaleureux de 700 pieds carrés. Ferez-vous partie de ces centaines de clients satisfaits de mes services en photographie?';

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo($titrePage) ?>
    </title>

    <meta name="DESCRIPTION" content="<?=$descriptionPage?>"/>

    <meta property="fb:app_id" content="452453981804995"/>
    <meta property="og:url" content="<?=$domaineEnCours . $urlEnCours?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?=$titrePage?>"/>
    <meta property="og:description" content="<?=$descriptionPage?>"/>
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-image-general.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/404"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture"  style="background-image: url(/images/entete/studio.png);">
            <div class="pageLabel">
                <h1>Photographe<br>Professionnel</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Erreur 404</h2>
                    
                    <p>D&eacute;sol&eacute;, cette page n'existe plus ou a &eacute;t&eacute; d&eacute;plac&eacute;e dans une nouvelle section que vous pouvez d&eacute;couvrir en utilisant le menu ci-haut.</p>
                    <p>
                        <?php echo($descriptionPage) ?>
                    </p>
                </div>
                <div class="colonneDeux">  <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                </div>
                <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>
                <div class="mosaique">
                    <div class="cover wow" style="background-image:url(/images/cover-portrait-corporatif@2x.png);">

                        <div class="title">
                            <h3>Portrait corporatif<a href="/fr/photographe/portrait-corporatif" title="Portrait corporatif">Portrait corporatif</a></h3>

                        </div>

                    </div>
                    <div class="cover wow" style="background-image:url(/images/cover-anniversaire-pour-filles@2x.png);">

                        <div class="title">
                            <h3>Anniversaire pour filles<a href="/fr/photographe/anniversaire-pour-filles">Anniversaire pour filles</a></h3>

                        </div>

                    </div>
                    <div class="cover wow" style="background-image:url(/images/cover-photographe-immobilier@2x.png);">

                        <div class="title">
                            <h3>Photographe immobilier<a href="/fr/photographe/immobilier" title="Photographe immobilier">Photographe immobilier</a></h3>

                        </div>

                    </div>
                    <div class="cover wow" style="background-image:url(/images/cover-famille@2x.png);">

                        <div class="title">
                            <h3>Famille<a href="/fr/photographe/famille">Famille</a></h3>

                        </div>

                    </div>
                    <div class="cover wow" style="background-image:url(/images/cover-photographe-culinaire@2x.png);">

                        <div class="title">
                            <h3>Photographe culinaire<a href="/fr/photographe/culinaire">Photographe culinaire</a></h3>

                        </div>

                    </div>
                    <div class="cover wow" style="background-image:url(/images/cover-prendre-rendez-vous@2x.png);">

                        <div class="title">
                            <h3>Prendre rendez-vous<a href="/fr/contact-photographe-quebec-levis">Prendre rendez-vous</a></h3>

                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>
</html>