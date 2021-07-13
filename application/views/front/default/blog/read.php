<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.5.1.min.js"></script>
<style>
    div#main-content {
        padding-top: 33px;
        padding-bottom: 33px;
        margin: 0 auto;
        width: 100%;
    }
    .flex-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }
    .lsdp-row {
        -ms-box-orient: horizontal;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -moz-flex;
        display: -webkit-flex;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .lsdp-row .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .lsdp-row .col-1, .lsdp-row .col-2, .lsdp-row .col-3, .lsdp-row .col-4, .lsdp-row .col-5, .lsdp-row .col-6, .lsdp-row .col-7, .lsdp-row .col-8, .lsdp-row .col-9, .lsdp-row .col-10, .lsdp-row .col-11, .lsdp-row .col-12, .lsdp-row .col, .lsdp-row .col-auto, .lsdp-row .col-sm-1, .lsdp-row .col-sm-2, .lsdp-row .col-sm-3, .lsdp-row .col-sm-4, .lsdp-row .col-sm-5, .lsdp-row .col-sm-6, .lsdp-row .col-sm-7, .lsdp-row .col-sm-8, .lsdp-row .col-sm-9, .lsdp-row .col-sm-10, .lsdp-row .col-sm-11, .lsdp-row .col-sm-12, .lsdp-row .col-sm, .lsdp-row .col-sm-auto, .lsdp-row .col-md-1, .lsdp-row .col-md-2, .lsdp-row .col-md-3, .lsdp-row .col-md-4, .lsdp-row .col-md-5, .lsdp-row .col-md-6, .lsdp-row .col-md-7, .lsdp-row .col-md-8, .lsdp-row .col-md-9, .lsdp-row .col-md-10, .lsdp-row .col-md-11, .lsdp-row .col-md-12, .lsdp-row .col-md, .lsdp-row .col-md-auto, .lsdp-row .col-lg-1, .lsdp-row .col-lg-2, .lsdp-row .col-lg-3, .lsdp-row .col-lg-4, .lsdp-row .col-lg-5, .lsdp-row .col-lg-6, .lsdp-row .col-lg-7, .lsdp-row .col-lg-8, .lsdp-row .col-lg-9, .lsdp-row .col-lg-10, .lsdp-row .col-lg-11, .lsdp-row .col-lg-12, .lsdp-row .col-lg, .lsdp-row .col-lg-auto, .lsdp-row .col-xl-1, .lsdp-row .col-xl-2, .lsdp-row .col-xl-3, .lsdp-row .col-xl-4, .lsdp-row .col-xl-5, .lsdp-row .col-xl-6, .lsdp-row .col-xl-7, .lsdp-row .col-xl-8, .lsdp-row .col-xl-9, .lsdp-row .col-xl-10, .lsdp-row .col-xl-11, .lsdp-row .col-xl-12, .lsdp-row .col-xl, .lsdp-row .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 10px;
        padding-left: 10px;
    }
    .lsdp-shadow {
        box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.31) 0px 0px 1px 0px;
    }
    .bg-white {
        background: #fff;
    }
    .campaign-title {
/*        font-size: 1.15rem !important;
        line-height: 1.4rem !important;*/
        margin-bottom: 5px !important;
        padding-bottom: 0 !important;
        font-weight: 600;
        font-size: 16px;
        line-height: 1.3rem;
    }
    .px-15 {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
    .pt-15 {
        padding-top: 15px !important;
    }
    .lsdp-mt-0 {
        margin-top: 0 !important;
    }
    .fundraiser-name {
        padding: 5px 0;
    }
    .px-15 {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
    .mb-0 {
        margin-bottom: 0 !important;
    }
    .lsdp-row.no-gutters {
        margin: 0;
    }
    .lsdp-mb-10 {
        margin-bottom: 10px !important;
    }
    .campaign-share {
        padding-bottom: 15px;
    }
    .lsdp-mt-15 {
        margin-top: 15px !important;
    }
    .lsdp-row .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    figure.campaign-banner {
        margin: 0 !important;
        padding: 0;
    }
    .campaign-banner {
        text-align: center;
    }
    .campaign-detail, .contributor-list h6 {
        font-size: .9rem;
        vertical-align: top;
        margin: 0;
    }
    .project-img-container-1 {
        width: 95%;
        margin: 0px auto;
        display: flex;
        background-color: #fff;
        padding: 10px;
    }
    .shuffle-btn-group {
        display: inline-block;
        margin: 20px 15px 10px;
        width: 96%;
        border-bottom: 3px solid #ffb600;
    }
    @media (max-width: 480px) {
        .shuffle-btn-group {
            display: inline-block;
            margin: 20px 0 10px;
            width: 100%;
            border-bottom: 3px solid #ffb600;
        }
    }
    #progress-component {
        width: 100%;
        margin: 3px 0 7px;
        background-color: rgba(0, 0, 0, .1);
        box-shadow: #000 0 0 inset;
    }
    #progress-component .bar {
        height: 4px;
        background-color: var(--lsdd-lighter-color);
        border-radius: 2px;
    }
</style>
<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <div id="main-content" class="lsdp-row flex-row-reverse">
            <aside id="campaign-sidebar" top="sticky_distance" class="sidebar col-sm-12 col-md-4 ">

                <div class="sidebar__inner">
                    <!-- Show Image First in Mobile -->

                    <!-- Sidebar Box -->
                    <div class="box-action bg-white lsdp-shadow">
                        <!-- Campaign Title -->
                        <h2 class="campaign-title px-15 pt-15 mb-0 lsdp-mt-0"><?php echo $blog["title"]; ?></h2>

                        <!-- Verification Institution -->
                        <p class="fundraiser-name mb-0 px-15">
                            <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:-3px;margin-right:3px;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <a href="#">
                                    <?php echo $blog["blog_by"]; ?>
                                </a>
                            </span>
                        </p>

                        <!-- Campaign Measure -->
                        <div class="lsdp-row no-gutters campaign-info px-15 mb-0 lsdp-mb-10">
                            <!-- Campaign Progress -->
                            <div id="progress-component">
                                <div class="bar" style="width:0% !important"></div>
                            </div>
                            <!-- Campaign Collected -->
                            <div class="col-6">
                                <small style="display:block;">Terkumpul</small>
                                <span class="lsdd-theme-color text-bold">
                                    Rp 0                                
                                </span>
                            </div>

                            <!-- Campaign Target -->
                            <div class="col-6 text-right">
                                <small style="display:block;">Target</small>
                                Rp 10.000                            
                            </div>
                        </div>

                        <!-- Campaign Action -->
                        <div class="lsdp-row no-gutters campaign-target px-15">
                            <!-- Contributor Button -->
                            <a href="#" class="lsdp-btn lsdd-btn btn-primary btn-block lsdd-addtocart lsdp-mb-10 btn">Kurban Sekarang</a>

                            <!-- Contributor Counter -->
                            <div class="col-6">
                                <p class="lsdp-mt-10">0 Donatur</p>
                            </div>

                            <!-- Campaign Time Left -->
                            <div class="col-6 text-right">
                                <p class="lsdp-mt-10">14 Sisa Hari</p>
                            </div>
                        </div>

                        <!-- Campaign Share -->
                        <!-- TODO : Upgrade View with Popup and More Channel -->
                        <div class="lsdp-row no-gutters campaign-share px-15"'>
                            <a href="#" class="lsdp-btn lsdd-btn btn-info btn-block lsdd-addtocart lsdp-mb-10 btn fa fa-share"> &nbsp; Share this Campaign</a>
                        </div>
                    </div>
                </div>
            </aside>
            <section id="campaign-content" class="content col-sm-12 col-md-8" style="padding: 0px !important">
                <!-- Banner -->
                <figure class="campaign-banner">
                    <img src="https://lazalfatih.org/wp-content/uploads/2021/06/banner_campaign_THK_DD-720x385.jpg" alt="Tebar Hewan Kurban Dompet Dhuafa" style='width: 95%'>
                </figure>

                <div id='program-container' class="row">
                    <div class="col-12">
                        <div class="shuffle-btn-group">
                            <label class="active" for="detail">
                                <input type="radio" name="shuffle-filter" id="detail" value="detail" checked="checked">Detail
                            </label>
                            <label for="info">
                                <input type="radio" name="shuffle-filter" id="info" value="info">Info Terbaru
                            </label>
                            <label for="donatur">
                                <input type="radio" name="shuffle-filter" id="donatur" value="donatur">Donatur
                            </label>
                        </div><!-- project filter end -->

                        <div class="row shuffle-wrapper">
                            <!--<div class="col-1 shuffle-sizer"></div>-->

                            <div class="col-lg-12 col-md-12 shuffle-item" data-groups="[&quot;detail&quot;]">
                                <div class="project-img-container-1">
                                    <div class="gallery-popup" style='width: 100%'>
                                        <?php echo $blog['content']; ?>
                                    </div>
                                </div>
                            </div><!-- shuffle item 1 end -->
                            <br/>
                            <div class="col-lg-12 col-md-12 shuffle-item" data-groups="[&quot;info&quot;]">
                                <div class="project-img-container-1">
                                    <div class="gallery-popup" style='width: 100%'>
                                        <?php echo $blog['info']; ?>
                                    </div>
                                </div>
                            </div><!-- shuffle item 2 end -->
                            <br/>
                            <div class="col-lg-12 col-md-12 shuffle-item" data-groups="[&quot;donatur&quot;]">
                                <div class="project-img-container-1">
                                    <div class="gallery-popup" style='width: 100%'>

                                    </div>
                                </div>
                            </div><!-- shuffle item 3 end -->
                            <br/>
                        </div><!-- shuffle end -->
                    </div>
                </div><!-- Content row end -->
            </section>
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
            $("#campaign-content").css("margin-top", "10px");
            $("#campaign-sidebar").removeClass("col-md-4");
            $("#campaign-content").removeClass("col-md-8");
            $("#program-container").css("padding", "10px");
        } else {
            $("#campaign-content").css("margin-top", "0px");
            $("#campaign-sidebar").addClass("col-md-4");
            $("#campaign-content").addClass("col-md-8");
            $("#program-container").css("padding", "0px");
        }
    }

</script>