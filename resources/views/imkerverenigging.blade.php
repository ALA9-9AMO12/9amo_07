<!DOCTYPE html>
<html lang="en">
<head>
    <title>Imkerwebsite - Imkervereniging</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<style>
    .link{ color:black;
        text-decoration:none;}



</style>

<body>


<nav class="navbar navbar-expand-sm bg-dark    ">
    <a class="navbar-brand" href="#">
        <img src="Image/bee.png" alt="Logo" style="width:40px;">
    </a>
    <button class="navbar-toggler text-warning bg-warning" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav bg-dark">
            <li class="nav-item bg-dark">
                <a class="nav-link  text-warning" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning "href="#">Berichten</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-warning" href="#">Archief</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0   text-right  ">
            <input class="form-control mr-sm-2 " type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-right" type="submit">Search</button>
        </form>
    </div>
</nav>




<div class="jumbotron p-4 p-md-5 text-dark rounded bg-warning col-md-12 text-left d-flex m-auto ">
    <div class="col-md-6 px-0 text-center m-auto">
        <h1 class="display-3 font-robot text-center">Over ons</h1>
        <p class="lead my-3 font-weight-bold text-center ">Hieronder vind je alle benodigde informatie over de imkervereniging</p>

    </div>
</div>


<div >

    <div class="row mb-2 m-auto pt-4 ">
        <div class="col-md-6 m-auto     ">
            <div class="row no-gutters  border border-dark  bg-dark rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-warning">Info</strong>
                    <h3 class="mb-0 text-warning">Lidmaatschap</h3>
                    <div class="mb-1 text-warning"> </div>
                    <p class="card-text mb-auto text-warning">   De imkervereniging-Oegstgeest is aangesloten bij de landelijke Nederlandse Bijenhoudersvereniging. Met een lidmaatschap van de NBV bent u automatisch lid van één van de regio afdelingen. De NBV biedt u:
                        <br> <br>
                        Belangenbehartiging van de imkerij in Nederland
                        Uitvoerig bijenteeltonderwijs programma <br> <br>
                        Zes keer per jaar ontvangst van het magazine BIJENhouden <br> <br>
                        Maandelijks het digitale Imkernieuws; <br> <br>
                        Wekelijks tips over het houden van bijen in het BijenBlog <br> <br>
                        Korting op entree voor bijeenkomsten en activiteiten met de NBV ledenpas; <br> <br>
                        Aanvullende WA-verzekering voor activiteiten die voortvloeien uit het houden van bijen; <br> <br>
                        Voorlichtingsmateriaal t.b.v presentaties <br> <br>
                        Verzekerd zijn van ondersteuning van collega imkers; <br> <br>
                        Voor al uw vragen kunt u zich wenden tot het verenigingssecretariaat in Wageningen. <br> <br>
                    </p>

                    <a href="/overextra.blade.php" class="stretched-link text-warning">Voor meer informatie klik hier</a>
                </div>
                <div class="col-auto d-none d-lg-block m-auto pr-3">

                </div>
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
