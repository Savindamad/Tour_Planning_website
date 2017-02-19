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

        <div class="g-commentcount" data-href="[https://plus.google.com/u/0/100763159739584346062]"></div>
        <div class="container-fluid">            
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                    <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="row">
                                <div id="fb-root" style="max-width: 100%"></div>
                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
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
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>		
