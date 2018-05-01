<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-4">
                    <div class="top-number">
                        <p>
                            <i class="fa fa-phone"></i>  +237 655 669 952 
                            <i class="fa fa-envelope" style="margin-left:5%;"></i>  contact@mboageek.com
                            <i class="fa fa-map-marker" style="margin-left:5%;"></i>  Makepe Missoke, <?php echo L::villepays; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-8">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="<?php echo L::recherche.'...'; ?>">
                                <i class="fa fa-search"></i>
                            </form>
                       </div>
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
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li id="li1"><a href="index.php"><?php echo L::accueil; ?></a></li>
                    <li id="li2"><a href="about-us.php"><?php echo L::apropos; ?></a></li>
                    <li id="li3"><a href="services.php"><?php echo L::services; ?></a></li>
                    <li id="li4"><a href="portfolio.php"><?php echo L::realisations; ?></a></li>
                    <li id="li5"><a href="pricing.php"><?php echo L::tarifs; ?></a></li>
                    <li id="li6" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-item.php">Blog Single</a></li>
                            <li><a href="blog.php">Blog Home</a></li>
                        </ul>
                    </li>
                    <li id="li7"><a href="contact-us.php">Contact</a></li>
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
