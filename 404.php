<?php include("lang.php"); ?>

<!DOCTYPE html>
<html>

<title><?php echo L::title_erreur404; ?> </title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <section id="error" class="container text-center">
        <h1><?php echo L::error_msg; ?></h1>
        <p><?php echo L::error_texte; ?></p>
        <a class="btn btn-primary" href="index.php"><?php echo L::error_btntext; ?></a>
        <img class="img-responsive" style="margin:0 auto; max-height: 300px;" src="images/page-not-found.png">
    </section><!--/#error-->

    <?php include("footer.php"); ?>
</body>
</html>
