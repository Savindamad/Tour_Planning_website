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
    </head>
    <body>
        
        <?php
        $this->load->view('website/navbar', Array('current' => 'home', 'title' => 'Home page'));
        ?>
        
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
                            <?php
                            foreach ($packages->result() as $row) {
                                ?>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <h3><?php echo $row->name; ?></h3>
                                            <p style="text-align: justify; margin-bottom: 10px;"><?php echo $row->description; ?></p>
                                            <p><a class="btn btn-primary" style="background: #D65724" href="<?php echo base_url('Package/') . $row->id; ?>">View more details</a></p>
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
                    <a href="<?php echo base_url('Packages'); ?>" class="about_btn">View more packages</a>
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
                    <?php
                    foreach ($places->result() as $row) {
                        ?>
                        <li>
                            <div class="thumbnail" style="text-align: left;">
                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image) ?>" />
                                <div class="caption">
                                    <h3><?php echo $row->name; ?></h3>
                                    <p style="text-align: justify; margin-bottom: 10px;"><small><?php echo $row->description; ?></small></p>
                                    <a class="btn btn-primary" style="background: #D65724" href="<?php echo base_url('Place/') . $row->id; ?>">View more details</a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div style="margin-top: -20px; margin-bottom: 40px;">
                    <a href="<?php echo base_url('Places'); ?>" class="about_btn">View more places</a>
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
                    <?php
                    foreach ($activities->result() as $row) {
                        ?>
                        <li>
                            <div class="thumbnail" style="text-align: left;">
                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image) ?>" />
                                <div class="caption">
                                    <h3><?php echo $row->name; ?></h3>
                                    <p style="text-align: justify; margin-bottom: 10px;"><small><?php echo $row->description; ?></small></p>
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
            
            <?php
            $this->load->view('website/home_footer');
            ?>
            
            <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/slide_image.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/responsive-nav.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/jquery.flexisel.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('public/js/home_page.js'); ?>"></script>
    </body>
</html>		