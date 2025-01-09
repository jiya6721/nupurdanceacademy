<html>
<ol class="carousel-indicators">

  <?php $temp = 0;

   if(count($img)){
    foreach ($img as $value) {

      if ($temp == 0) {

        echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
        $temp++;
        }
        else{

              echo '<li data-target="#myCarousel" data-slide-to="'.$temp.'"></li>';

              $temp++;
            }

    }

  } ?>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">

        <?php $temp = 0;

   if(count($img)){ 
    foreach ($img as $value) {

      if ($temp == 0) {  ?>

      <div class = "item active">
      <img src="<?php echo base_url('uploads/slider/')?><?php echo $value["IMAGE"] ?>" alt= "Image of every carousel" style="width:100%;height: 100%;>

        <div class ="carousel-caption">
        <div class ="carousel-caption">
      <h3><?php echo $value["TITLE"] ?></h3> 
      <p><?php echo $value["DESCRIPTION"] ?></p>
      </div>
  </div>

        <?php $temp++;
        }
        else{
         ?>


      <div class = "item">
      <img src="<?php echo base_url('uploads/slider/')?><?php echo $value["IMAGE"] ?>" alt="Image of every carousel" style="width:100%;height: 100%;>
      <div class="carousel-caption">
        <div class ="carousel-caption">
      <h3><?php echo $value["TITLE"] ?></h3> 
      <p><?php echo $value["DESCRIPTION"] ?></p></div> </div>

    <?php
        $temp++;
            }

    }

  } ?>

</div>


<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</html>