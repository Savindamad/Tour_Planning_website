<div class="header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img style="width: 200px; margin-top: -30px; margin-bottom: -30px" src="<?php echo base_url('public/images/logo1.png'); ?>" alt=""></a>
        </div>
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
            <ul class="nav" id="nav">
                <li <?php if (isset($current) && $current == 'home') echo 'class="current"'; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="dropdown" <?php if (isset($current) && ($current == 'packages' || $current == 'customPackage' || $current == 'tourGuide')) echo 'class="current"'; ?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if (isset($current) && $current == 'packages') echo 'class="current"'; ?>><a href="<?php echo base_url('Packages'); ?>">Our packages</a></li>
                        <li <?php if (isset($current) && $current == 'customPackage') echo 'class="current"'; ?>><a href="<?php echo base_url('CustomPackage'); ?>">Plan your package</a></li>
                        <li <?php if (isset($current) && $current == 'tourGuide') echo 'class="current"'; ?>><a href="<?php echo base_url('TourGuide'); ?>">Book a vehicle</a></li>
                    </ul>
                </li>
                <li <?php if (isset($current) && ($current == 'places' || $current == 'place')) echo 'class="current"'; ?>><a href="<?php echo base_url('Places'); ?>">Places to visit</a></li>
                <li <?php if (isset($current) && $current == 'reviews') echo 'class="current"'; ?>><a href="<?php echo base_url('Reviews'); ?>">Reviews</a></li>
                <div class="clear"></div>
            </ul>
        </div>							
        <div class="clearfix"> </div>
    </div>
</div>
<?php
if (isset($current) && $current != 'home') {
    ?>
    <div class="about">
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
} else {

}
?>
