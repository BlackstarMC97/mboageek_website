<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6" style="margin-bottom:20px;">
                <div class="widget">
                    <img class="center-block img-responsive pull-left" src="<?= $baseUrl ?>images/logo-mboageek.png" style="width:85%;position:relative;bottom:15px;right:5px;">
                    <br>
                    <p style="">
                        <?php echo L::mboageek; ?>
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
                    <h3><?php echo L::navigation; ?></h3>
                    <ul>
                        <li><a href="#"><?php echo L::nousconnaitre; ?></a></li>
                        <li><a href="#"><?php echo L::nosservices; ?></a></li>
                        <li><a href="#"><?php echo L::offresdevweb; ?></a></li>
                        <li><a href="#"><?php echo L::galerieprojets; ?></a></li>
                        <li><a href="#"><?php echo L::blogdesgeeks; ?></a></li>
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
                    <h3><?php echo L::tweets; ?></h3>
                    <a class="twitter-timeline" data-height="300" data-width="340" href="https://twitter.com/PenayeCyrille?ref_src=twsrc%5Etfw">Tweets <?php echo L::par; ?> MboaGeek</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3><?php echo L::pagefacebook; ?></h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fushideshi%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                &copy; <?php echo date("Y"); ?> <a target="_blank" href="http://mboageek.com/fr" title="<?php echo L::mboageekrole; ?>">MboaGeek</a>. <?php echo L::droits; ?>.
            </div>
            <div class="col-sm-8">
                <ul class="pull-right">
                    <li><a href="#"><?php echo L::sommet; ?></a></li>
                    <li><a href="#"><?php echo L::mentionslegales; ?></a></li>
                    <li><a href="#"><?php echo L::nousrejoindre; ?></a></li>
                    <li><a href="#"><?php echo L::plandusite; ?></a></li>
                    <li><a href="#"> <img src="<?= $baseUrl ?>images/MboaGeek_Google_Partner.png" style="height:50px;"> </a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?= $baseUrl ?>js/jquery.js"></script>
<script src="<?= $baseUrl ?>js/bootstrap.min.js"></script>
<script src="<?= $baseUrl ?>js/jquery.prettyPhoto.js"></script>
<script src="<?= $baseUrl ?>js/jquery.isotope.min.js"></script>
<script src="<?= $baseUrl ?>js/main.js"></script>
<script src="<?= $baseUrl ?>js/wow.min.js"></script>
