<?php include("lang.php"); ?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo L::title_legals; ?></title>
<?php include("librairies.php"); ?>

<body>

    <?php include("header.php"); ?>

    <section id="contact-info">
        <div class="center">                
            <h2><?php echo L::mention_title; ?></h2>
            <p><?php echo L::mention_intro; ?></p>
        </div>

        <div class="container">
    		<h2><?php echo L::mention_presentation; ?></h2>
    		<p>
    			<?php echo L::mention_partie1; ?>
    		</p>

    		<h2><?php echo L::mention_propriete; ?></h2>
    		<p>
    			<?php echo L::mention_partie2; ?>
    		</p>

    		<h2><?php echo L::mention_cookie; ?></h2>
    		<p>
    			<?php echo L::mention_partie3; ?>
    		</p>

    		<h4><?php echo L::mention_audience; ?></h4>
    		<p>
    			<?php echo L::mention_partie31; ?>
    		</p>

    		<h4><?php echo L::mention_reseaux; ?></h4>
    		<p>
    			<?php echo L::mention_partie32; ?>
    		</p>

    		<h2><?php echo L::mention_formulaire; ?></h2>
    		<p>
    			<?php echo L::mention_partie4; ?>
    		</p>

    		<h2><?php echo L::mention_moderation; ?></h2>
    		<p>
    			<?php echo L::mention_partie5; ?>
    		</p>

    		<h2><?php echo L::mention_newsletter; ?></h2>
    		<p>
    			<?php echo L::mention_partie6; ?>
    		</p>

    		<h2><?php echo L::mention_liens; ?></h2>
    		<p>
    			<?php echo L::mention_partie7; ?>
    		</p>
    	</div>
    </section>

    
    
    <?php include("footer.php"); ?>
    <script type="text/javascript">
        
    </script>
</body>
</html>