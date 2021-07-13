
<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        font-size: 1.15rem !important;
        line-height: 1.4rem !important;
        margin-bottom: 5px !important;
        padding-bottom: 0 !important;
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
    
    
    #tab-container .nav-tabs > li > a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }
    #tab-container .nav > li > a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }
    #tab-container .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }
    
    #tab-container .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear;
    }
    #tab-container .fade.in {
        opacity: 1;
    }
    #tab-container .tab-content > .active {
        display: block;
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
                        <h2 class="campaign-title px-15 pt-15 mb-0 lsdp-mt-0">
                            Tebar Hewan Kurban Dompet Dhuafa                        </h2>

                        <!-- Verification Institution -->
                        <p class="fundraiser-name mb-0 px-15">
                            <span class="lsdd-theme-color lsdp-font-13">
                                <!-- <a href="" target="_blank" class="lsdd-theme-color" class="mb-0 pb-0 lsdp-font-14"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="lsdp-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:-3px;margin-right:3px;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <!-- </a> -->
                                LAZ Al Fatih                            </span>
                        </p>

                        <!-- Campaign Measure -->
                        <div class="lsdp-row no-gutters campaign-info px-15 mb-0 lsdp-mb-10">
                            <!-- Campaign Progress -->

                            <!-- Campaign Collected -->
                            <div class="col-6">
                                <small style="display:block;">Terkumpul</small>
                                <span class="lsdd-theme-color text-bold">
                                    Rp 0                                </span>
                            </div>

                            <!-- Campaign Target -->
                            <div class="col-6 text-right">
                                <small style="display:block;">Target</small>
                                Rp 10.000                            </div>
                        </div>

                        <!-- Campaign Action -->
                        <div class="lsdp-row no-gutters campaign-target px-15">

                            <!-- Contributor Button -->
                            <a href="https://lazalfatih.org/pembayaran/?pid=1535" class="lsdp-btn lsdd-btn btn-primary btn-block lsdd-addtocart lsdp-mb-10">
                                Kurban Sekarang                                </a>

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
                        <div class="lsdp-row no-gutters campaign-share lsdp-mt-15 px-15">
                            <p class="col-12 mb-0 text-center lsdp-font-14">Share this Campaign via : </p>

                            <!-- Facebook -->
                            <div class="col-6 text-center">
                                <a target="_blank" href="https://www.facebook.com/sharer.php?u=https://lazalfatih.org/campaign/tebar-hewan-kurban-dompet-dhuafa/">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 60.734 60.733" xml:space="preserve">
                                        <path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,4.352,3.354h29.086V37.214h-7.914v-9.167h7.914v-6.76c0-7.843,4.789-12.116,11.787-13.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"></path>
                                    </svg>
                                    <span class="text-uppercase">Facebook</span>
                                </a>
                            </div>

                            <!-- Twitter -->
                            <div class="col-6 text-center">
                                <a target="_blank" href="https://api.whatsapp.com/send?text=Support this campaign  https://lazalfatih.org/campaign/tebar-hewan-kurban-dompet-dhuafa/">
                                    <svg height="18px" viewBox="-23 -21 682 682.66669" width="18px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m544.386719 93.007812c-59.875-59.945312-139.503907-93.9726558-224.335938-93.007812-174.804687 0-327.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-uppercase">WA</span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </aside>
            
            <section id="campaign-content" class="content col-sm-12 col-md-8" style="padding: 0px !important">
                <!-- Banner -->
                <figure class="campaign-banner">
                    <img src="https://lazalfatih.org/wp-content/uploads/2021/06/banner_campaign_THK_DD-720x385.jpg" alt="Tebar Hewan Kurban Dompet Dhuafa">
                </figure>
                
                <div id="tab-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home">Detail</a></li>
                        <li><a href="#menu1">Info Terbaru</a></li>
                        <li><a href="#menu2">Donatur</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>HOME</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>        
    </div>
</div>

<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
</script>