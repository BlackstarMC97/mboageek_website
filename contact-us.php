<?php include("lang.php"); ?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo L::title_contactus; ?> </title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <section id="contact-info">
        <div class="center">                
            <h2><?php echo L::contacts_title; ?></h2>
            <p class="lead"><?php echo L::contacts_intro; ?></p>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin:0px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6835780293277!2d9.753113814109929!3d4.084692797029838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dda42a1f22f%3A0x835c8d5a8329888d!2sMakepe+Rhone+Poulenc!5e0!3m2!1sfr!2scm!4v1519998948838" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2><?php echo L::contacts_formulaire; ?></h2>
                <p class="lead"><?php echo L::contacts_message; ?></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><?php echo L::nom; ?> *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::email; ?> *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::phone; ?></label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::structure; ?></label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><?php echo L::sujet; ?> *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::message; ?> *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        
                    </div>

                    <div class="col-sm-12 form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg center-block" required="required"><?php echo L::envoyermsg; ?></button>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include("footer.php"); ?>
    <script type="text/javascript">
        jQuery("#li7").addClass("active");
    </script>
</body>
</html>