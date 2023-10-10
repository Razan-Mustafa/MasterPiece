@extends('layout.master')
@section('title','Contact Us')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection

@section('content')

<!-- slider -->
<div id="carouselExampleAutoplaying2" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../photos/contactus3.jpg" class="d-block w-100" alt="..." height="520px">
    </div>
    <div class="carousel-item">
      <img src="../photos/contactus1.jpg" class="d-block w-100" alt="..." height="520px">
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
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>

<!--How can I contact ModaRenta?***************************************  -->

<p id="qus">How can I contact ModaRenta?</p>
<div id="contflex">
    <div class="col col-md-3"> </div>
    <div class="col col-md-3">
        <h2>
            Help Center
        </h2>
        <p>
            Tel: +962 (6) 00 000 00 <br>
            Tel: +962 (6) 00 000 00 <br>
            Email: modarenta@gmail.com
        </p>
    </div>

    <div class="col col-md-3">
        <h2>
            Social
        </h2>
        <div id="link">
            <a href="">
                <i class="fa-brands fa-square-facebook fa-2xl" style="color: #513d2f;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-pinterest fa-2xl" style="color: #513d2f;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-twitter fa-2xl" style="color: #513d2f;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-whatsapp fa-2xl" style="color: #513d2f;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-instagram fa-2xl" style="color: #513d2f;"></i>          
            </a>
        </div>
    </div>

    <div class="col col-md-3"> </div>
</div>

<p id="qus2">Do you have any questions?</p>
<p id="gettouch">Get in touch</p>


<div id="touchflex">
    <div class="col col-md-2"></div>
    <div class="col col-md-4">
        <img id="imgtouch" src="../photos/contact.png" alt="">
    </div>

    <div class="col col-md-4">
        @if (Session::has('message_sent'))
            {{-- <div class=" alert alert-success" role="alert">{{Session::get('message_sent')}}</div> --}}
        <script>
            swal({
                text:"Your Message has been sent successfully",
                button:"ok",
            });
        </script>
        
        @endif
        <form id="formtouch" method="post" action="{{ route('contact.send') }}" >
            @csrf
            <div class="mb-3">
            <input class="form-control" type="text" name="name" placeholder=" Your Name" required> <br>
            <input class="form-control" type="email" name="email" placeholder=" Your Email" required pattern="^(test@gmail|yahoo/.com)$"> <br>
            <input class="form-control" type="text" name="subject" placeholder=" Your Subject" required> <br>
            <textarea class="form-control" name="message" id="mass" placeholder=" Your Massage" required></textarea> <br>
            
        </div>
        <button id="sendbtn" class=" btn"> Send</button>

            
    </div>
    <div class="col col-md-2"></div>

</div>

@endsection
@section('js')
<script src="{{ asset('js/aboutus.js') }}"></script>
@endsection

