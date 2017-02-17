<html>
    <head>
    <head>
        <title>Tour planning</title>
        <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('public/css/style.css') ?>" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        $this->load->view('website/navbar', Array('current' => 'customPackage', 'title' => 'Packages'));
        ?>

        <div class="container-fluid" style="margin-top: 40px; margin-bottom: 20px;">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">
                <div class="row" style="margin-top: 30px;">      
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <h3>Basic infomation</h3>
                                        <p>Descriprion</p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
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
                                                <select class="form-control" id="hotel" onchange="getHotelsStar(this.value)">
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
                                                <input type="number" min="1" max="30" class="form-control" id="numPersons"  value="1"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="numDays">
                                                    Number of days
                                                </label>
                                                <input type="number" min="2" max="30" class="form-control" id="numDays" value="2" onchange="changeNumDays(this.value)"/>
                                                <input type="hidden" value="2" id="numDays1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form role="form">
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
                                            <div class="form-group">
                                                <label for="triple">
                                                    Number of triple rooms
                                                </label>
                                                <input type="number" class="form-control" id="triple" />
                                            </div>
                                            <div class="form-group">
                                                <label for="comment">Text</label>
                                                <textarea class="form-control" id="comment" rows="5"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p>Descriprion</p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <form role="form">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary form-control" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #f6f6f6; margin-top: 40px; margin-bottom: 20px;">
            <div style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <h3>Place and hotel information</h3>
                                <p>Descriprion</p><br>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" id="days">
                <?php
                for ($i = 1; $i < 3; $i++) {
                    ?>
                <div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px" id="d_<?php echo $i;?>">
                        <div class="row" >
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="background-color: #ffffff; border-radius: 5px;">
                                <div class="row">
                                    <div style="margin-top: 15px">
                                        <h4>&nbsp&nbsp<b>Day 0<?php echo $i; ?></b></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="p_<?php echo $i; ?>">Select Place</label>
                                                <select class="form-control" id="p_<?php echo $i; ?>" onchange="getPlaceHotels(<?php echo $i; ?>)">
                                                    <?php
                                                    foreach ($places->result() as $row) {
                                                        echo "<option value='$row->id'>$row->name</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="s_<?php echo $i; ?>">Hotel star</label>
                                                <select class="form-control" id="s_<?php echo $i; ?>" onchange="getPlaceHotelsStar(<?php echo $i; ?>)">
                                                    <option value="TWO">Two star</option>
                                                    <option value="THREE">Three star</option>
                                                    <option value="FOUR">Four star</option>
                                                    <option value="FIVE">Five star</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="h_<?php echo $i; ?>">Select hotel</label>
                                                <select class="form-control" id="h_<?php echo $i; ?>">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="r_<?php echo $i; ?>">Room condition</label>
                                                <select class="form-control" id="r_<?php echo $i; ?>">
                                                    <option value="STANDARD">Standard</option>
                                                    <option value="DELUX">Delux</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <p>Descriprion</p><br>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px; margin-bottom: 40px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary form-control" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        $this->load->view('website/footer');
        ?>

        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="<?php echo base_url('public/js/custom_package_page.js') ?>"></script>
    </body>
</html>