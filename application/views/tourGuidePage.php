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
    $this->load->view('website/navbar', Array('current' => 'tourGuide', 'title' => 'Packages'));
    ?>
    <div class="container-fluid" style="margin-top: 40px; margin-bottom: 40px;">
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
                                        <h3>Basic information</h3>
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
                                            <input type="number" class="form-control" id="numPersons" min="1" max="30" value="1"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="single">
                                                Number of days
                                            </label>
                                            <input type="number" class="form-control" id="single" min="2" max="30" value="2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="double">
                                                Number of places
                                            </label>
                                            <input type="number" class="form-control" id="double" min="1" max="30" value="1"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Text</label>
                                            <textarea class="form-control" id="comment" rows="4"></textarea>
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
                            <p>Description</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10" style="background: #ffffff; border-radius: 5px">
                                            <h4 style="margin-top: 15px;"><b>Place 01</b></h4>
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="email">
                                                        Select place
                                                    </label>
                                                    <input type="email" class="form-control" id="email" />
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
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h4><b>Airport</b></h4>
                            <p>Description</p>
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
                                    <p>Description</p>
                                    <form role="form" style="margin-top: 20px;">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary form-control" id="email" />
                                        </div>
                                    </form>
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

    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>