<html>
    <head>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css') ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
</head>
<body>

    <?php
    $this->load->view('website/navbarNw', Array('current' => 'tourGuide', 'title' => 'Transport Reservation'));
    ?>
    <div class="container-fluid" style="margin-top: 40px; margin-bottom: 40px;" id="content">
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
                                        <h3>Basic Details</h3>
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
                                            <label for="numPersons">
                                                Number of persons
                                            </label>
                                            <input type="number" class="form-control" min="1" max="30" value="1" id="numPersons"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="numDays">
                                                Number of days
                                            </label>
                                            <input type="number" class="form-control" min="2" max="30" value="2" id="numDays" />
                                        </div>
                                        <div class="form-group">
                                            <label for="numPlaces">
                                                Number of places
                                            </label>
                                            <input type="number" class="form-control" min="1" max="30" value="1" id="numPlaces" onchange="changeNumPlaces(this.value)"/>
                                            <input type="hidden" id="numPlaces1" value="1"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" rows="4"></textarea>
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
                                        <div id="map" style="width: 100%; height: 600px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h3>Places to visit</h3>
                            <p>Description</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h4><b>Airport</b></h4>
                            <p>You will be picked up at the airport on your arrival date.</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p>Description</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="row">
                        <div id="places">
                            <div class="col-md-6" id="d_1">
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10" style="background: #ffffff; border-radius: 5px">
                                                <h4 style="margin-top: 15px;"><b>Place 01</b></h4>
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="p_1">
                                                            Select place
                                                        </label>
                                                        <select class="form-control" id="p_1">
                                                            <?php
                                                            foreach ($places->result() as $row) {
                                                                echo "<option value='$row->id'>$row->name</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h4><b>Airport</b></h4>
                            <p>You will be dropped at the airport on your departure date.</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px; margin-bottom: 30px">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="form-check" style="margin-top: 10px;">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" id="optionalFormStatus">
                                            If you fill option form
                                        </label>
                                        <p><br>Submit the filled form. Our agent will contact you soon through e-mail, with the tour details.</b></p>
                                    </div>
                                    <div style="margin-top: 10px; margin-bottom: 40px">
                                        <div class="row">
                                            <button class="btn btn-lg btn-primary" onclick="submitFunc()">Submit your response</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <?php
    $this->load->view('website/footer');
    ?>

    <script src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="<?php echo base_url('public/js/tour_guide_page.js') ?>"></script>
</body>
</html>