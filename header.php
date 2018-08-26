<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>


<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div class="top-number">
                        <span class="bs-toptext"><i class="fa fa-phone"></i>  +237 653 747 134 </span>
                    </div>
                </div>
                
                <div class="col-sm-2 col-xs-12">
                    <div class="top-number">
                        <span class="bs-toptext"><i class="fa fa-phone"></i>  +237 655 669 952 </span>
                    </div>
                </div>
                
                <div class="col-sm-3 col-xs-12">
                    <div class="top-number">
                        <span class="bs-toptext"><i class="fa fa-envelope"></i>  contact@mboageek.com </span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12">
                    <div class="top-number">
                        <span class="bs-toptext"><i class="fa fa-map-marker"></i>  Makepe Missoke, <?php echo L::villepays; ?></span>
                    </div>
                </div>
                
                <div class="col-sm-2 col-xs-12">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                        </ul>
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo-mboa-geek.png" alt="logo"></a>
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li id="li1"><a href="index.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::accueil; ?></a></li>
                    <li id="li2"><a href="about-us.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::apropos; ?></a></li>
                    
                    <li id="li3"><a href="pricing.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::tarifs; ?></a></li>

                    <li id="li4"><a href="portfolio.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::realisations; ?></a></li>
                    <li id="li6"><a href="blog.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::blog; ?></a></li>
                    <li id="li7"><a href="contact-us.php?lang=<?php echo $_GET['lang']; ?>"><?php echo L::contact; ?></a></li>
                    <li id="li8" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="images/<?php echo $_GET['lang']; ?>.png" style=""> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="?lang=fr"><img src="images/fr.png">&nbsp Français</a></li>
                            <li><a href="?lang=en"><img src="images/en.png">&nbsp English</a></li>
                            <li><a href="?lang=en"><img src="images/al.png">&nbsp Deutsch</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
    
</header><!--/header-->

<?php 
    //sprintf( '[footer_copyright before="%s "] &#x000B7; [footer_genesis_link url="http://www.mboageek.com/" before=""] &#x000B7', __( 'Copyright', 'genesis' ) );
?>
