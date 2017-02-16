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
        <?php
        $this->load->view('website/navbar', Array('current' => 'places', 'title' => 'Places to visit'));
        ?>
        
        <div class="container-fluid">
            <div id="placeResult">
                <div class="row" style="margin-top: 40px">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="content_white" style="text-align: left">
                            <h2>Most popular places in Sri Lanka</h2>
                            <p>Description</p>
                        </div>
                        <div class="row">
                            <?php
                            foreach ($main_places->result() as $row) {
                                ?>
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <h3><?php echo $row->name; ?></h3>
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <p><?php echo $row->description; ?></p>
                                            <p style="margin-top: 5px"><a class="btn btn-primary" href="<?php echo base_url('Place/') . $row->id; ?>">View more details</a></p>
                                        </div>
                                    </div>
                                </div> 
                                <?php
                            }
                            ?>
                        </div>
                        <div class="content_white" style="text-align: left">
                            <h2>Other places in Sri Lanka</h2>
                            <p>Description</p>
                        </div>
                        <div class="row">
                            <?php
                            foreach ($other_places->result() as $row) {
                                ?>
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <h3><?php echo $row->name; ?></h3>
                                        <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($row->image); ?>" />
                                        <div class="caption">
                                            <p><?php echo $row->description; ?></p>
                                            <p style="margin-top: 5px"><a class="btn btn-primary" href="<?php echo base_url('Place/') . $row->id; ?>">View more details</a></p>
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
            </div>
        </div>
        
        <?php
        $this->load->view('website/footer');
        ?>
        
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/places_page.js'); ?>"></script>
    </body>
</html>		
