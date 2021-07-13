<?php
//set menu
$menusX = array(
    'menus' => array(),
    'parent_menus' => array()
);

foreach ($menus as $menu1) {
    $menusX['menus'][$menu1['menu_id']] = $menu1;
    //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
    $menusX['parent_menus'][$menu1['parent_menu_id']][] = $menu1['menu_id'];
}
//echo json_encode($menusX);

function buildMenu($parent, $menu, $i=1, $strDeep="") {
    $html = "";
    if (isset($menu['parent_menus'][$parent])) {
        foreach ($menu['parent_menus'][$parent] as $menu_id) {
            if (isset($menu['parent_menus'][$menu_id])) {
                if(count($menu['parent_menus'][$menu_id])>0){
                    $html .= '<li class="nav-item dropdown">';
                    $html .= '<a class="nav-link" data-toggle="dropdown" href="'.$menu['menus'][$menu_id]['menu_url'].'">'.$menu['menus'][$menu_id]['menu_name'].' <i class="fa fa-angle-down"></i></a>';
                } else {
                    $html .= '<li class="nav-item">';
                    $html .= '<a class="nav-link" href="'.$menu['menus'][$menu_id]['menu_url'].'">'.$menu['menus'][$menu_id]['menu_name'].'</a>';
                }    
            } else {
                $html .= '<li class="nav-item">';
                $html .= '<a class="nav-link" href="'.$menu['menus'][$menu_id]['menu_url'].'">'.$menu['menus'][$menu_id]['menu_name'].'</a>';
            }
                
            if (isset($menu['parent_menus'][$menu_id])) {
                $html .= '<ul class="dropdown-menu" role="menu">';
                $html .= buildMenu($menu_id, $menu, $i, $strDeep);
                $html .= '</ul>';
            } 
            $html .= '</li>';
                
            $i++;
        }
    }
    return $html;
}
?>
<div id="top-bar" class="top-bar" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li>
                        <i class="fab fa-whatsapp"></i> <p class="info-text"><?php echo $site['phone_number']; ?></p>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> <p class="info-text"><?php echo $site['email']; ?></p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="https://facebbok.com/lazalfatih">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="https://twitter.com/lazalfatih">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="https://instagram.com/lazalfatih">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <!--<div class="logo">-->
                        <div>
                            <a class="d-block" href="<?php echo base_url(); ?>">
                                <img loading="lazy" src="<?php echo base_url('assets/upload/image/'.$site['logo']);?>" alt="LAZ Al Fatih" style="width: 85%" >
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <?php echo buildMenu(0, $menusX, 1); ?>
                                <li class="header-get-a-quote">
                                    <a class="btn btn-primary" onclick="hitung_zakat()">Hitung Zakat</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
<!--/ Header end -->