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
        $this->load->view('website/navbar', Array('current' => 'package', 'title' => 'Plan your tour'));
        ?>
        
        <div class="container-fluid" style="margin-top: 40px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="content_white" style="text-align: left; margin-left: 5px">
                        <h2><?php echo $package->name; ?></h2>
                        <p><?php echo $package->description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <div>
                                            <h3>Description</h3>
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
                                                <label for="hotel">
                                                    Hotel
                                                </label>
                                                <select class="form-control" id="hotel" onchange="getHotelsPackage(<?php echo $package->id; ?>, this.value)">
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
                                                <input type="number" class="form-control" id="numPersons" />
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
                                                <label for="triple">
                                                    Number of triple rooms
                                                </label>
                                                <input type="number" class="form-control" id="triple" />
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
                                                            <img alt="Bootstrap Thumbnail First" src="<?php echo $placeInfo['place']->place_image; ?>" />
                                                            <div class="caption">
                                                                <p style="margin-top: 5px"><a class="btn btn-primary" href="<?php echo base_url('Place/') . $placeInfo['place']->place_id; ?>">View more details</a></p>
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
                                                <h3>Hotel details</h3>
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="s_<?php echo $placeInfo['place']->id; ?>">
                                                            Hotel
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
                                                            <option>Delux</option>
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
            <div class="row" style="margin-top: 20px; margin-bottom: 30px;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="jumbotron">
                        <p>Package description</p>
                        <button class="btn btn-lg btn-primary">Submit your response</button>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
        <?php
        $this->load->view('website/footer');
        ?>
        
        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBiLOyslTC14QS8xl906N-6AvpzOn7BEgg" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/map_package_places.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/package_page.js'); ?>"></script>
    </body>
</html>		
