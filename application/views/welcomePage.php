<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css'); ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <!----start-top-nav-script-->
        <script>
            $(function () {
                var pull = $('#pull');
                menu = $('nav ul');
                menuHeight = menu.height();
                $(pull).on('click', function (e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function () {
                    var w = $(window).width();
                    if (w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
        <!----//End-top-nav-script---->
    </head>
    <body>
        <!----start-header---->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"><img style="width: 200px; margin-top: -30px; margin-bottom: -30px" src="<?php echo base_url('public/images/logo1.png'); ?>" alt=""></a>
                </div>
                <div class="menu">
                    <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                    <ul class="nav" id="nav">
                        <li class="current"><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('Packages');?>">Our packages</a></li>
                                <li><a href="<?php echo base_url('Places');?>">Plan package</a></li>
                                <li><a href="<?php echo base_url('Places');?>">Get tour guide</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('Places');?>">Places to visit</a></li>
                        <li><a href="<?php echo base_url('Reviews');?>">Reviews</a></li>
                        <div class="clear"></div>
                    </ul>

                </div>							
                <div class="clearfix"> </div>
                <!----//End-top-nav---->
            </div>
        </div>
        <!----//End-header---->
        <!----//start-banner---->
        <div class="banner text-center">
            <div class="container">
                <div class="banner-info">
                    <h1>Name</h1>
                    <p>Description</p>
                    <label class="page-scroll"><a class="banner-btn class scroll" href="#feature"><span> </span></a></label>
                </div>
            </div>
        </div>
        <!----//end-banner---->
        <!----//start-content---->
        <div class="main">
            <div class="content_white">
                <h2>Plan your tour</h2>
                <p>Description</p>
            </div>
            <div class="container" >
                <div class="testmonial"> 
                </div>
                <div class="row" style="margin-top: -50px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                    <div class="caption">
                                        <h3>Package name</h3>
                                        <p style="text-align: justify; margin-bottom: 10px;">Package description</p>
                                        <p><a class="btn btn-primary" style="background: #D65724" href="#">View more details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 40px;">
                    <a href="#" class="about_btn">View more packages</a>
                </div>
            </div>
            <div class="content_white">
                <h2>Places to visit</h2>
                <p>Description</p>
            </div>
            <div class="container">
                <div class="testmonial" style="margin-bottom: -100px"> 
                </div>
                <ul id="flexiselDemo1">
                    <li>
                        <div class="thumbnail" style="text-align: left;">
                            <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                            <div class="caption">
                                <h3>Package name</h3>
                                <p style="text-align: justify; margin-bottom: 10px;"><small>Package description vgvchvc kjbjkbC CNC KBKJC HBBJC JBKJBKC KBKJBKA</small></p>
                                <a class="btn btn-primary" style="background: #D65724" href="#">View more details</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div style="margin-top: -20px; margin-bottom: 40px;">
                    <a href="#" class="about_btn">View more places</a>
                </div>
            </div>
            <div class="content_white" style="margin-top: -50px">
                <h2>Activities</h2>
                <p>Description</p>
            </div>
            <div class="container">
                <div class="testmonial" style="margin-bottom: -100px"> 
                </div>
                <ul id="flexiselDemo2">
                    <li>
                        <div class="thumbnail" style="text-align: left;">
                            <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                            <div class="caption">
                                <h3>Package name</h3>
                                <p style="text-align: justify; margin-bottom: 10px;"><small>Package description vgvchvc kjbjkbC CNC KBKJC HBBJC JBKJBKC KBKJBKA</small></p>
                                <a class="btn btn-primary" style="background: #D65724" href="#">View more details</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div style="margin-top: -20px; margin-bottom: 40px;">
                    <a href="#" class="about_btn">View more activities</a>
                </div>
            </div>
            <div class="footer">
                <div class="footer_top">
                    <div class="container">
                        <div class="footer_head">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
                        </div>
                        <div class="row footer_grid">
                            <div class="col-md-9"> 
                                <div class="map">
                                    <iframe width="600" height="450" frameborder="0" style="border:0"
                                            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJXcyB0pFP4joRTufgPM0vS-o&key=AIzaSyCWUG3LJ6Pa8Zr551qR_usacBfn_NWA_xU" allowfullscreen></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <ul class="twitter">
                                    <div class="contact_details">
                                        <h5 style="color: white">Address :</h5>
                                        <i class="address"></i>
                                        <div class="contact_address" style="color: whitesmoke">
                                            No 29/24,<br>
                                            Wawanawatta Road,<br>
                                            Mampe, Piliyanda<br>
                                            Sri Lanka<br><br>
                                        </div>
                                        <h5 style="color: white">Email :</h5>
                                        <i class="mail"></i>
                                        <div class="contact_address" style="color: whitesmoke">
                                            savindamaddd@gmail.com<br><br>
                                        </div>
                                        <h5 style="color: white">Phone number :</h5>
                                        <i class="phone"></i>
                                        <div class="contact_address" style="color: whitesmoke">
                                            +94112615808<br>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_midle">
                    <div class='container'>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="social_left">
                                    <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
                                    <li class="fb_text"><h4><a href="#">Follow us on Facebook</a></h4>
                                        <p>quod mazim placerat</p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="social_left">
                                    <li class="facebook"><a href="#"><i class="google"> </i></a></li>
                                    <li class="fb_text"><h4><a href="#">Follow us on Google +</a></h4>
                                        <p>dolore eu feugiat nulla</p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="social_left">
                                    <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
                                    <li class="fb_text"><h4><a href="#">Follow us on LinkedIn</a></h4>
                                        <p>quod mazim placerat</p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="copy">
                        <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank">  w3layouts</a></p>
                    </div>
                </div>
            </div>
            <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/slide_image.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/responsive-nav.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/jquery.flexisel.js'); ?>"></script>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $(".scroll").click(function (event) {
                        event.preventDefault();
                        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
                    });
                });
            </script>
    </body>
</html>		