<div class="banner-carousel banner-carousel-2 mb-0">
<?php
foreach($sliderhome as $gallery) { ?>
    <div class="banner-carousel-item" style="background-image:url(<?php echo base_url().'assets/upload/image/'.$gallery["image"];?>)">
        <div class="container">
            <div class="box-slider-content">
              <div class="box-slider-text">
                  <!--<h2 class="box-slide-title">17 Years Of Excellence In</h2>-->
                  <h3 class="box-slide-sub-title"><?php echo $gallery["gallery_name"]; ?></h3>
                  <p class="box-slide-description"><?php echo $gallery["gallery_description"]; ?></p>
<!--                  <p>
                    <a href="services.html" class="slider btn btn-primary">Our Service</a>
                  </p>-->
              </div>
            </div>
        </div>
    </div>
<?php
}?>
</div>