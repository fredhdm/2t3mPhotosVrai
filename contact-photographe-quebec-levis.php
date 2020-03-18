<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ] . '/includes/parametres.php' );

$pageActuelle = 'contactez';

//*****Contenu dynamique de la page*****//
$titrePage = 'Contactez 2t3m Photos pour vos photographies corporatives, immobilières, d\'hôtels et culinaire.';
$descriptionPage = 'Des centaines de clients ont déjà profité de nos services en photographie, informez-vous!';

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
    <meta property="og:image" content="<?=$domaineEnCours?>/images/og/facebook-og-contactez-nous.png"/>

    <link rel="canonical" href="https://www.2t3mphotos.com/fr/contact-photographe-quebec-levis"/>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'); ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>






    <div class="container">
        <div class="bigPicture" style="background-image: url(/images/entete/photographe-hotel.png);">
            <div class="pageLabel">
                <h1>Demande d'information<br>
ou prendre rendez-vous</h1>
            </div>
        </div>

        <section>
            <div class="content">
                <div class="colonneUn">
                    <h2>Demande d'information ou prendre rendez-vous</h2>
                    <p>
                        <p>
                            <?php echo($descriptionPage) ?>
                        </p>
                        <p>2t3m Photos et HD Marketing offre ses services à Québec et à l'extérieur de la région. Pour prendre rendez-vous ou une demande d'information : </p>
                    </p>

                    <p class="hightlight">Un service rapide,<br>efficace et personnalisé!</p>

                </div>
                <div class="colonneDeux">


                    <p class="button"> <a href="mailto:info@2t3mphotos.com" title="Écrire un courriel"  onclick="gtag('event', 'Click', {'event_category':'Contactez-nous','event_label':'Écrire un courriel'});"><img src="/images/bouton-ecrire-un-courriel.png" alt="Écrire un courriel"></a>
                    </p>


                </div>

                <h3>Nos coordonnées</h3>

                <div class="colonneUn">



                    <div class="tarifs">
                        <h4>Adresse</h4>


                        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                       <span>   5100 Rue des Tournelles, bureau 239<br>
Québec, QC G2J 1E4</span>
                        </p>
                    </div>

                    <div class="tarifs">
                        <h4>Téléphone</h4>
                        <p>418-667-9122</p>
                    </div>

                    <div class="tarifs">
                        <h4>Courriel</h4>
                        <p><a href="mailto:info@2t3mphotos.com">info@2t3mphotos.com</a>
                        </p>
                    </div>
                   
                    
                    <!--div class="googleMap">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1367.4721358787235!2d-71.29827330719154!3d46.726560679033824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb891a705b7a8fb%3A0xf9f02632da97c23e!2sStudio+de+photographie+2+temps+%2F+3+mouvements!5e0!3m2!1sfr!2sus!4v1492800329865" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    </div-->
                    
                    
                </div>


                <div class="colonneDeux">


                    <div class="mosaique portfolio">
                        <?php for($i=1;$i<=10;$i++) { ?>
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