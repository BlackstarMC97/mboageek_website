<div class="accordion">
<h2><?php echo L::force_title; ?></h2>
<div class="panel-group" id="accordion1">
      <div class="panel panel-default">
        <div class="panel-heading active">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
              <?php echo L::force_qualite; ?>
              <i class="fa fa-angle-right pull-right"></i>
            </a>
          </h3>
        </div>

        <div id="collapseOne1" class="panel-collapse collapse in">
          <div class="panel-body">
               <?php echo L::force_qualitetexte; ?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
              <?php echo L::force_professionnalisme; ?>
              <i class="fa fa-angle-right pull-right"></i>
            </a>
          </h3>
        </div>
        <div id="collapseTwo1" class="panel-collapse collapse">
          <div class="panel-body">
            <?php echo L::force_professionnalismetexte; ?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
              <?php echo L::force_cout; ?>
              <i class="fa fa-angle-right pull-right"></i>
            </a>
          </h3>
        </div>
        <div id="collapseThree1" class="panel-collapse collapse">
          <div class="panel-body">
            <?php echo L::force_couttexte; ?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
              <?php echo L::force_equipe; ?>
              <i class="fa fa-angle-right pull-right"></i>
            </a>
          </h3>
        </div>
        <div id="collapseFour1" class="panel-collapse collapse">
          <div class="panel-body">
            <?php echo L::force_equipetexte; ?>
          </div>
        </div>
      </div>
    </div><!--/#accordion1-->
</div>