<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50&text=Logo" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav left">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li class="dropdown" <?php if (isset($current) && ($current == 'packages' || $current == 'customPackage' || $current == 'tourGuide')) echo 'class="current"'; ?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if (isset($current) && $current == 'packages') echo 'class="current"'; ?>><a href="<?php echo base_url('index.php/Packages'); ?>">Tour packages</a></li>
                        <li <?php if (isset($current) && $current == 'customPackage') echo 'class="current"'; ?>><a href="<?php echo base_url('index.php/CustomPackage'); ?>">Plan your tour</a></li>
                        <li <?php if (isset($current) && $current == 'tourGuide') echo 'class="current"'; ?>><a href="<?php echo base_url('index.php/TourGuide'); ?>">Transport Reservation</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
