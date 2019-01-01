<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <!--
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        -->
        <div class="carousel-inner" style="height:600px;">

            <div class="item active" style="background-image: url(<?= $baseUrl ?>images/slider/bg-simple.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="" style="margin:0 10px;">
                            <!-- 
                            <span class="" style="background-color:green;color:white;padding:20px;display:inline-block;border-radius:50% 50%;font-size:0.9em;position:absolute;top:5%;left:75%;text-align:center;">50% de réduction <br>avant janvier 2018</span>
                            -->
                            
                            <div class="carousel-content">
                                <h1 style="background-color:#0b497a;padding:15px;display:inline-block;text-align:center;"><?php echo L::slider_puv; ?></h1>
                                <div class="text-center" style="margin-top:10%;">
                                    <a href="<?= $baseUrl ?>contact?lang=<?= $_GET['lang']; ?>#contact-page" class="btn" style="background-color:orange;color:white;font-size:1.5em;border-radius:0;"><?php echo L::slider_besoin; ?></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!--/.item-->

            <!--
            <div class="item" style="background-image: url(<?= $baseUrl ?>images/slider/bg-macbook.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="">
                            <div class="carousel-content">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(<?= $baseUrl ?>images/slider/bg-keys.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="">
                            <div class="carousel-content">
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            -->
            
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    
    <!--
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
    -->
</section><!--/#main-slider-->
