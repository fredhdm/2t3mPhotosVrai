<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'hotel';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographie d\'hôtels, de chambres, de réceptions et de salles de réunion.';
$descriptionPage = 'Réalisation de photographies pour les hôteliers incluant les chambres, les réceptions, les salles de réunion, etc.';

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
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-photographe-hotel2.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe/hotel"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture" style="background-image: url(/images/entete/photographe-hotel.png);">
            <div class="pageLabel">
                <h1>Photographe<br>hôtel</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Photographies d'hôtels</h2>
                    <p>
                        <?php echo($descriptionPage) ?>
                    <br>
Obtenez les plus belles photographies  HDR pour votre hôtel qui vous permettront de mettre en valeur les chambres, la réception, les salles de réunion et encore plus.
Nous vous offrons un prix forfaitaire d'un minimum de 4 photos par chambre ou par lieu selon les normes des moteurs de réservation.</p>



                </div>
                <div class="colonneDeux">
                     <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Photographe Hôtel', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>





                </div>
                <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>
                <h3>Tarifs</h3>
                <div class="colonneUn">


                    
                    <div class="tarifs">
                        <h4>Option A</h4>
                        <p>Nombre de lieux : Entre 1 et 10<br>  Nombre de photos : Maximum de 40</p>
                        <p>Coût : 45$ par photo</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option B</h4>
                         <p>À discuter avec le client</p>
                    </div>

                    <!--div class="tarifs">
                        <h4>Option C</h4>
                        <p>Nombre de lieux : 10 et plus<br>  Nombre de photos : 40 et plus</p>
                        <p>Coût : 25$ par photo</p>
                    </div-->
                     <p class="button"><a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Photo Hôtel', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                </div>

                <div class="colonneDeux">


                    <div class="mosaique portfolio">
                        <?php for($i=1;$i<=43;$i++) { ?>
                        <div class="cover wow" style="background-image:url(/dynamique/photographe-hotel/photographe-hotel-<?php echo($i)?>.jpg);"></div>
                        <?php } ?>
                    </div>



                </div>

            </div>
        </section>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>
</html>