@extends('layout.master')
@section('title','About us')
@section('css')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('content')

    <!-- slider********************************************** -->
    <div id="carouselExampleAutoplaying2" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../photos/about7.jpg" class="d-block w-100" alt="..." height="520px">
        </div>
        <div class="carousel-item">
          <img src="../photos/about8.jpg" class="d-block w-100" alt="..." height="520px">
        </div>        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>





    <!-- crumb--------**************************************** -->
    <nav id="crumb" style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </nav>



  <!-- Our aspirations ************************************************* -->
    <p class="Aspirations">Our Aspirations</p>

    <div class="about">
      <img class="img-fluid rounded float-end" src="../photos/about.png" alt="">
      <div> 
        <b style="font-size: 40px;">Welcome to ModaRenta!</b> <br>
        At ModaRenta, we believe that fashion should be fun, affordable, and 
        accessible to everyone. Our mission is to revolutionize the way you shop 
        for clothes by offering a convenient and budget-friendly rental experience.
        We understand that keeping up with the latest fashion trends can be expensive, 
        and not everyone wants to invest in a new wardrobe every season. That's where 
        we come in. With ModaRenta, you can rent high-quality, stylish pieces at a 
        fraction of the cost, allowing you to embrace your unique style without breaking 
        the bank.
      </div>
      <a href=""><button id="rentbtn">Rental Now </button></a>
    </div>




    <!-- Why Choose ModaRenta? -->
    <p class="Aspirations">Why Choose ModaRenta?</p>

<div id="allcard">
    <div  class="row row-cols-1 row-cols-md-4 g-4 aboutrow">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
              <h5 class="card-title">
                Variety and Convenience
              </h5>
              <p class="card-text">
                Find the perfect outfit from our diverse selection
              </p>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card h-100">
          <div class="card-body">
              <h5 class="card-title">
                Affordable Fashion
              </h5>
              <p class="card-text">
                Access high-quality, stylish garments at a fraction of the cost.              
              </p>
          </div>
        </div>
      </div>



      <div class="col">
        <div class="card h-100">
          <div class="card-body">
              <h5 class="card-title">
                No Commitment
              </h5>
              <p class="card-text">
                Experiment with different styles without long-term commitments.              
              </p>
          </div>
        </div>
      </div>



      <div class="col">
        <div class="card h-100">
          <div class="card-body">
              <h5 class="card-title">
                Hassle-Free Experience
              </h5>
              <p class="card-text">
                Enjoy an easy and convenient rental process.              
              </p>
          </div>
        </div>
      </div>
    </div>

  </div>


  @endsection
  @section('js')
  <script src="{{ asset('js/aboutus.js') }}"></script>
  @endsection


