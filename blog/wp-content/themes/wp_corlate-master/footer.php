<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_corlate
 */

?>

<?php
$footer_links = get_option( 'wp_corlate_footer_links' );
?>
<section id="bottom">
	<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
		<div class="row">
        <div class="col-md-3 col-sm-6" style="margin-bottom:20px;">
            <div class="widget">
                <img class="center-block img-responsive pull-left" src="http://localhost/MboaGeek/images/logo-mboageek.png" style="width:85%;position:relative;bottom:15px;right:5px;">
                <br>
                <p style="">
                    <strong>MboaGeek</strong> est une agence de développement web, communication digitale et d'ingénierie informatique basée au Cameroun dont le but est d'apporter un soutien aux entrepreneurs et petites entreprises dans la réalisation de leurs projets et la concrétisation de leurs idées dans le domaine des TIC.
                </p>
                
                <ul style="position:relative;bottom:3.5px;">
                    <li><i class="fa fa-phone-square"></i> (+237) 655 669 952</li>
                    <li><i class="fa fa-envelope-o"></i> contact@mboageek.com</li>
                    <li>
                        <a class="bs-social" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="bs-social" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="bs-social" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li></li>
                </ul>


            </div>    
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6" style="margin-bottom:20px;">
            <div class="widget">
                <h3><?php echo "Navigation"; ?></h3>
                <ul>
                    <li><a href="#"><?php echo "Nous connaître"; ?></a></li>
                    <li><a href="#"><?php echo "Découvrir nos services"; ?></a></li>
                    <li><a href="#"><?php echo "Offres de développement web"; ?></a></li>
                    <li><a href="#"><?php echo "Galerie des projets réalisés"; ?></a></li>
                    <li><a href="#"><?php echo "Blog de la communauté"; ?></a></li>
                    <li><a href="#">Pourquoi créer un site web en 2018 ?</a></li>
                    <li><a href="#">Les 10 qualités d'un site web</a></li>
                    <li><a href="#">Comment choisir son agence web ?</a></li>
                    <li><a href="#">Geek news : Heu.. Bloque chaine ?</a></li>
                    <li></li>
                </ul>
            </div>    
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6" style="margin-bottom:20px;">
            <div class="widget">
                <h3><?php echo "Tweets recents"; ?></h3>
                <a class="twitter-timeline" data-height="300" data-width="340" href="https://twitter.com/PenayeCyrille?ref_src=twsrc%5Etfw">Tweets <?php echo "de"; ?> MboaGeek</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>    
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
            <div class="widget">
                <h3><?php echo "Notre page Facebook"; ?></h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fushideshi%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>    
        </div><!--/.col-md-3-->
    </div>
	</div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue" style="margin-top:0px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                &copy; <?php echo date("Y"); ?> <a target="_blank" href="http://mboageek.com/fr" 
                title="<?php echo "Agence de développement web"; ?>">MboaGeek</a>. <?php echo "Tous droits réservés"; ?>.
            </div>
            <div class="col-sm-8">
                <ul class="pull-right">
                    <li><a href="#"><?php echo "Retour au sommet"; ?></a></li>
                    <li><a href="#"><?php echo "Mentions légales"; ?></a></li>
                    <li><a href="#"><?php echo "Nous rejoindre"; ?></a></li>
                    <li><a href="#"><?php echo "Plan du site"; ?></a></li>
                    <li><a href="#"> <img src="http://localhost/Mboageek/images/MboaGeek_Google_Partner.png" style="height:50px;"> </a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
<?php wp_footer(); ?>

</body>
</html>
