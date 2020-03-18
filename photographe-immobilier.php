<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'immobilier';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographe immobilier pour les courtiers de la région de Québec';
$descriptionPage = 'Réalisation de photographies pour les courtiers immobiliers.';

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
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-photographe-immobilier.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe/immobilier"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture" style="background-image: url(/images/entete/photographe-immobilier.png);">
            <div class="pageLabel">
                <h1>Photographe<br>immobilier</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Photographe immobilier</h2>
                    <p>
                        <?php echo($descriptionPage) ?>
                    <br>
Obtenez les plus belles photographies immobilières HDR qui vous permettront de mettre en valeur les résidences sur le marché que vous désirez vendre.
Nous vous offrons un prix forfaitaire selon le type d'immeuble à photographier.<br>
Profitez de l'occasion pour refaire votre <a href="/fr/photographe/portrait-corporatif" title="Portrait corporatif">portrait corporatif</a>!</p>



                </div>
                <div class="colonneDeux">
                     <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>





                </div>
                <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>
                <h3>Tarifs</h3>
                <div class="colonneUn">


                    
                    <div class="tarifs">
                        <h4>Option A</h4>
                        <p>Temps de la séance : 1h<br> Lieux : 25km du studio<br> Nombre de photos : 10</p>
                        <p>Coût : 100$</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option B</h4>
                        <p>Temps de la séance : 1h30<br> Lieux : 25km du studio<br> Nombre de photos : 15</p>
                        <p>Coût : 125$</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option C</h4>
                        <p>Temps de la séance : 2h<br> Lieux : 25km du studio<br> Nombre de photos : 20</p>
                        <p>Coût : 150$</p>
                    </div>
                     <p class="button"><a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                </div>

                <div class="colonneDeux">


                    <div class="mosaique portfolio">
                        <?php for($i=1;$i<=10;$i++) { ?>
                        <div class="cover wow" style="background-image:url(/dynamique/photographe-immobilier/photographe-immobilier-<?php echo($i)?>.jpg);"></div>
                        <?php } ?>
                    </div>



                </div>

            </div>
        </section>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>
</html>