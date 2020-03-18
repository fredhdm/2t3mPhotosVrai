<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'corporatif';

//*****Contenu dynamique de la page*****//
$titrePage = 'Photographe portrait corporatif  à Lévis - Québec / Frédéric Bergeron';
$descriptionPage = '2 temps / 3 mouvements vous offre le service de photographies corporatives dans un studio situé dans la région de Québec, à Lévis.
L’équipe peut également se déplacer à même votre entreprise ou un autre lieu à votre convenance.';

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
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-portrait-corporatif.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/photographe/portrait-corporatif"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture" style="background-image: url(/images/entete/portrait-corporatif.png);">
            <div class="pageLabel">
                <h1>Portrait<br>corporatif</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Portrait corporatif</h2>
                    <p>
                        <?php echo($descriptionPage) ?>
                    </p>



                </div>
                <div class="colonneDeux">
                     <p class="button"> <a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('send', 'event', 'Portrait corporatif', 'Click', 'Informez-vous');"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>





                </div>
                <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>
                <h3>Tarifs</h3>
                <div class="colonneUn">


                    
                    <div class="tarifs">
                        <h4>Option A</h4>
                        <p>Temps de la séance : 30 minutes<br> Lieux : En studio ou dans votre environnement*<br> 
                        Nombre de photos retouchées: 1</p>
                        <p>Coût : 125$</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option B</h4>
                        <p>Temps de la séance : 30 minutes<br> Lieux : En studio ou dans votre environnement*<br>
                        				 Nombre de photos retouchées : 2</p>
                        <p>Coût : 80$/photo</p>
                    </div>

                    <div class="tarifs">
                        <h4>Option C</h4>
                        <p>Temps de la séance : 30 minutes<br> Lieux : En studio ou dans votre environnement*<br>
                        				 Nombre de photos retouchées : 3</p>
                        <p>Coût : 70$/photo</p>
                    </div>
                     <p class="button"><a href="/fr/contact-photographe-quebec-levis" title="Demande d'information" onclick="gtag('event', 'Click', {'event_category':'Demande d\'information','event_label':'Portrait corporatif'});"><img src="/images/bouton-demande-information.png" alt="Demande d'information"></a></p>
                </div>

                <div class="colonneDeux">


                    <div class="mosaique portfolio">
                        <?php for($i=1;$i<=10;$i++) { ?>
                        <div class="cover wow" style="background-image:url(/dynamique/portrait-corporatif/portrait-corporatif-<?php echo($i)?>.jpg);"></div>
                        <?php } ?>
                    </div>



                </div>

            </div>
        </section>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>
</html>