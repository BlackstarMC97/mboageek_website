<?php include("lang.php"); ?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo L::title_recruitment; ?></title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <section id="contact-info">
        <div class="center">                
            <h2><?php echo L::join_title; ?></h2>
            <p class="lead"><?php echo L::join_intro; ?></p>
        </div>

        <div class="container text-center" style="margin-bottom:50px;">
            <h2><?php echo L::join_nothing; ?></h2>
            <a href="<?= $baseUrl; ?>contact?lang=<?= $_GET['lang']; ?>#contact-page" class="btn btn-lg btn-primary" style="margin-bottom:10px;"><?php echo L::contacteznous; ?></a>
        </div>
    </section>  <!--/gmap_area -->

    
    <?php include("footer.php"); ?>
    <script type="text/javascript">
        
    </script>
</body>
</html>