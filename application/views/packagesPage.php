<html>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
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
                    <a href="<?php echo base_url(); ?>"><img style="width: 200px; margin-top: -30px; margin-bottom: -30px" src="<?php echo base_url('public/images/logo1.png'); ?>" alt=""></a>
                </div>
                <div class="menu">
                    <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                    <ul class="nav" id="nav">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="dropdown current">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('PAckages');?>">Our packages</a></li>
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
                    <ul class="breadcrumb breadcrumb__t"><li><a href="#">Home</a></li><li class="active">Blog</li></ul>  
                </section> 
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="margin-top: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <?php
                        foreach ($packages->result() as $row) {
                            ?>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3><?php echo $row->name;?></h3>
                                    </div>
                                    <img alt="Bootstrap Thumbnail Second" src="<?php echo base_url($row->image);?>" />
                                    <div class="caption">
                                        <p><?php echo $row->description;?></p><br>
                                        <p><a class="btn btn-primary" href="<?php echo base_url('Package/').$row->id;?>">View details</a></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
            <div class="footer">
                <div class="footer_bottom">
                    <div class="copy">
                        <p>&copy; 2014 Template by <a href="#" target="_blank">  w3layouts</a></p>
                    </div>
                </div>
            </div>
    </body>
</html>		
