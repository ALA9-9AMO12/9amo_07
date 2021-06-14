<!DOCTYPE html>
<html lang="en">
<head>
    <title>Imkerwebsite - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>



<nav class="navbar navbar-expand-sm bg-warning text-dark   ">
    <a class="navbar-brand" href="#">
        <img src="Image/bee.png" alt="Logo" style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Berichten</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark" href="#">Archief</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0   text-right  ">
            <input class="form-control mr-sm-2 " type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-right" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="jumbotron text-center bg-warning   " style="margin-bottom:0">
    <h1>  Imkerverening Oestgeest</h1>
    <p class="col-sm-4 mx-auto text-dark "> De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers,
        als bij het grotere publiek.</p>
</div>




<div class="container " style="margin-top:30px">
    <div class="row  ">
        <div class="col-sm-4 ">
            <h2> Activiteiten  </h2>
            <img src="Image/imkers.jpg" alt="Imkers aan het werk">
            <p class="pb-4"> Ziet u een bijenzwerm of hommelnest in de omgeving, of wilt u graag weten wat de verschillen zijn? Lees dan verder wat u kunt doe</p>
            <h3>Recente berichten</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link text-dark "href="#">Imkers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="#">Imkers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="#">Imkers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-dark " href="#">Imkers</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div> 

        
        


        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
           <!--- Here can go another block of code if needed --> 
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Image/imker2013.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Image/imkers2014.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Image/imkerswerken.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
