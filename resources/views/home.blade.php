<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- Vite --}}
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        
    </head>
    <body>
       
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">

            <div class="container flex justify-content-between">

              <a class="navbar-link" href="{{ route('home')}}">
                {{-- <img src="{{ url("asset/img/logo.png")}}" alt="Logo"> --}}
                <img src="asset/img/logo-white.png" alt="Logo-white" class="h-30px">
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-0 mx-lg-3">

                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Discussions</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                 
                </ul>

                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                  <div class="input-group">

                    <span class="input-group-text bg-white border-end-0"><img src="{{ url('asset/img/magnifier.png') }}" alt="Search"></span>

                    <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
                   
                  </div>
                </form>

                <ul>
                  <li class="nav-item my-auto">
                    <a href="#" class="new-link text-nowrap">Log In</a>
                  </li>
                  
                  <li class="nav-item ps-1 py-0">
                    <a href="#" class="btn btn-primary-white">Sign Up</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

          <script src="https://code.jquery.com/jquery-3.4.1.main.js"></script>
    </body>
</html>
