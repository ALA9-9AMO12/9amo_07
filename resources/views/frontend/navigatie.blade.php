@extends('frontend.layout')

@section('navbar')
    <nav class="  navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#" ><img width="75px" src="{{ asset('https://www.freepnglogos.com/uploads/bee-png/bee-the-quilted-turtle-party-fit-for-queen-12.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Voor imkers </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursussen
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Basiscursus </a>
                        <a class="dropdown-item" href="#">Bijscholing </a>
                        <a class="dropdown-item" href="#">Cursusblog</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Nieuws archief</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artikelen  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Imkervereniging
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink ">
                        <a class="dropdown-item" href="#">Bestuur </a>
                        <a class="dropdown-item" href="#">Lidmaatschap </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        login
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Admin</a>
                        <a class="dropdown-item" href="#">Beheerders</a>
                        <a class="dropdown-item" href="#">Editor</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection
