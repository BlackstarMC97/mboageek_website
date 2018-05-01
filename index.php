<?php include("lang.php"); ?>

<!DOCTYPE html>
<html>

<title><?php echo L::title_accueil; ?></title>
<?php include("librairies.php"); ?>

<body class="homepage">

    <?php include("header.php"); ?>

    <?php include("widgets/main-slider.php"); ?>

    <?php include("widgets/feature.php"); ?>

    <?php include("widgets/recent-work.php"); ?>

    <?php include("widgets/service.php"); ?>

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    
                    <?php include("widgets/skill.php"); ?>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    
                    <?php include("widgets/strong-point.php"); ?>
                    
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   
                    <?php include("widgets/tab-wrap.php"); ?>

                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <?php include("widgets/partner.php"); ?>

    <?php include("widgets/contact-info.php"); ?>

    <?php include("footer.php"); ?>
    <script type="text/javascript">
        jQuery("#li1").addClass("active");
    </script>


</body>
</html>