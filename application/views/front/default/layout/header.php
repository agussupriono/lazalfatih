<body class="host_version"> 
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Customer Login</h4>
                </div>
                <div class="modal-body customer-box row">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="email1" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                                Submit
                                            </button>
                                            <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="email" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="password" placeholder="Password" type="password">
                                        </div>
                                    </div>
                                    <div class="row">							
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                                Save &amp; Continue
                                            </button>
                                            <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                                Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loading">
            <div class="finger finger-1">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-2">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-3">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-4">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="last-finger">
                <div class="last-finger-item"><i></i></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $site['logo']); ?>" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('feature'); ?>">Features </a></li>
                        <li><a href="<?php echo base_url('domain'); ?>">Domain</a></li>
                        <li><a href="<?php echo base_url('hosting'); ?>">Hosting</a></li>
                        <li><a href="<?php echo base_url('pricing'); ?>">Pricing</a></li>
                        <li><a href="<?php echo base_url('testimoni'); ?>">Testimonials</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn-light btn-radius btn-brd log" href="#" data-toggle="modal" data-target="#login"><i class="flaticon-padlock"></i> Customer Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>