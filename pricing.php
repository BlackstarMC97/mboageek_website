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
                <h2>Coûts de nos services web</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Devis et conseils</h1>
                                <span>Gratuit</span>
                            </li>
                            <li>Devis de votre projet</li>
                            <li>Conseils techniques</li>
                            <li>Proposition d'idées</li>
                            <li>Carnet d'adresses</li>
                            <li>Recherche de partenaires</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Gestion de contenu</h1>
                                <span>25.000 Fcfa/semaine</span>
                            </li>
                            <li>Rédaction d'aticles</li>
                            <li>Optimisation SEO</li>
                            <li>Correction de textes</li>
                            <li>Social media marketing</li>
                            <li>Blogging</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown">
                        <img src="images/ribon_one.png">
                        <ul>
                            <li class="heading-three">
                                <h1>Maintenance</h1>
                                <span>50.000 Fcfa/an</span>
                            </li>
                            <li>Refonte graphique du site</li>
                            <li>Déboguage du code</li>
                            <li>Ajout de fonctionnalités</li>
                            <li>Hébergement du site web</li>
                            <li>Formation sur l'interface</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                    
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->

        <div class="container">
            <div class="center wow fadeInDown">  
                <h2>Nos différents packs</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>  

            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>Basique</h1>
                                <span>70.000 Fcfa</span>
                            </li>
                            <li>Page d'accueil</li>
                            <li>Page des réalisations</li>
                            <li>Page des services</li>
                            <li>Page d'erreur 404</li>
                            <li>Page à propos</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Standard</h1>
                                <span>120.000 Fcfa</span>
                            </li>
                            <li>Slider d'images animées</li>
                            <li>Formulaire de contact</li>
                            <li>Carte Google Maps</li>
                            <li>Logo et image visuelle</li>
                            <li>Gestion des actualités</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                         <img src="images/ribon_two.png">
                        <ul>
                            <li class="heading-six">
                                <h1>Premium</h1>
                                <span>220.000 Fcfa</span>
                            </li>
                            <li>Système de newsletter</li>
                            <li>Multilingue</li>
                            <li>Shooting photo</li>
                            <li>Charte graphique</li>
                            <li>Blog intégré au site</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1>Personnalisé</h1>
                                <span>à partir de 250.000 Fcfa</span>
                            </li>
                            <li>Application web</li>
                            <li>Boutique en ligne</li>
                            <li>Logiciel métier</li>
                            <li>Fonctionnalité complexe</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-primary">Détails</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            
        </div>
    </section><!--/pricing-page-->
           
    <?php include("footer.php"); ?>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script type="text/javascript">
        jQuery("#li3").addClass("active");
    </script>
</body>
</html>