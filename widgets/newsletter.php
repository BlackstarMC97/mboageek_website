<section style="background-image:url('<?= $baseUrl ?>images/partners/bg-letter.jpg');border-top:1px groove #0b497a;padding-top:30px;padding-bottom:15px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 col-xs-12 control-label pull-left hidden-xs" style="color:white;font-size:1.5em;"><i class="fa fa-envelope"></i> <?php echo L::newsletter_title; ?></label>
                        <label for="inputEmail3" class="col-sm-5 col-x-12 control-label pull-left visible-xs" style="color:white;font-size:1.5em;margin-bottom:5px;"><i class="fa fa-envelope"></i> <?php echo L::notre; ?> NEWSLETTER</label>
                        <div class="input-group col-sm-7 col-xs-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="<?php echo L::newsletter_intro; ?>" style="margin-left:5px;">
                            <span class="input-group-btn">
                                <button class="btn" type="button" style="color:white;background-color:red;border:1px solid white;"><?php echo L::envoyer; ?> <i class="fa fa-mail-forward"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->
