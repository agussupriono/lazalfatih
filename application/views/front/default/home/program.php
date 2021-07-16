<!-- Program -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/css/program.css">
        
<div class="container" style="margin-top: -40px; margin-bottom: 20px;">
    <div class="row">
        <div id="items-title" class="col-12 items-title" style="margin-left: 15px;">
            <h2 class="section-sub-title-h1">BUTUH PERTOLONGAN SEGERA</h2>
        </div>
        <div class="items-program slick-slider" id="items-program">
            <?php
            $jml = count($prog);
            $strLink = "";
            foreach($prog as $prodpbs) { 
                switch($prodpbs["category_id"]){
                    case 1:
                        $strLink = base_url().'blog/detil/'.$prodpbs["slug_blog"];
                        break;
                    default:
                        $strLink = base_url().'blog/donasi/'.$prodpbs["slug_blog"];
                        break;
                }
            ?>
            <div class="card">
                <a style="display:block; background-color: transparent;" href='<?php echo $strLink;?>'>
                    <div class="media media-2x1 gd-primary"> 
                        <img class="profile-image" src="<?php echo base_url().'assets/upload/image/'.$prodpbs["image"];?>"> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> 
                            <?php echo $prodpbs["title"]; ?>
                        </h5>
                        <p class="fundraiser-name mb-0 pb-0">
                            <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <?php echo $prodpbs["blog_by"]; ?>
                            </span>
                        </p>
                        <p class="card-text">
                                <?php echo $prodpbs["title_long"]; ?>
                        </p>
                        <div id="progress-component">
                            <div class="bar" style="width:0% !important"></div>
                        </div>
                        <div class="lsdp-row no-gutters campaign-verification">
                            <div class="col-5">
                                <small style="display:block;">Terkumpul</small>
                                <span class="lsdd-theme-color font-weight-medium">Rp 0</span>
                            </div>
                            <div class="col-5 text-right">
                                <small style="display:block;">Sisa Waktu</small>
                                <span>21 Hari</span>                                        
                            </div>
                        </div>
                    </div>
                </a>    
            </div>
            <?php } ?>
            <?php if($jml==2 || $jml==1) { ?>
            <div class="card" style="background-color: transparent;">
                <a style="display:block; background-color: transparent;" href='#'>
                    <div class="media media-2x1 gd-primary"> 
                        <img class="profile-image" src=""> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">&nbsp;</h5>
                        <p class="fundraiser-name mb-0 pb-0">
                            <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                    &nbsp;
                            </span>
                        </p>
                        <p class="card-text">
                            &nbsp;<br/><br/>
                        </p>
                        <div id="progress-component">
                            <div class="bar" style="width:0% !important">&nbsp;</div>
                        </div>
                        <div class="lsdp-row no-gutters campaign-verification">
                            <div class="col-5">
                                <small style="display:block;">&nbsp;</small>
                                <span class="lsdd-theme-color font-weight-medium">&nbsp;</span>
                            </div>
                            <div class="col-5 text-right">
                                <small style="display:block;">&nbsp;</small>
                                <span>&nbsp;</span>                                        
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php }
            if($jml==1) { ?>
            <div class="card" style="background-color: transparent;">
                <a style="display:block; background-color: transparent;" href='#'>
                    <div class="media media-2x1 gd-primary"> 
                        <img class="profile-image" src=""> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">&nbsp;</h5>
                        <p class="fundraiser-name mb-0 pb-0">
                            <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                    &nbsp;
                            </span>
                        </p>
                        <p class="card-text">
                            &nbsp;<br/><br/>
                        </p>
                        <div id="progress-component">
                            <div class="bar" style="width:0% !important">&nbsp;</div>
                        </div>
                        <div class="lsdp-row no-gutters campaign-verification">
                            <div class="col-5">
                                <small style="display:block;">&nbsp;</small>
                                <span class="lsdd-theme-color font-weight-medium">&nbsp;</span>
                            </div>
                            <div class="col-5 text-right">
                                <small style="display:block;">&nbsp;</small>
                                <span>&nbsp;</span>                                        
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>