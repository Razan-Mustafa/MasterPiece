@extends('layout.master')
@section('title','Membership')
@section('css')
<link rel="stylesheet" href="{{ asset('css/membership.css') }}">
@endsection

@section('content')
<!-- slider -->
    <main>
      <img id="img1" src="../photos/mem4.jpg" class="img-fluid" alt="..." width="100%">

{{-- details --}}
<div class="membership-fireworks"></div>
<div class="membership-container">
    <h1 id="membership-heading">Unlock a World of Fashion with Our Membership</h1>
    <p class="membership-text">Are you ready to elevate your style game? Join our exclusive clothing rental club and embark on a fashion journey like never before. As a valued member, you'll enjoy a plethora of benefits that will make every day a runway:</p>
    <ul class="membership-list">
      <li>Free Delivery: Enjoy free delivery on up to 4 orders every month</li>
      <li>More Opportunity for Coupon Discounts</li>
      <li>Discounts on Most Clothes</li>
      <li>Rewards Points: Earn points for each purchase or rental, redeem 50 points for a free item</li>
      <li>Birthday Discounts: Special discounts or gifts on your birthday</li>
      <li>Exclusive Email Newsletter: Get the latest updates and exclusive offers</li>
      <li>Access to an extensive collection of the latest fashion trends</li>
      <li>Early access to new arrivals, so you're always ahead of the curve</li>
      <li>Activity Tracking: Keep track of your rental and purchase history</li>
    
    </ul>
    <p class="membership-text">Don't miss out on these incredible perks and the opportunity to unleash your inner fashionista. Your journey to a stylish world begins here.</p>
</div>

<!-- card -->
        <div class="row row-cols-1 row-cols-md-3 g-4 rowmem">
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                    <h2 id="number">25</h2><sub>JOD</sub>
                    <h2 id="number">/Month</h2>
                    <h5 class="card-title"> </h5>
                    <p class="card-text">39JOD for month <br>
                    69 JOD for 2 months
                    </p>
                    <p class="content">
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"> </i>Free delivery on 4 orders.<br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"> </i> Discounts on Most Clothes<br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"> </i> Free delivery
                    </p>
                    <a href="#" class="btn getbtn">Get Started</a></div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                    <h2 id="number">10</h2>
                    <h5 class="card-title">items per month</h5>
                    <p class="card-text">59JOD for month <br>
                    89JOD for 2 months
                    </p>
                    <p class="content">
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> 10 items at a time <br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> 2 shipment/month <br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> Free delivery
                    </p>
                    <a href="#" class="btn getbtn">Get Started</a></div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                    <h2 id="number">15</h2>
                    <h5 class="card-title">items per month</h5>
                    <p class="card-text">100JOD for month <br>
                    130JOD for 2 months
                    </p>
                    <p class="content">
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> 15 items at a time <br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> 3 shipment/month <br>
                    <i class="fa-solid fa-check fa-lg" style="color: #513d2f;"></i> Free delivery
                    </p>
                    <a href="#"  class="btn getbtn">Get Started</a>
                </div>
              </div>
            </div>
          </div>
    </main>
@endsection


