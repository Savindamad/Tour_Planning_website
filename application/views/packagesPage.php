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
        $this->load->view('website/navbarNw', Array('current' => 'packages', 'title' => 'Tour packages'));
        ?>

        <div class="container-fluid">
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <?php
                        foreach ($packages->result() as $row) {
                            ?>
                        <div class="col-md-4" style="margin-top: 20px">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3><?php echo $row->name; ?></h3>
                                    </div>
                                    <img alt="Bootstrap Thumbnail Second" src="<?php echo base_url($row->image); ?>" />
                                    <div class="caption">
                                        <p>
                                            <?php
                                            if (strlen($row->description) > 250) {
                                                $stringCut = substr($row->description, 0, 248);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                                                echo $string . '..';
                                            } else {
                                                echo substr($row->description, 0, 250);
                                            }
                                            ?>
                                        </p><br>
                                        <p><a class="btn btn-primary" href="<?php echo base_url('index.php/Package/') . $row->id; ?>">View details</a></p>
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
        <?php
        $this->load->view('website/footer');
        ?>
        <script src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>		
