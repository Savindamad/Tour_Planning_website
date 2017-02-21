<style>
    li:hover {
        background-color: #D65724;
    }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #ffffff; border-color: #ffffff" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('public/images/logo.png'); ?>" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav">
                <li <?php if (isset($current) && $current == 'home') echo 'style="background-color: #D65724;"'; ?> >
                    <a href="<?php echo base_url(); ?>" 
                    <?php
                    if (isset($current) && $current == 'home') {
                        echo 'style="color : #ffffff"';
                    } else {
                        echo 'style="color : ##637F83"';
                    }
                    ?>><b>Home</b></a>
                </li>
                <li class="dropdown" <?php if (isset($current) && ($current == 'packages' || $current == 'customPackage' || $current == 'tourGuide')) echo 'style="background-color: #D65724;"'; ?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Plan your tour</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/Packages'); ?>"><b>Tour packages</b></a></li>
                        <li><a href="<?php echo base_url('index.php/CustomPackage'); ?>"><b>Plan your tour</b></a></li>
                        <li><a href="<?php echo base_url('index.php/TourGuide'); ?>"><b>Transport Reservation</b></a></li>
                    </ul>
                </li>
                <li <?php if (isset($current) && $current == 'places') echo 'style="background-color: #D65724;"'; ?> >
                    <a href="<?php echo base_url('index.php/Places'); ?>" 
                    <?php
                    if (isset($current) && $current == 'places') {
                        echo 'style="color : #ffffff"';
                    } else {
                        echo 'style="color : ##637F83"';
                    }
                    ?>><b>Places to visit</b></a>
                </li>
                <li <?php if (isset($current) && $current == 'reviews') echo 'style="background-color: #D65724;"'; ?> >
                    <a href="<?php echo base_url('index.php/Reviews'); ?>" 
                    <?php
                    if (isset($current) && $current == 'reviews') {
                        echo 'style="color : #ffffff"';
                    } else {
                        echo 'style="color : ##637F83"';
                    }
                    ?>><b>Customer reviews</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<?php
if (isset($current) && $current != 'home') {
    ?>
<div class="about" style="margin-top : 80px">
        <div class="container">
            <section class="title-section">
                <div class="row">
                    <div class="col-md-9">
                        <h1 class="title-header"><?php if (isset($title)) echo $title; ?></h1>
                    </div>
                    <div class="col-md-3">
                        <?php
                        if (isset($current) && $current == 'places') {
                            ?>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search places.." oninput="searchPlace(this.value)">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section> 
        </div>
    </div>
    <?php
}
?>
