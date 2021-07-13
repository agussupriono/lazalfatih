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

        <style>
            .lds-facebook-all{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-color: #ddd;
                z-index: 9998;
                display: block;
            }
            .lds-facebook {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -50px;
                margin-left: -50px;
                width: 100%;
                height: 100%;
                z-index: 9999;
              }
              .lds-facebook div {
                display: inline-block;
                position: absolute;
                left: 8px;
                width: 16px;
                background: #fff;
                animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
              }
              .lds-facebook div:nth-child(1) {
                left: 8px;
                animation-delay: -0.24s;
              }
              .lds-facebook div:nth-child(2) {
                left: 32px;
                animation-delay: -0.12s;
              }
              .lds-facebook div:nth-child(3) {
                left: 56px;
                animation-delay: 0;
              }
              @keyframes lds-facebook {
                0% {
                  top: 8px;
                  height: 64px;
                }
                50%, 100% {
                  top: 24px;
                  height: 32px;
                }
              }
        </style>
    </head>
<body style='overflow-x: hidden;'>
    <div class="lds-facebook-all">
    <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
