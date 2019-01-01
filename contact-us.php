<?php include("lang.php"); ?>

<!DOCTYPE html>
<html>

<title><?php echo L::title_contactus; ?> </title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <?php 
        function choiceToString($str) {
            switch ($str) {
                case 'devis':
                    return L::prix_devis;
                break;
                
                case 'content':
                    return L::prix_contenu;
                break;
                
                case 'debugging':
                    return L::prix_maintenance;
                break;
                
                case 'basic':
                    return "Pack ".L::pack_basique;
                break;
                
                case 'standard':
                    return "Pack ".L::pack_standard;
                break;

                case 'premium':
                    return "Pack Premium";
                break;

                default:
                    return "Pack ".L::pack_perso;
                break;
            }
        }
    ?>

    <section id="contact-info">
        <div class="center">                
            <h2><?php echo L::contacts_title; ?></h2>
            <p class="lead"><?php echo L::contacts_intro; ?></p>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin:0px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15918.704281414704!2d9.7544904!3d4.0862061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8b6cf48cbd25f9a!2sMboaGeek!5e0!3m2!1sfr!2scm!4v1546163521287" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- -->
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
                <div class="status-message"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><?php echo L::nom; ?> *</label>
                            <input type="text" id="contact-name" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::email; ?> *</label>
                            <input type="email" id="contact-email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::phone; ?></label>
                            <input type="number" name="phone" class="form-control" min="622222222" required="required">
                        </div>
                        <div class="form-group">
                            <label><?php echo L::structure; ?></label>
                            <input type="text" name="society" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><?php echo L::sujet; ?> *</label>
                            
                            <?php 
                                if(!isset($_GET["choice"])) {
                                    echo '
                                        <input type="text" name="subject" class="form-control" required="required">
                                    ';
                                }
                                else {
                                    //choiceToString($_GET["choice"]);
                                    echo '
                                        <input type="text" name="subject" value='.str_replace(' ', '-', choiceToString($_GET["choice"])).' class="form-control" disabled>
                                    ';
                                }
                            ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo L::message; ?> *</label>
                            <textarea name="message" id="contact-message" class="form-control" rows="8" required="required"></textarea>
                        </div>                        
                        
                    </div>

                    <div class="col-sm-12 form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg center-block" id="submit-form-button" value='<?php echo L::envoyermsg; ?>' required="required" />
                    </div>
                </form> 
                <div class="second-status col-sm-12 container"></div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include("footer.php"); ?>
    <script type="text/javascript">
        jQuery("#li7").addClass("active");

        // CONTACT FORM AJAX SUBMIT START
        $('#submit-form-button').on('click', function (event) {
            event.preventDefault();
            console.log('Btn clicked !');
            var name = $('#contact-name').val();
            var email = $('#contact-email').val();
            var message = $('#contact-message').val();
            var form_data = new Array({'Name': name, 'Email': email, 'Message': message});

            var status = $('.second-status');
            var button = $('#submit-form-button');
            button.addClass('hidden');

            var msgerror = "<?php echo L::status_erreur; ?>";
            console.log(msgerror);

            $.ajax({
                type: 'POST',
                url: "sendemail.php",
                dataType:"json",
                data: ({'action': 'contact', 'form_data': form_data, 'email': email, 'name':name, 'message':message}),
                success: function(data){
                    console.log(data.message);
                    status.append('<p class="alert alert-success" role="alert">' + data.message + '</p>').delay(3000).fadeOut();
                },  
                error: function(err){
                    console.log(err);
                    status.append('<p class="alert alert-warning" role="alert">'+msgerror+'</p>').fadeOut(10000, function() {
                        status.html(""); status.fadeIn(100); button.removeClass('hidden');
                    });
                }
            });
        });
        // CONTACT FORM AJAX SUBMIT END
    </script>
</body>
</html>