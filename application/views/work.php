<div id="work" class="container text-center">
  <div class="customize-title">MY WORK</div>
  <p><i>Now I'm Just Showing Off</i></p>
  <br>

    <div class="row">
    <?php
      if (!empty($get_all_work)) {
        foreach ($get_all_work as $gaw) :
      ?>
        <div class="col-md-4">
            <center>
              <img src="<?php echo base_url();?>/public/img/header/<?php echo $gaw->IMAGE; ?>" class="img-responsive work-img">
            </center>
            <strong style="font-size: 17px;"><?php echo $gaw->TITLE; ?></strong><br>
            <a href=""><?php echo $gaw->LINK; ?></a>
            <p class="customize-desc"><?php echo $gaw->DESC; ?></p>
        </div>
      <?php
        endforeach;
        }
      ?>
    </div>
</div>