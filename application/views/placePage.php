<html>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css'); ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!----start-header---->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo base_url();?>"><img style="width: 200px; margin-top: -30px; margin-bottom: -30px" src="<?php echo base_url('public/images/logo1.png');?>" alt=""></a>
                </div>
                <div class="menu">
                    <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
                    <ul class="nav" id="nav">
                        <li><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Our packages</a></li>
                                <li><a href="#">Plan package</a></li>
                                <li><a href="#">Get tour guide</a></li>
                            </ul>
                        </li>
                        <li class="current"><a href="#">Places to visit</a></li>
                        <li><a href="#">Reviews</a></li>
                        <div class="clear"></div>
                    </ul>

                </div>							
                <div class="clearfix"> </div>
                <!----//End-top-nav---->
            </div>
        </div>
        <!----//End-header---->
        <div class="about">
            <!----//start-banner---->
            <div class="container">
                <section class="title-section">
                    <h1 class="title-header">Places to visit</h1>
                    <ul class="breadcrumb breadcrumb__t"><li><a href="#">Home</a></li><li class="active">Blog</li></ul>  
                </section> 
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 40px; margin-bottom: 20px;">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail">
                                            <h3 style="margin-top: 10px; margin-left: 5px">Place</h3>
                                        </div>
                                        <div class="thumbnail">
                                            <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        </div>
                                        <div class="thumbnail" style="margin-top: -10px">
                                            <div class="caption">
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, 
                                                    egestas eget quam. Donec id elit non mi porta gravida at 
                                                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                    Cras justo odio, dapibus ac facilisis in, 
                                                    egestas eget quam. Donec id elit non mi porta gravida at 
                                                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                    Cras justo odio, dapibus ac facilisis in, 
                                                    egestas eget quam. Donec id elit non mi porta gravida at 
                                                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                    Cras justo odio, dapibus ac facilisis in, 
                                                    egestas eget quam. Donec id elit non mi porta gravida at 
                                                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <div class="map">
                                        <iframe width="600" frameborder="0" style="border:1" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJXcyB0pFP4joRTufgPM0vS-o&key=AIzaSyCWUG3LJ6Pa8Zr551qR_usacBfn_NWA_xU" allowfullscreen>
                                        </iframe><br>
                                        <small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 5px; margin-bottom: 30px;">
                    <div class="col-md-12" style="background-color: white; border-radius: 5px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <h2>Activities</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" style="border: 1px">
                                                <div class="thumbnail">
                                                    <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="thumbnail">
                                                    <div class="caption">
                                                        <h4>Place 1</h4>
                                                        <p>
                                                            <small>
                                                                Cras justo odio, dapibus ac facilisis in, 
                                                                egestas eget quam. Donec id elit non mi porta gravida.
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <h2>Hotels</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" style="border: 1px">
                                                <div class="thumbnail">
                                                    <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="thumbnail">
                                                    <div class="caption">
                                                        <h4>Thumbnail label</h4>
                                                        <p>
                                                            <small>
                                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_bottom">
                <div class="copy">
                    <p>&copy; 2014 Template by <a href="#" target="_blank">  w3layouts</a></p>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
    </body>
</html>		
