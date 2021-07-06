<?php 
    $site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title><?php echo $title;?></title>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php echo $site['metatext']; ?>">
        <meta name="keywords" content="<?php echo $site['keywords']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

        <!-- Favicon
        ================================================== -->
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>">

        <!-- CSS
        ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/bootstrap/bootstrap.min.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/fontawesome/css/all.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/animate-css/animate.css">
        <!-- slick Carousel -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/slick/slick-theme.css">
        <!-- Colorbox -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/plugins/colorbox/colorbox.css">
        <!-- Template styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/css/style.css">

    </head>
<body>
