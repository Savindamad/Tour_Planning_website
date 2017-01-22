<html>
    <head>
        <title>Tour planning</title>
        <link href="http://localhost/TourPlanning/public/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="http://localhost/TourPlanning/public/js/jquery.min.js"></script>
        <link href="http://localhost/TourPlanning/public/css/style.css" rel='stylesheet' type='text/css' />
        <link href="http://localhost/TourPlanning/public/css/map.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    </script>
</head>
<body>
    <!----start-header---->
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown current">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan your tour<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Our packages</a></li>
                            <li><a href="#">Plan package</a></li>
                            <li><a href="#">Get tour guide</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Places to visit</a></li>
                    <li><a href="services.html">Reviews</a></li>
                    <div class="clear"></div>
                </ul>

            </div>							
            <div class="clearfix"> </div>
            <!----//End-top-nav---->
        </div>
    </div>
    <!----//End-header---->
    <div class="about">
        <!----//start-banner---->
        <div class="container">
            <section class="title-section">
                <h1 class="title-header">
                    Plan your tour</h1>
                <ul class="breadcrumb breadcrumb__t"><li><a href="index.html">Home</a></li><li class="active">Blog</li></ul>  
            </section> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2>Package Name</h2>
                    <p>Package description</p>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div id="map_wrapper">
                    <div id="map_canvas" class="mapping"></div>
                </div>
            </div>
            <div class="col-md-5">
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
                        <select class="form-control" id="hotel">
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numPersons">
                            Number of persons
                        </label>
                        <input type="number" class="form-control" id="numPersons" />
                    </div>
                    <div class="form-group">
                        <label for="double">
                            Number of double rooms
                        </label>
                        <select class="form-control" id="double">
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="single">
                            Number of single rooms
                        </label>
                        <select class="form-control" id="single">
                            <option>Default select</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background: #F6F6F6; border-radius: 5px">
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-4"><h3>Day 01</h3></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="thumbnail">
                                    <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                    <div class="caption">
                                        <h4>Place</h4>
                                        <p><small>Place description</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label for="single">
                                    Hotel
                                </label>
                                <select class="form-control" id="single">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="single">
                                    Select hotel
                                </label>
                                <select class="form-control" id="single">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label for="activities">
                                    Select activities
                                </label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Activity one
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Activity one
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background: #F6F6F6; border-radius: 5px">
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-4"><h3>Day 01</h3></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="thumbnail">
                                    <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                    <div class="caption">
                                        <h4>Place</h4>
                                        <p><small>Place description</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label for="single">
                                    Hotel
                                </label>
                                <select class="form-control" id="single">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="single">
                                    Select hotel
                                </label>
                                <select class="form-control" id="single">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label for="activities">
                                    Select activities
                                </label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Activity one
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Activity one
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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
    <div class="footer">
        <div class="footer_bottom">
            <div class="copy">
                <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank">  w3layouts</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://localhost/TourPlanning/public/js/map.js"></script>
</body>
</html>		
