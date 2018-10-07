<?php include("lang.php"); ?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo L::title_tarifs; ?> </title>
<?php include("librairies.php") ?>

<body>

    <?php include("header.php"); ?>

    <section class="pricing-page">
        <div class="container" style="margin-bottom:90px;">
            <div class="center wow fadeInDown">  
                <h2><?php echo L::prix_title; ?></h2>
                <p class="lead"><?php echo L::prix_intro; ?></p>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1><?php echo L::prix_devis; ?></h1>
                                <span><?php echo L::prix_gratuit; ?></span>
                            </li>
                            <li><?php echo L::prix_devisprojet; ?></li>
                            <li><?php echo L::prix_conseils; ?></li>
                            <li><?php echo L::prix_proposition; ?></li>
                            <li><?php echo L::prix_carnet; ?></li>
                            <li><?php echo L::prix_recherche; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1><?php echo L::prix_contenu; ?></h1>
                                <span>25.000 Fcfa/<?php echo L::prix_mois; ?></span>
                            </li>
                            <li><?php echo L::prix_redaction; ?></li>
                            <li><?php echo L::prix_optimisation; ?></li>
                            <li><?php echo L::prix_correction; ?></li>
                            <li>Social media marketing</li>
                            <li>Blogging</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown">
                        <img src="<?= $baseUrl ?>images/ribon_one.png">
                        <ul>
                            <li class="heading-three">
                                <h1><?php echo L::prix_maintenance; ?></h1>
                                <span>50.000 Fcfa/<?php echo L::prix_an; ?></span>
                            </li>
                            <li><?php echo L::prix_refonte; ?></li>
                            <li><?php echo L::prix_deboguage; ?></li>
                            <li><?php echo L::prix_ajout; ?></li>
                            <li><?php echo L::prix_hebergement; ?></li>
                            <li><?php echo L::prix_formation; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                    
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->

        <div class="container">
            <div class="center wow fadeInDown">  
                <h2><?php echo L::pack_title; ?></h2>
                <p class="lead"><?php echo L::pack_intro; ?></p>
            </div>  

            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1><?php echo L::pack_basique; ?></h1>
                                <span>70.000 Fcfa</span>
                            </li>
                            <li><?php echo L::pack_accueil; ?></li>
                            <li><?php echo L::pack_realisation; ?></li>
                            <li><?php echo L::pack_service; ?></li>
                            <li><?php echo L::pack_erreur; ?></li>
                            <li><?php echo L::pack_apropos; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1><?php echo L::pack_standard; ?></h1>
                                <span>120.000 Fcfa</span>
                            </li>
                            <li><?php echo L::pack_slider; ?></li>
                            <li><?php echo L::pack_formulaire; ?></li>
                            <li><?php echo L::pack_carte; ?></li>
                            <li><?php echo L::pack_logo; ?></li>
                            <li><?php echo L::pack_actus; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                        <img src="<?= $baseUrl ?>images/ribon_two.png">
                        <ul>
                            <li class="heading-six">
                                <h1>Premium</h1>
                                <span>220.000 Fcfa</span>
                            </li>
                            <li><?php echo L::pack_newsletter; ?></li>
                            <li><?php echo L::pack_multilingue; ?></li>
                            <li><?php echo L::pack_shooting; ?></li>
                            <li><?php echo L::pack_charte; ?></li>
                            <li><?php echo L::pack_blog; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1><?php echo L::pack_perso; ?></h1>
                                <span><?php echo L::pack_apartir; ?>250.000 Fcfa</span>
                            </li>
                            <li><?php echo L::pack_application; ?></li>
                            <li><?php echo L::pack_boutique; ?></li>
                            <li><?php echo L::pack_logiciel; ?></li>
                            <li><?php echo L::pack_fonctionnalite; ?></li>
                            <li><?php echo L::pack_support; ?></li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary"><?php echo L::prix_details; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            
        </div>
    </section><!--/pricing-page-->
    
    <section style="background-image:url('<?= $baseUrl ?>images/partners/bg-partner.jpg');border-top:1px groove #0b497a;padding-top:30px;padding-bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1><?php echo L::prix_question; ?></h1>
                    <span style="color:white;"><?php echo L::prix_proposition2; ?></span>
                    <div class="text-center">
                        <a href="<?= $baseUrl; ?>contact?lang=<?= $_GET['lang']; ?>#contact-page" class="btn btn-lg btn-primary" style="background-color:red;font-size:1.5em;margin-bottom:40px;"><?php echo L::contacteznous; ?></a>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <?php include("footer.php"); ?>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script type="text/javascript">
        jQuery("#li3").addClass("active");
    </script>
</body>
</html>