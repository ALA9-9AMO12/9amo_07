<!DOCTYPE html>
<html lang="en">
<head>
    <title> Imker home 2   </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h2>Carousel Example</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="Image/imker2013.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="Image/imkers2014.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item">
                <img src="Image/imkerswerken.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

 <!-- Footer -->
<footer class="text-center text-lg-start text-dark bg-warning"  >

<!-- Section: Links  -->
<section class="">
    <div class="container text-center text-md-start mt-5 mb-3  ">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-sm-5 col-xl-3   mx-auto mb-4 mt-3 ">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4 ">
                    Imkerverening
                </h6>
                <p>
                    De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2  col-sm-5 mx-auto mb-4 mt-3 col-xs-6">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Sociaal
                </h6>
                <p>
                    <a href="#!" class="text-reset">Instagram</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Twitter</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Facebook</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Nieuws berichten</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2  col-sm-5 mx-auto mb-4 mt-3 d-none d-sm-block">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Handige links
                </h6>
                <p>
                    <a href="#!" class="text-reset">Home</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Berichten</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Informatie</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Contact</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 col-sm-5  mx-auto mb-md-0 mb-4 mt-3">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contact
                </h6>
                <p>  <i class="bi bi-house-door"></i>   Poelgeesterweg 1, Oegstgeest.</p>
                <p>
                    <i class="bi bi-envelope"></i>
                    secretaris@imkervereniging-oegstgeest.nl
                </p>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4 bg-warning" >
    © 2021 Copyright:
    <a class="text-reset fw-bold" href=" https://www.imkervereniging-oegstgeest.nl/">Imkervereniging Oegstgeest  </a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
