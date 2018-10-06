<section id="partner" class="wow fadeInDown">
    <div class="container">
        <div class="center">
            <h2><?php echo L::methode_title; ?></h2>
            <p class="lead">
                <?php echo L::methode_intro; ?>
            </p>
        </div>    

        <div class="partners">
            <ul class="hidden-xs">
                <li>
                    <div class="img-responsive" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="center-block bs-process-img"><span><i class="fa fa-user bs-process-icon"></i></span></div>
                        <a href="#" class="bs-process" data-toggle="modal" data-target="#modalMeeting"><?php echo L::methode_entrevue; ?></a>
                    </div>
                </li>
                <li>
                    <div class="img-responsive" data-wow-duration="1000ms" data-wow-delay="1000ms">
                        <div class="center-block bs-process-img"><span><i class="fa fa-calendar bs-process-icon"></i></span></div>
                        <a href="#" class="bs-process" data-toggle="modal" data-target="#modalPlanning"><?php echo L::methode_planning; ?></a>
                    </div>
                </li>
                <li>
                    <div class="img-responsive" data-wow-duration="1000ms" data-wow-delay="1700ms">
                        <div class="center-block bs-process-img"><span><i class="far fa-image bs-process-icon"></i></span></div>
                        <a href="#" class="bs-process" data-toggle="modal" data-target="#modalPrototyping"><?php echo L::methode_prototypage; ?></a>
                    </div>
                </li>
                <li>
                    <div class="img-responsive" data-wow-duration="1000ms" data-wow-delay="2400ms">
                        <div class="center-block bs-process-img"><span><i class="fa fa-cogs bs-process-icon"></i></span></div>
                        <a href="#" class="bs-process" data-toggle="modal" data-target="#modalRealization"><?php echo L::methode_realisation; ?></a>
                    </div>
                </li>
                <li>
                    <div class="img-responsive" data-wow-duration="1000ms" data-wow-delay="3100ms">
                        <div class="center-block bs-process-img"><span><i class="fa fa-thumbs-up bs-process-icon"></i></span></div>
                        <a href="#" class="bs-process" data-toggle="modal" data-target="#modalDeployment"><?php echo L::methode_deploiement; ?></a>
                    </div>
                </li>
            </ul>

            <div class="list-group visible-xs" style="color:teal !important;font-weight:bold;font-size:1.45em;">
                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <button type="button" class="list-group-item" style="width:100%;">
                        <i class="fa fa-user pull-left"></i> <?php echo L::methode_entrevue; ?>
                    </button>

                </div>

                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2000ms">
                    <button type="button" class="list-group-item" style="width:100%;">
                        <i class="fa fa-calendar pull-left"></i> <?php echo L::methode_planning; ?>
                    </button>

                </div>

                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="3000ms">
                    <button type="button" class="list-group-item" style="width:100%;">
                        <i class="fa fa-picture-o pull-left"></i> <?php echo L::methode_prototypage; ?>
                    </button>

                </div>

                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="4000ms">
                    <button type="button" class="list-group-item" style="width:100%;">
                        <i class="fa fa-cogs pull-left"></i> <?php echo L::methode_realisation; ?>
                    </button> 

                </div>

                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="5000ms">
                    <button type="button" class="list-group-item" style="width:100%;">
                        <i class="fa fa-thumbs-up pull-left"></i> <?php echo L::methode_deploiement; ?>
                    </button>

                </div>
                
            </div>

        </div>        
    </div><!--/.container-->
</section><!--/#partner-->


<!-- Modal Meeting -->
<div class="modal fade" id="modalMeeting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L::methode_etape1; ?></h4>
            </div>
            <div class="modal-body">
                <?php echo L::methode_un; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo L::fermer; ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Planning -->
<div class="modal fade" id="modalPlanning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L::methode_etape2; ?></h4>
            </div>
            <div class="modal-body">
                <?php echo L::methode_deux; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo L::fermer; ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Prototyping -->
<div class="modal fade" id="modalPrototyping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L::methode_etape3; ?></h4>
            </div>
            <div class="modal-body">
                <?php echo L::methode_trois; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo L::fermer; ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Realization -->
<div class="modal fade" id="modalRealization" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L::methode_etape4; ?></h4>
            </div>
            <div class="modal-body">
                <?php echo L::methode_quatre; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo L::fermer; ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Deployment -->
<div class="modal fade" id="modalDeployment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L::methode_etape5; ?></h4>
            </div>
            <div class="modal-body">
                <?php echo L::methode_cinq; ?> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo L::fermer; ?></button>
            </div>
        </div>
    </div>
</div>
