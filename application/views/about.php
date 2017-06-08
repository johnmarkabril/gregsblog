<div id="about" class="container text-center">
  <div class="customize-title">ABOUT ME</div>
  <p><i>Allow me to introduce myself</i></p>
  <br>

  <?php
    if (!empty($get_all_about)) {
      foreach ($get_all_about as $gaa) :
  ?>
  <div class="row">
    <div class="col-md-3 animated slideInLeft">
      <center>
        <img src="<?php echo base_url();?>/public/img/header/<?php echo $gaa->IMAGE; ?>" class="img-prof">
        
      </center>
    </div>
    <div class="col-md-9 animated slideInRight">
      <p class="customize-desc"><?php echo $gaa->DESC; ?></p>
    </div>
  </div>
    <br>

    <?php
       endforeach;
      }
    ?>

</div>