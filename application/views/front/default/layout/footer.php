<footer id="footer" class="footer bg-overlay">
    <div class="footer-main" style="padding: 0px !important">
        <div class="container">
            <div class="row justify-content-between" style="padding-top: 10px;">
                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Tentang Kami</h3>
                    <div class="working-hours">
                        Lembaga Amil Zakat ( LAZ ) Al Fatih adalah Mitra Pengelola Zakat LAZNAS DOMPET DHUAFA berdasarkan SK nomor 044/SK/MPZ-DD/XII/2020
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Kantor Pusat</h3>
                    <div class="working-hours">
                    Jl. Jaya 25 No 5 RT 01/10 Cengkareng Jakarta Barat
                    </div>
                    <ul class="list-arrow">
                        <li><a href="#"><i class="fab fa-whatsapp"></i> 085-959-238-630</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> layanandonatur@lazalfatih.org</a></li>
                    </ul>
                </div><!-- Col end -->
                
                <div class="col-lg-4 col-md-6 footer-widget footer-about" style="background-color: #ffb600 !important; display: flex; align-items: center; border-top-left-radius: 11px; border-top-right-radius: 11px;">
                    <img class="mx-auto d-block" src="<?php echo base_url();?>assets/front/default/images/logo-footer-alfatih.png">
                    <img class="mx-auto d-block" src="<?php echo base_url();?>assets/front/default/images/logo-footer-mpz.png">
                </div><!-- Col end -->

                
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright" style="padding: 7px 0 !important">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info">
                        <span>Copyright &copy; <script>
                            document.write(new Date().getFullYear())
                            </script> 
                        LAZ Al Fatih
                        <!--, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a>-->
                        </span>
                    </div>
                </div>

<!--                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Zakat</a></li>
                            <li><a href="#">Program</a></li>
                            <li><a href="#">Layanan</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                </div>-->
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer><!-- Footer end -->


<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="<?php echo base_url();?>assets/front/default/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="<?php echo base_url();?>assets/front/default/plugins/bootstrap/bootstrap.min.js" defer></script>
<!-- Slick Carousel -->
<script src="<?php echo base_url();?>assets/front/default/plugins/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/front/default/plugins/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="<?php echo base_url();?>assets/front/default/plugins/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="<?php echo base_url();?>assets/front/default/plugins/shuffle/shuffle.min.js" defer></script>

<!-- Google Map API Key-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>-->
<!-- Google Map Plugin-->
<!--<script src="<?php echo base_url();?>assets/front/default/plugins/google-map/map.js" defer></script>-->

<!-- Template custom -->
<script src="<?php echo base_url();?>assets/front/default/js/script.js"></script>

</div><!-- Body inner end -->
<script>
    $(document).ready(function () {
         $("body").css("background-color", "<?php echo $site['color']; ?>");
         $("#header").css("background-color", "<?php echo $site['color']; ?>");
         $(".header-two").css("background", "<?php echo $site['color']; ?>");
         $(".site-navigation").css("background-color", "<?php echo $site['color']; ?>");
         $(".top-bar").css("background-color", "#38b7c1");
         $(".top-bar .top-info").css("color", "#fff");
         $(".top-bar .top-social ul li a").css("color", "#fff");
         
//         if($(window).width()<575){
//             $(".site-navigation").css("top", "28px", "height", "70px");
//         } else {
//             $(".site-navigation").css("top", "0", "height", "auto");
//         }
    });
</script>
</body>

</html>