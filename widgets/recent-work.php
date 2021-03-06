<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php echo L::projetstitle; ?> </h2>
            <p class="lead">
                <?php echo L::projetsintro; ?>
            </p>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-numerixrh.png" alt="numerixrh website">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#"><?php echo L::numerixrh_title; ?></a></h3>
                            <p><?php echo L::numerixrh_intro; ?></p>
                            <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-numerixrh.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                            <a target="_blank" class="preview" href="http://www.numerix-rh.com/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
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
            </div> 

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?= $baseUrl ?>images/portfolio/recent/image-lbioclin.png" alt="lbioclin website">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#"><?php echo L::lbioclin_title; ?></a></h3>
                            <p><?php echo L::lbioclin_intro; ?></p>
                            <a class="preview" href="<?= $baseUrl ?>images/portfolio/full/image-lbioclin.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo L::apercu; ?></a>
                            <a target="_blank" class="preview" href="http://www.lbioclin.com/" style="margin-left:20px;"><i class="fa fa-globe"></i> <?php echo L::lien; ?></a>
                        </div> 
                    </div>
                </div>
            </div>   

            <div class="text-center">
                <a href="<?= $baseUrl ?><?php echo $_GET['lang']; ?>/portfolio" class="btn btn-lg btn-primary" style="margin-top:10px;"><?php echo L::toustravaux; ?></a>
            </div>
            
            
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->
