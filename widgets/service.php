<section id="services" class="service-item">
   <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php echo L::servicestitle; ?></h2>
            <p class="lead">
                <?php echo L::servicesintro; ?>
            </p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-devX.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo ucwords(L::service_devweb); ?></h3>
                        <p><?php echo L::description_devweb; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-marketingX.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo ucwords(L::service_marketing); ?></h3>
                        <p><?php echo L::description_marketing; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-consultX.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo (L::service_consulting); ?></h3>
                        <p><?php echo L::description_consulting; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-arduinoV.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo ucwords(L::service_embarque); ?></h3>
                        <p><?php echo L::description_embarque; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-csharpX.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo ucwords(L::service_dotnet); ?></h3>
                        <p><?php echo L::description_dotnet; ?></p>
                    </div>
                </div>
            </div>  

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= $baseUrl ?>images/services/icon-aibrainX.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo (L::service_ia); ?></h3>
                        <p><?php echo L::description_ia; ?></p>
                    </div>
                </div>
            </div>                                                
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
