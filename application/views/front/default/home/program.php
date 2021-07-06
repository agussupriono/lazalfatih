<style>
    .card {
        position: relative;
        display: flex;
        width: 600px;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 11px;
        -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
        -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
        box-shadow: 0px 0px 3px 0px rgb(161, 163, 164);
    }
    .card .card-body {
        padding: 1rem 1rem
    }
    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem
    }
    .card .card-text{
        display: block;
        font-weight: normal;
        font-size: .9rem;
        line-height: normal;
        margin-bottom: .6rem;
        color: #4c4c4c;
    }
    .media iframe,
    .media-content {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border: 0;
        border-radius: inherit;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-color: rgba(120, 120, 120, .1);
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }
    .media-content:before {
        content: '';
        position: absolute;
        height: 10%;
        width: 90%;
        left: 5%;
        bottom: 0;
        background: inherit;
        background-position-y: 100%;
        filter: blur(10px)
    }
    .circle .media-content:before {
        width: 40%;
        left: 30%
    }
    .profile-image {
        width: 100%;
        height: 200px;
        border-top-left-radius: 11px !important;
        border-top-right-radius: 11px
    }
    .card-title {
        font-weight: 600;
        font-size: 16px;
        line-height: 1.3rem;
    } 
    .items-program {
        width: 95%;
        margin: 0px auto;
        display: flex;
        background-color: #fff;
        padding: 10px;
        border-radius: 11px;
    }
    .items-program .slick-slide {
        margin: 5px !important;
    }
    .items-program .card {
        margin: 5px !important;
    }
    .items-program .carousel-control i {
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        line-height: 38px;
        width: 40px;
        height: 40px;
        font-size: 22px;
        border-radius: 0;
        transition: all 500ms ease;

    }
    .items-program .carousel-control i:hover {
        background: #ffb600;
        color: #fff;
    }
    .items-program .carousel-control {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        background-color: transparent;
        filter: alpha(opacity=0);
        text-shadow: none;
        transition: all .25s ease;
        padding: 0;
        outline: 0;
        border: 0;
    }
    .items-program .carousel-control.right {
        right: -5px;
    }
    .items-program .carousel-control.left {
        left: -5px;
    }
    #items-title {
        margin-top: 50px !important;
        margin-bottom: -50px !important;
    }
    .section-sub-title-h1 {
      font-weight: 900;
      font-size: 26px;
      line-height: 36px;
      margin: 0 0 60px;
      color: #38b7c1;
    }
    @media (max-width: 575px) {
        .section-sub-title-h1 {
          font-size: 20px;
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
        margin-right: -60px;
        margin-left: 0px;
    }
</style>
<div class="container" style="margin-top: -40px;">
    <div class="row">
        <div id="items-title" class="col-12 items-title" style="margin-left: 15px;">
            <h2 class="section-sub-title-h1">BUTUH PERTOLONGAN SEGERA</h2>
        </div>
        <div class="items-program slick-slider" id="items-program">
            <div class="card">
                <div class="media media-2x1 gd-primary"> 
                    <img class="profile-image" src="<?php echo base_url().'assets/upload/image/banner_campaign.jpg';?>"> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tebar Hewan Kurban Dompet Dhuafa</h5>
                    <p class="fundraiser-name mb-0 pb-0">
                        <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:-3px;margin-right:3px;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <a href="#">
                                LAZ Al Fatih
                            </a>
                        </span>
                    </p>
                    <p class="card-text">
                        <a href="#">
                            Pilih Hewan Kurban Terbaikmu Kambing Standar Rp 1.970 K Kambing / Domba...
                        </a>
                    </p>
                    <div id="progress-component">
                        <div class="bar" style="width:0% !important"></div>
                    </div>
                    <div class="lsdp-row no-gutters campaign-verification">
                        <div class="col-5">
                            <small style="display:block;">Collected</small>
                            <span class="lsdd-theme-color font-weight-medium">Rp 0</span>
                        </div>
                        <div class="col-5 text-right">
                            <small style="display:block;">Remaining</small>
                            <span>21 days left</span>                                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="media media-2x1 gd-primary"> 
                    <img class="profile-image" src=""> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">&nbsp;</h5>
                    <p class="fundraiser-name mb-0 pb-0">
                        <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:-3px;margin-right:3px;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <a href="#">
                                &nbsp;
                            </a>
                        </span>
                    </p>
                    <p class="card-text">
                        <a href="#">
                            &nbsp;<br/><br/>
                        </a>
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
            </div>
            <div class="card">
                <div class="media media-2x1 gd-primary"> 
                    <img class="profile-image" src=""> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">&nbsp;</h5>
                    <p class="fundraiser-name mb-0 pb-0">
                        <span class="lsdd-theme-color lsdp-font-13" style="color: #1e73be !important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:-3px;margin-right:3px;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <a href="#">
                                &nbsp;
                            </a>
                        </span>
                    </p>
                    <p class="card-text">
                        <a href="#">
                            &nbsp;<br/><br/>
                        </a>
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
            </div>
        </div>
    </div>
</div>