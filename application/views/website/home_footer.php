<div class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="footer_head">
                <h2><?php if (isset($name)) echo $name; ?></h2>
                <p style="line-height: 90%; font-size: 130%;"><small><?php if (isset($description)) echo $description; ?></small></p>
            </div>
            <div class="row footer_grid">
                <div class="col-md-9"> 
                    <div id="map" style="width: 100%; height: 300px;"></div>
                    <input type="hidden" id="latitude" value="<?php if (isset($latitude)) echo $latitude; ?>">
                    <input type="hidden" id="longitude" value="<?php if (isset($longitude)) echo $longitude; ?>">
                </div>
                <div class="col-md-3">
                    <ul class="twitter">
                        <div class="contact_details">
                            <h5 style="color: white">Address :</h5>
                            <i class="address"></i>
                            <div class="contact_address" style="color: whitesmoke">
                                <?php if (isset($address)) echo $address; ?>
                            </div>
                            <h5 style="color: white">Email :</h5>
                            <i class="mail"></i>
                            <div class="contact_address" style="color: whitesmoke">
                                <?php if (isset($email)) echo $email; ?><br><br>
                            </div>
                            <h5 style="color: white">Phone number :</h5>
                            <i class="phone"></i>
                            <div class="contact_address" style="color: whitesmoke">
                                <?php if (isset($phone)) echo $phone; ?><br>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_midle">
        <div class='container'>
            <div class="row">
                <div class="col-md-4">
                    <ul class="social_left">
                        <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
                        <li class="fb_text"><h4><a href="#">Follow us on Facebook</a></h4>
                            <p>quod mazim placerat</p>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="social_left">
                        <li class="facebook"><a href="#"><i class="google"> </i></a></li>
                        <li class="fb_text"><h4><a href="#">Follow us on Google +</a></h4>
                            <p>dolore eu feugiat nulla</p>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="social_left">
                        <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
                        <li class="fb_text"><h4><a href="#">Follow us on LinkedIn</a></h4>
                            <p>quod mazim placerat</p>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_bottom">
            <div class="copy">
                <p>&copy; Walk Lanka<a href="#" target="_blank"> Travels</a></p>
            </div>
        </div>
    </div>
</div>