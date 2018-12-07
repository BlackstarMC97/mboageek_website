<?php include("lang.php"); ?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo L::title_apropos; ?> </title>
<?php include("librairies.php"); ?>
<link rel="stylesheet" type="text/css" href="css/timeline.css">

<body>

    <?php include("header.php"); ?>

    <section id="about-us">
        <div class="container">
			<!-- Our-startup -->
			<div class="startup wow fadeInDown" style="margin-bottom:120px;">
				<div class="center">
					<h2><?php echo L::presentation_title; ?></h2>
					<p class="lead"><?php echo L::presentation_intro; ?></p>
				</div>

				<div class="row">
					<div class="col-md-6" style="position:relative;bottom:40px;">
						<h1><strong><?php echo L::presentation_qui; ?></strong></h1>
						<p style="font-size:1.15em;line-height:25px;">
							<?php echo L::presentation_phrase1; ?> 
							<br>
							<?php echo L::presentation_phrase2; ?>
							<br>
							<ul style="font-weight:bold;font-size:1.15em;line-height:30px;">
								<li><?php echo L::presentation_site; ?></li>
								<li><?php echo L::presentation_logiciel; ?></li>
								<li><?php echo L::presentation_marketing; ?></li>
								<li><?php echo L::presentation_conseils; ?></li>
							</ul>

						</p>
					</div>

					<div class="col-md-6">
						<img src="<?= $baseUrl ?>images/121.jpg" class="img-responsive img-thumbnail">
					</div>
				</div>
			</div>



			<div class="story" style="margin-bottom:120px;">
				<div class="center wow fadeInDown">
					<h2><?php echo L::agence_title; ?></h2>
					<p class="lead"><?php echo L::agence_intro; ?></p>
				</div>
				
				<?php include('widgets/timeline.php'); ?>
			</div>
			

			<!-- Our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2><?php echo L::equipe_title; ?></h2>
					<p class="lead"><?php echo L::equipe_intro; ?></p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object img-thumbnail img-circle" src="<?= $baseUrl ?>images/avatar/icone-cyrille.png" alt="avatar-cyrille"></a>
								</div>
								<div class="media-body">
									<h4>Cyrille PENAYE</h4>
									<h5><?php echo L::equipe_poste1; ?></h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Software</a></li>
										<li class="btn"><a href="#">Consulting</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object img-thumbnail img-circle" src="<?= $baseUrl ?>images/avatar/icone-jorel.png" alt="avatar-jorel"></a>
								</div>
								<div class="media-body">
									<h4>Jorel KUETE</h4>
									<h5><?php echo L::equipe_poste2; ?></h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Marketing</a></li>
										<li class="btn"><a href="#">Business</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li> 
									</ul>
								</div>
							</div><!--/.media -->
							
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object img-thumbnail img-circle" src="<?= $baseUrl ?>images/avatar/icone-frank.png" alt="avatar-frank"></a>
								</div>

								<div class="media-body">
									<h4>Frank MOUNYEBE</h4>
									<h5><?php echo L::equipe_poste3; ?></h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Graphisme</a></li>
										<li class="btn"><a href="#">Software</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li> 
									</ul>
								</div>
							</div><!--/.media -->
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object img-thumbnail img-circle" src="<?= $baseUrl ?>images/avatar/icone-sorel.png" alt="avatar-sorel"></a>
								</div>
								<div class="media-body">
									<h4>Sorel MAFOSSO</h4>
									<h5><?php echo L::equipe_poste4; ?></h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Marketing</a></li>
										<li class="btn"><a href="#">Reférencement</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							
						</div>
					</div>
				</div>	<!--/.row-->

				<!-- technologies -->
				<div class="technologies wow fadeInDown" style="margin-bottom:50px;margin-top:120px;">
					<div class="center">
						<h2><?php echo L::tech_title; ?></h2>
						<p class="lead"><?php echo L::tech_intro; ?></p>
					</div>
					
					<div class="row">
						<div class="col-md-3" style="margin-bottom:28px;">
							<h4>Wordpress + Genesis</h4>
							<img src="<?= $baseUrl ?>images/wpgenesis.png" class="img-responsive">
							<p style="margin-top:5px;"><?php echo L::tech_wordpress; ?></p>
						</div>
						<div class="col-md-3" style="margin-bottom:28px;">
							<h4>Yii PHP FRAMEWORK 2</h4>
							<img src="<?= $baseUrl ?>images/yii-2.jpg" class="img-responsive" style="border:1px #e5e5e5 solid;">
							<p style="margin-top:5px;"><?php echo L::tech_yii; ?></p>
						</div>
						<div class="col-md-3" style="margin-bottom:28px;">
							<h4>ReactJS + NodeJS + MongoDB</h4>
							<img src="<?= $baseUrl ?>images/mern_stack.jpg" class="img-responsive">
							<p style="margin-top:5px;"><?php echo L::tech_mern; ?></p>
						</div>
						<div class="col-md-3" style="margin-bottom:28px;">
							<h4>ASP.NET Core</h4>
							<img src="<?= $baseUrl ?>images/aspcore.jpg" class="img-responsive">
							<p style="margin-top:5px;"><?php echo L::tech_aspcore; ?></p>
						</div>
					</div>
				</div>

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	
	<?php include('widgets/newsletter.php'); ?>
    
    <?php include("footer.php"); ?>
    
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script type="text/javascript">
        jQuery("#li2").addClass("active");
    </script>

</body>
</html>
