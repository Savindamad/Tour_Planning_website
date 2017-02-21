<html>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css') ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        $this->load->view('website/navbarNw', Array('current' => 'package', 'title' => 'Package'));
        ?>

        <div class="container-fluid" id="content" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="content_white" style="text-align: left; margin-left: 5px">
                        <h2><?php echo $package->name; ?></h2>
                        <p style="line-height: 110%; font-size: 120%; text-align: justify"><?php echo $package->description; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                    <div class="row" style="margin-top: 30px;">      
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-11">
                                            <div style="margin-bottom : 20px">
                                                <h3>Basic Details</h3>
                                                <p>Please fill your basic contact details and tour preferences details below.</p>
                                            </div>
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="email">
                                                        Email address
                                                    </label>
                                                    <input type="email" class="form-control" id="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="country">
                                                        Country
                                                    </label>
                                                    <select class="form-control bfh-countries" data-country="US" id="country"></select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobile">
                                                        Phone number
                                                    </label>
                                                    <input type="email" class="form-control" id="mobile" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="hotel_star">
                                                        Hotel rating preference
                                                    </label>
                                                    <select class="form-control" id="hotel_star" onchange="getHotelsPackage(<?php echo $package->id; ?>, this.value)">
                                                        <option value="TWO">Two star</option>
                                                        <option value="THREE">Three star</option>
                                                        <option value="FOUR">Four star</option>
                                                        <option value="FIVE">Five star</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="numPersons">
                                                        Number of persons
                                                    </label>
                                                    <input type="number" class="form-control" id="numPersons" min="1" max="30" value="1"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="single">
                                                        Number of single rooms
                                                    </label>
                                                    <input type="number" class="form-control" id="single" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="double">
                                                        Number of double rooms
                                                    </label>
                                                    <input type="number" class="form-control" id="double" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="trible">
                                                        Number of triple rooms
                                                    </label>
                                                    <input type="number" class="form-control" id="trible" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="thumbnail">
                                                <div id="map" style="width: 100%; height: 750px;"></div>
                                                <input type="hidden" id="map_package_id" value="<?php echo $package->id; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; margin-bottom: 20px">      
                        <div class="col-md-12">
                            <div class="row" style="margin-left : 20px; margin-right: 20px">
                                <h3>Accommodation Details</h3>
                                <p>Fill in the details below, for us to get an understanding about your accommodation and other preferences.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php
                        foreach ($places as $placeInfo) {
                            ?>
                            <div class="row" style="margin: 5px; margin-bottom: 30px;">
                                <div class="col-md-12" style="background: #ffffff; border-radius: 5px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-md-4"><h3>Day <?php echo $placeInfo['place']->day_num; ?> - <?php echo $placeInfo['place']->place_name; ?></h3></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="thumbnail">
                                                                <img alt="Bootstrap Thumbnail First" src="<?php echo base_url($placeInfo['place']->place_image); ?>" />
                                                                <div class="caption">
                                                                    <p style="margin-top: 5px"><a class="btn btn-primary" style="width :100%" href="<?php echo base_url('index.php/Place/') . $placeInfo['place']->place_id; ?>">View place details</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Activities</h3>
                                                    <ul class="list-group">
                                                        <?php
                                                        foreach ($placeInfo['activities']->result() as $row) {
                                                            ?>
                                                            <li class="list-group-item"><?php echo $row->activity_name; ?></li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Accommodation</h3>
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="s_<?php echo $placeInfo['place']->id; ?>">
                                                                Hotel rating preference
                                                            </label>
                                                            <select class="form-control" id="s_<?php echo $placeInfo['place']->id; ?>" onchange="getHotelsPlace(<?php echo $placeInfo['place']->id; ?>, this.value)">
                                                                <option value="TWO">Two Star</option>
                                                                <option value="THREE">Three Star</option>
                                                                <option value="FOUR">Four Star</option>
                                                                <option value="FIVE">Five Star</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="h_<?php echo $placeInfo['place']->id; ?>">
                                                                Select hotel
                                                            </label>
                                                            <select class="form-control" id="h_<?php echo $placeInfo['place']->id; ?>">
                                                                <?php
                                                                foreach ($placeInfo['hotels']->result() as $row) {
                                                                    ?>
                                                                    <option value="<?php echo $row->hotel_id; ?>"><?php echo $row->hotel_name; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="r_<?php echo $placeInfo['place']->id; ?>">
                                                                Room condition
                                                            </label>
                                                            <select class="form-control" id="r_<?php echo $placeInfo['place']->id; ?>">
                                                                <option>Standard</option>
                                                                <option>Deluxe</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>>
            <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p style="margin-bottom : 20px">Please submit the details. Our agent will contact you through e-mail with the package details. </p>
                    <button class="btn btn-lg btn-primary" onclick="submitFunc(<?php echo "$package->id,$package->num_places" ;?>)">Submit your response</button>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <?php
        $this->load->view('website/footer');
        ?>

        <script src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBiLOyslTC14QS8xl906N-6AvpzOn7BEgg" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/map_package_places.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/package_page.js'); ?>"></script>
    </body>
</html>		
