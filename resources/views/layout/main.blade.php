<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/nila.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/nilaLogo.png')}}">
    
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-light bg-light" id="logo">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('/image/nilaLogo.png')}}" alt="logo Nila">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <nav class="navbar navbar-expand-lg" id="navbarMenu">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">WELCOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/aboutus')}}">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/service')}}">SERVICE</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('/products')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCTS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('/products')}}">PRODUCTS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/sendemail')}}">CONTACT US</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/news')}}">NEWS</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid" id="containerContent">
      @yield('container')
    </div>
    <footer>
      <div class="float-md-left">
        <span>Copyright 2020 PT Nila Merkindo Utama . All rights reserved.</span>
      </div>
      <div class="d-flex flex-column align-items-end">
        <div><span>solution@nilamerkindo.co.id</span></div>
        <div><span>Bekasi</span></div>
        <div><span>Indonesia</span></div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>