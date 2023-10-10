<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@400;700&family=EB+Garamond&family=Lobster&family=Pacifico&family=Playfair&family=Roboto+Slab:wght@100;400&display=swap" rel="stylesheet">

    
    <!-- Include AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    {{-- cdn sweet alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('css') 
</head>
<body>
<header class="sticky-top">
    <div id="head">
        <div class="col col-md-4"></div>
        <div class="col col-md-4">
          <a href="{{ route('home') }}">            
            <img class="fluid-img" src="{{asset('../photos/logo1.png')}}" alt="logo">
          </a>
        </div>

        <div class="col col-md-4" id="icon">




        @if (Route::has('login'))
        @auth
        <a style="font-weight:bold;" id="sign" href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        <a href="{{ url('/profile') }}"><i class="fa-solid fa-circle-user fa-2xl" style="color: #513d2f;"></i></a>

        @else
        <a style="font-weight:bold;" id="sign" href="{{route('login')}}">Login /</a>

            @if (Route::has('register'))
            <a style="font-weight:bold;" id="sign" href="{{route('register')}}">Signup</a>
            @endif
        @endauth
@endif


            <a href="{{route('go-cart')}}"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #513d2f;"> </i></a>
            <a href="wishlist.php"><i class="fa-solid fa-heart fa-2xl" style="color: #513d2f;"></i></a>
        </div>
    </div>


    <nav id="nav" class="navbar navbar-expand-xl bg-body-tertiary sticky">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('go-membership')}}">Membership</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}#backtocate">Catagories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}#backtowork">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('go-contact')}}">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('go-aboutus')}}">About us</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('go-contact')}}">Accessory shop</a>
              </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button id="serbtn" class="btn" type="submit"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #fffdf2;"></i></button>
            </form>
          </div>
        </div>
      </nav>
</header>
