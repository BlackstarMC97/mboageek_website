<?php include("lang.php"); ?>

<!DOCTYPE html>
<html>

<title><?php echo L::title_galerie; ?> </title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <section id="">
        
        <div class="container">
            <div class="center">
               <h2><?php echo L::portfolio_title; ?></h2>
               <p class="lead"><?php echo L::portfolio_intro; ?></p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*"><?php echo L::portfolio_tous; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".webshow"><?php echo L::portfolio_site; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".logiciel"><?php echo L::portfolio_appweb; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".design"><?php echo L::portfolio_webdesign; ?></a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                
                <div class="portfolio-items">
                    <div class="portfolio-item webshow col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-numerixrh.png" alt="numerixrh website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::numerixrh_title; ?></a></h3>
                                    <p><?php echo L::numerixrh_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-numerixrh.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://www.numerix-rh.com" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item webshow col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-lbioclin.png" alt="lbioclin website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::lbioclin_title; ?></a></h3>
                                    <p><?php echo L::lbioclin_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-lbioclin.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://www.lbioclin.com" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item webshow col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-agribizz.png" alt="agribizz website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::agribizz_title; ?></a></h3>
                                    <p><?php echo L::agribizz_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-agribizz.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://www.agri-bizz.net/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item webshow col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-fconsulting.png" alt="fconsulting website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::fconsulting_title; ?></a></h3>
                                    <p><?php echo L::fconsulting_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-fconsulting.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://penayecyrille.000webhostapp.com/Fconsulting/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item webshow col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-acager.png" alt="acager website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::acager_title; ?></a></h3>
                                    <p><?php echo L::acager_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-acager.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://www.acager.org/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item design col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-almanna.png" alt="almanna website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::almanna_title; ?></a></h3>
                                    <p><?php echo L::almanna_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-almanna.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://penayecyrille.000webhostapp.com/Almanna/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item logiciel col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/eboard2.png" alt="eboard website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::eboard_title; ?></a></h3>
                                    <p><?php echo L::eboard_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-eboard.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://eboardscreen.000webhostapp.com" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item design col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-mconsulting.png" alt="mconsulting website">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo L::mconsulting_title; ?></a></h3>
                                    <p><?php echo L::mconsulting_intro; ?></p>
                                    <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-mconsulting.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                                    <a target="_blank" class="preview" href="http://penayecyrille.000webhostapp.com/MarkupConsulting/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                </div>

            </div>
        
        </div>
    </section><!--/#portfolio-item-->
    
    <?php include("footer.php"); ?>
    <script type="text/javascript">
        jQuery("#li4").addClass("active");
    </script>

</body>
</html>
