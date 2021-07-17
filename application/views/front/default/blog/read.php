<div class="container" style="min-height: 455px;"><!-- container -->
    <div><!-- row -->
        <?php if ($blog['image']!=""){ ?>
            <img src="<?php echo base_url().'assets/upload/image/'.$blog['image']; ?>" style='display: block; margin: auto; margin-top: 10px'>
        <?php }?>
        
        <div>
            <?php echo $blog['content']; ?>
        </div>
    </div>
</div>
