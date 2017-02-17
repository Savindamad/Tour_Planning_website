<html>
    <head>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/map.css') ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
</head>
<body>

    <?php
    $this->load->view('website/navbar', Array('current' => 'customPackage', 'title' => 'Packages'));
    ?>
    
    <div class="container-fluid">
        
    </div>

    <?php
    $this->load->view('website/footer');
    ?>

    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>
