<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'famille';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographies de famille à Lévis.';
$descriptionPage = '2t3mPhotos vous offre de devenir votre photographe de famille en vous recevant dans un grand studio situé à Saint-Nicolas (Lévis)';

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
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-photographe-famille.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe/famille"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture" style="background-image: url(/images/entete/photographe-famille.png);">
            <div class="pageLabel">
                <h1>Photographe<br>pour la famille</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Photographe pour la famille</h2>
                    <p>
                        <?php echo($descriptionPage) ?><br>
Nous avons l'espace pour recevoir de grandes familles. Suite &agrave; la s&eacute;ance, vous n'&ecirc;tes pas tenu de faire vos choix imm&eacute;diatement. Vous pourrez regarder le r&eacute;sultat de la s&eacute;ance &agrave; m&ecirc;me le confort de votre foyer, sans pression de notre part. Nous vous offrons également de réaliser la séance photo à l'extérieur pour ajouter du soleil à vos images!</p>



                </div>
                <div class="colonneDeux">
                     <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>





                </div>
                <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>
                <h3>Tarifs</h3>
                <div class="colonneUn">


                    
                    <div class="tarifs">
                        <h4>Option A</h4>
                        <p>Temps de la séance : 1h00<br> Lieux : En studio ou à l'extérieur<br> Nombre de photos : 5</p>
                        <p>Coût : 35$/photo</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option B</h4>
                        <p>Temps de la séance : 1h00<br> Lieux : En studio ou à l'extérieur<br> Nombre de photos : 8</p>
                        <p>Coût : 32$/photo</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option C</h4>
                        <p>Temps de la séance : 1h30<br> Lieux : En studio ou à l'extérieur<br> Nombre de photos : 10</p>
                        <p>Coût : 29$/photo</p>
                    </div>
                     <p class="button"><a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                </div>

                <div class="colonneDeux">


                    <div class="mosaique portfolio">
                        <?php for($i=1;$i<=11;$i++) { ?>
                        <div class="cover wow" style="background-image:url(/dynamique/photographe-famille/photographe-famille-<?php echo($i)?>.jpg);"></div>
                        <?php } ?>
                    </div>



                </div>

            </div>
        </section>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>
</html>