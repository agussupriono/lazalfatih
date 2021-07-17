<!-- All Program -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/front/default/css/all-program.css">
<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.5.1.min.js"></script>

<div class="container" style="margin-top: -40px; margin-bottom: 20px;">
    <div class="row">
        <div id="items-title" class="col-12 items-title" style="margin-left: 15px;">
            <h2 class="section-sub-title-h1">YUK BERBAGI</h2>
        </div>
        <div class="items-all-program" id="items-all-program">
            <?php 
            $strLink = "";
            foreach($allprog as $prodpbs) { 
                switch($prodpbs["category_id"]){
                    case 1:
                        $strLink = base_url().'blog/detil/'.$prodpbs["slug_blog"];
                        break;
                    default:
                        $strLink = base_url().'blog/donasi/'.$prodpbs["slug_blog"];
                        break;
                }
                
                if ($prodpbs['date_end']!='0000-00-00 00:00:00'){
                    $sisahari = $this->mPublic->dateDifference(date('Y-m-d'),$prodpbs['date_end'],'%d hari lagi');
                } else {
                    $sisahari = '<img style="width: 21px; float: right;" src="'.base_url().'assets/front/default/images/infinity-32x32.png" />';
                }

                $danaterkumpul = 'Rp. 0';
                $donatur = '0 Donatur';
                ?>
            <div class="card">
                <a style="display:block; background-color: transparent;" href='<?php echo $strLink;?>'>
                    <div class="card-body">
                        <div class="d-flex position-relative">
                            <img src="<?php echo base_url().'assets/upload/image/'.$prodpbs["image"];?>" style='width: 30%; height: auto' class="flex-shrink-0 me-3" >
                            <div class="card-info col-8">
                                <h5 class="card-title"> 
                                    <?php echo $prodpbs["title"]; ?>
                                </h5>
                                <p class="card-progress mt-0">
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
                                    <div class="campaign-verification-1 col-5">
                                        <small style="display:block;">Terkumpul</small>
                                        <span class="lsdd-theme-color font-weight-medium"><?php echo $danaterkumpul; ?></span>
                                    </div>
                                    <div class="campaign-verification-2 col-6 text-right">
                                        <small style="display:block;">Sisa Waktu</small>
                                        <span><?php echo $sisahari; ?></span>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </a>    
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        myResponsive();
    });

    $(window).resize(function () {
        myResponsive();
    });

    function myResponsive() {
        if ($(window).width() > 319 && $(window).width() < 481) {
            $(".campaign-verification-2").removeClass("col-6");
            $(".campaign-verification-2").addClass("col-4"); 
            $(".card-info").removeClass("col-8");
            $(".card-info").addClass("col-9"); 
            $(".campaign-verification-2").css("margin-left","5px"); 
        } else {
            $(".campaign-verification-2").removeClass("col-4");
            $(".campaign-verification-2").addClass("col-6");
            $(".card-info").removeClass("col-9");
            $(".card-info").addClass("col-8"); 
            $(".campaign-verification-2").css("margin-left","-12px"); 
        }
    }

</script>