<html>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/reviews.css'); ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        $this->load->view('website/navbar', Array('current' => 'reviews', 'title' => 'Customer reviews'));
        ?>
        
        <div class="container-fluid">
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="panel panel-white post panel-shadow">
                            <div class="post-heading">
                                <div class="pull-left image">
                                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                </div>
                                <div class="pull-left meta">
                                    <div class="title h5">
                                        <a href="#"><b>Ryan Haywood</b></a>
                                        made a post.
                                    </div>
                                    <h6 class="text-muted time">1 minute ago</h6>
                                </div>
                            </div> 
                            <div class="post-description"> 
                                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
        <?php
        $this->load->view('website/footer');
        ?>
        
        <script src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>		
