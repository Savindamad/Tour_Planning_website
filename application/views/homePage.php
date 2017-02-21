<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/full_slider.css'); ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url('public/navbar/css/reset.css'); ?>"> <!-- CSS reset -->
        <link rel="stylesheet" href="<?php echo base_url('public/navbar/css/style.css'); ?>"> <!-- Resource style -->
    </head>
    <body>
        <?php
        $this->load->view('website/navbarNw');
        ?>

        <main class="cd-main-content">
            <header id="myCarousel" class="carousel slide">

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($images->result() as $row) {
                        if ($i == 0) {
                            $i = 1;
                            ?>
                            <div class="item active">
                                <?php
                            } else {
                                ?>
                                <div class="item">
                                    <?php
                                }
                                ?>
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url(<?php echo $row->path; ?>);"></div>
                                <div class="carousel-caption">
                                    <h2></h2>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

            </header>
        </main>

        <div class="main">
            <div class="content_white">
                <h2>Tour Packages</h2>
                <p style="line-height: 90%; font-size: 130%;">Pick a tour package that suits your preferences. We have carefully added the most attractive places to the list.</p>
            </div>
            <div class="container" >
                <div class="testmonial"> 
                </div>
                <div class="row" style="margin-top: -50px">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            foreach ($packages->result() as $row) {
                                ?>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <h3><?php echo $row->name; ?></h3>
                                            <p style="text-align: justify; margin-bottom: 10px;">
                                                <?php
                                                if (strlen($row->description) > 250) {
                                                    $stringCut = substr($row->description, 0, 248);
                                                    $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                    echo $string . '..';
                                                } else {
                                                    echo substr($row->description, 0, 300);
                                                }
                                                ?>
                                            </p>
                                            <p><a class="btn btn-primary" style="background: #D65724" href="<?php echo base_url('index.php/Package/') . $row->id; ?>">View more details</a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 40px;">
                    <a href="<?php echo base_url('index.php/Packages'); ?>" class="about_btn">View more packages</a>
                </div>
            </div>
            <div class="about_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 service_box">
                            <div class="thumbnail">
                                <a href="<?php echo base_url('index.php/CustomPackage'); ?>">
                                    <img alt="Bootstrap Thumbnail First" src="<?php echo base_url('public/images/other/planTour.png'); ?>" />
                                </a>
                                <div class="caption">
                                    <h3>Plan Your Tour</h3>
                                    <h4>Looking for a tailor made tour? Go ahead and plan the tour yourself.</h4>
                                </div>
                            </div>  		
                        </div>
                        <div class="col-md-6 service_box">
                            <div class="thumbnail">
                                <a href="<?php echo base_url('index.php/TourGuide'); ?>">
                                    <img alt="Bootstrap Thumbnail First" src="<?php echo base_url('public/images/other/tourGuide.png'); ?>" />
                                </a>
                                <div class="caption">
                                    <h3>Transport Reservation</h3>
                                    <h4>Are you just looking for transportation and tour guidance?Let us arrange you a guided tour with comfortable transportation.</h4>
                                </div>
                            </div>  		
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_white">
                <h2>Places To Visit</h2>
                <p style="line-height: 90%; font-size: 130%;">Sri Lanka is an island blessed with beautiful destinations. Don't miss out any. </p>
            </div>
            <div class="container">
                <div class="testmonial" style="margin-bottom: -100px"> 
                </div>
                <ul id="flexiselDemo1">
                    <?php
                    foreach ($places->result() as $row) {
                        ?>
                        <li>
                            <div class="thumbnail" style="text-align: left;">
                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image) ?>" />
                                <div class="caption">
                                    <h3><?php echo $row->name; ?></h3>
                                    <p style="text-align: justify; margin-bottom: 10px;"><small>
                                            <?php
                                            if (strlen($row->description) > 150) {
                                                $stringCut = substr($row->description, 0, 148);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                echo $string . '..';
                                            } else {
                                                echo substr($row->description, 0, 150);
                                            }
                                            ?>
                                        </small></p>
                                    <a class="btn btn-primary" style="background: #D65724" href="<?php echo base_url('index.php/Place/') . $row->id; ?>">View more details</a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div style="margin-top: -20px; margin-bottom: 40px;">
                    <a href="<?php echo base_url('index.php/Places'); ?>" class="about_btn">View more places</a>
                </div>
            </div>
            <div class="content_white" style="margin-top: -50px">
                <h2>Activities</h2>
                <p style="line-height: 90%; font-size: 130%;">Want to get the best out of your holidays? Checkout the things you can do in Sri Lanka.</p>
            </div>
            <div class="container">
                <div class="testmonial" style="margin-bottom: -100px"> 
                </div>
                <ul id="flexiselDemo2">
                    <?php
                    foreach ($activities->result() as $row) {
                        ?>
                        <li>
                            <div class="thumbnail" style="text-align: left;">
                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image) ?>" />
                                <div class="caption">
                                    <h3><?php echo $row->name; ?></h3>
                                    <p style="text-align: justify; margin-bottom: 10px;"><small>
                                            <?php
                                            if (strlen($row->description) > 150) {
                                                $stringCut = substr($row->description, 0, 148);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                echo $string . '..';
                                            } else {
                                                echo substr($row->description, 0, 150);
                                            }
                                            ?>
                                        </small></p>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div style="margin-top: -20px; margin-bottom: 40px;">
                </div>
            </div>
        </div>

        <?php
        $this->load->view('website/home_footer', $companyInfo);
        ?>

        <script src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/slide_image.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/responsive-nav.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.flexisel.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/home_page.js'); ?>"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBiLOyslTC14QS8xl906N-6AvpzOn7BEgg" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/map_home_page.js'); ?>"></script>
        <script src="<?php echo base_url('public/navbar/js/modernizr.js'); ?>"></script> <!-- Modernizr -->
        <script src="<?php echo base_url('public/navbar/js/main.js'); ?>"></script>
    </body>
</html>		