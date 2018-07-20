<?php include("lang.php"); ?>

<!DOCTYPE html>
<html>

<title><?php echo L::title_accueil; ?></title>
<?php include("librairies.php"); ?>

<body class="homepage">

    <?php include("header.php"); ?>

    <?php include("widgets/main-slider.php"); ?>

    <?php include("widgets/intro.php"); ?>

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

    <?php include("widgets/process.php"); ?>

    <?php include("widgets/contact-info.php"); ?>

    <?php include("footer.php"); ?>

    <script type="text/javascript">
        jQuery("#li1").addClass("active");
    </script>


</body>
</html>