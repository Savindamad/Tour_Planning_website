<html>
    <head>
        <title>Tour planning</title>
        <link href="http://localhost/TourPlanning/public/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="http://localhost/TourPlanning/public/js/jquery.min.js"></script>
        <link href="http://localhost/TourPlanning/public/css/style.css" rel='stylesheet' type='text/css' />
        <link href="http://localhost/TourPlanning/public/css/map.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </script>
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
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="dropdown current">
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
    <div class="about">
        <!----//start-banner---->
        <div class="container">
            <section class="title-section">
                <h1 class="title-header">
                    Plan your tour</h1>
                <ul class="breadcrumb breadcrumb__t"><li><a href="index.html">Home</a></li><li class="active">Blog</li></ul>  
            </section> 
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 40px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="content_white" style="text-align: left; margin-left: 5px">
                    <h2><?php echo $package->name; ?></h2>
                    <p><?php echo $package->description; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
            <div class="row" style="margin-top: 30px;">      
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-11">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="email">
                                                Email address
                                            </label>
                                            <input type="email" class="form-control" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="country">
                                                Country
                                            </label>
                                            <select class="form-control bfh-countries" data-country="US" id="country"></select>
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile">
                                                Phone number
                                            </label>
                                            <input type="email" class="form-control" id="mobile" />
                                        </div>
                                        <div class="form-group">
                                            <label for="hotel">
                                                Hotel
                                            </label>
                                            <select class="form-control" id="hotel">
                                                <option>Two star</option>
                                                <option>Three star</option>
                                                <option>Four star</option>
                                                <option>Five star</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="room">
                                                Room condition
                                            </label>
                                            <select class="form-control" id="room">
                                                <option>Standard rooms</option>
                                                <option>Delux rooms</option>
                                                <option>Sweet rooms</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="numPersons">
                                                Number of persons
                                            </label>
                                            <input type="number" class="form-control" id="numPersons" />
                                        </div>
                                        <div class="form-group">
                                            <label for="single">
                                                Number of single rooms
                                            </label>
                                            <input type="number" class="form-control" id="single" />
                                        </div>
                                        <div class="form-group">
                                            <label for="double">
                                                Number of double rooms
                                            </label>
                                            <input type="number" class="form-control" id="double" />
                                        </div>
                                        <div class="form-group">
                                            <label for="triple">
                                                Number of triple rooms
                                            </label>
                                            <input type="number" class="form-control" id="triple" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
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
                </div>
            </div>
            <div>
                <?php
                foreach ($places as $placeInfo) {
                    ?>
                    <div class="row" style="margin: 5px; margin-bottom: 30px;">
                        <div class="col-md-12" style="background: #ffffff; border-radius: 5px">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-md-4"><h3>Day <?php echo $placeInfo['place']->day_num; ?> - <?php echo $placeInfo['place']->place_name; ?></h3></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="Bootstrap Thumbnail First" src="<?php echo $placeInfo['place']->place_image; ?>" />
                                                        <div class="caption">
                                                            <p style="margin-top: 5px"><a class="btn btn-primary" href="#">View more details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Activities</h3>
                                            <ul class="list-group">
                                                <?php
                                                foreach ($placeInfo['activities']->result() as $row) {
                                                    ?>
                                                    <li class="list-group-item"><?php echo $row->activity_name; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Hotel details</h3>
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="single">
                                                        Hotel
                                                    </label>
                                                    <select class="form-control" id="single">
                                                        <option>Two Star</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="single">
                                                        Select hotel
                                                    </label>
                                                    <select class="form-control" id="single">
                                                        <?php
                                                        foreach ($placeInfo['hotels']->result() as $row) {
                                                            ?>
                                                            <option><?php echo $row->hotel_name; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <p>Package description</p>
                    <button class="btn btn-lg btn-primary">Submit your response</button>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_bottom">
            <div class="copy">
                <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank">  w3layouts</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://localhost/TourPlanning/public/js/map.js"></script>
</body>
</html>		
