@extends('layout.master')
@section('title','Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Home.css') }}">

@endsection

@section('content')
    <!-- slider********************************************** -->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../photos/slide1 (3).jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>FIND YOUR STYLE AND YOUR SELF</h1>
              <p>Our Closet is Your Closet</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../photos/slidehome1 (1).jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>RENT THE LATEST FASHION TRENDS </h1>
              <p>Our Closet is Your Closet</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../photos/slidehome (1).jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>ELEVATE YOUR STYLE WITH FREE DELIVERY
              </h1>
              <p>Our Closet is Your Closet</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- GENDER ************************************************* -->
      <div id="backtocate"></div>
      <div></div>
      <div class="row2">
        <div id="male" class="column2">
            <div class="container2">
                <img src="../photos/catamen.jpeg" alt="Male" class="image" height="200px">
                <div class="text">Male</div>
                <div class="overlay">
                  <div class="text">Hello men To ModaRenta </div>
                </div>
              </div>
        </div>
        <div id="female" class="column2">
            <div class="container2">
                <img src="../photos/cata5-transformed-transformed.jpeg" alt="Female" class="image">
                <div class="text">Female</div>
                <div class="overlay">
                  <div class="text">Hello girl To ModaRenta</div>
                </div>
            </div>
        </div>
      </div>


      <!-- How it work *********************************************************** -->
      <div id="backtowork"></div><br> <br>
    
      <img data-aos="zoom-in" id="howImg" class="img-fluid rounded mx-auto d-block" src="../photos/how3.png" alt="">



      <!-- TRENDY PHOTO *********************************************************** -->
      <div id="trendtext">Trendy Looks of Your Summer.</div>
      <div class="row1">
        @php $i = 0 @endphp
        @foreach ($trendy as $product)
        @php $i++ @endphp 
        @if ($i == 1)
        <div class="column1 trend">
          <a href="{{route('single',$product->id)}}"> 
           <img class="s1" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
           @endif
          @if ($i ==2)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s2" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
            @endif
          @if ($i == 3)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s3" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
        </div>
          @endif
          @if ($i == 4)
          <div class="column1 trend">
          <a href="{{route('single',$product->id)}}"> 
            <img class="s3" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
            @endif
          @if ($i == 5)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s1" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
          @endif
          @if ($i == 6)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s2" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
          </div>
          @endif
          @if ($i == 7)
          <div class="column1 trend">
          <a href="{{route('single',$product->id)}}"> 
           <img class="s2" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
          @endif
          @if ($i == 8)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s3" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
            @endif
          @if ($i == 9)
          <a href="{{route('single',$product->id)}}"> 
            <img class="s1" data-aos="zoom-in" src="{{ asset('photos/' .  $product->img1) }}">
          </a>
          </div>
          @endif
        @endforeach
      </div>

    <!-- NEW ARRIVLE ********************************************************* -->
    <div id="trendtext">New Arrival</div>

    <div class="carousel-container1">
      <div class="carousel1">
        @foreach ($newArrival as $product)
         <div class="carousel-item1">
          {{-- <h2>{{ $product->color_name }}</h2> --}}
          <a href="{{ route('single', $product->id) }}">
            <img src="{{ asset('photos/' . $product->img1) }}" alt="Image 1">
          </a>
          </div>   
        @endforeach
      </div>
      <div class="prev-button"><i class="fa-solid fa-circle-chevron-left fa-2xl" style="color: #513d2f;"></i></div>
      <div class="next-button"><i class="fa-solid fa-circle-chevron-right fa-2xl" style="color: #513d2f;"></i></div>
    </div>
    
    


  <!-- ABOUT ********************************************************* -->
  <div class="about">
    <img class="img-fluid rounded float-start" src="../photos/aboutHome.PNG" alt="">
    <div> 
      <b style="font-size: 40px;">Amazing Every Day...</b> <br>
      ModaRenta is about discovering something new, loving something you never 
      expected and surprising yourself in the best possible way. It's a
      bout getting creative with what you wear every single day not just on
      special occasions.
    </div>
    <a href="{{ route("go-products", ["category_id" => 1]) }}"><button id="rentbtn">Rental Now </button></a>
  </div>


  <div class="about1">
    <img class="img-fluid rounded float-end" src="../photos/mission.jpg" alt="">
    <div> 
      <b style="font-size: 50px;">Our Mission</b> <br>
      We understand that keeping up with the latest fashion trends can be expensive,
      and not everyone wants to invest in a new wardrobe every season. That's where we
      come in. With ModaRenta, you can rent high-quality, stylish pieces at a fraction 
      of the cost, allowing you to embrace your unique style without breaking the bank.
    </div>

    <a href="{{ route('go-aboutus') }}"><button id="readbtn">Read More </button></a>
  </div>

@endsection

@section('js')
<script src="{{ asset('js/index.js') }}"></script>
<script>
  const categoriesFemale = @json($categoriesFemale);
  const categoriesMale = @json($categoriesMale);
</script>
<script>
  let categoryUrlsFemale = {
      @foreach ($categoriesFemale as $category)
          {{ $category->id }}: '{{ route("go-products", ["category_id" => $category->id]) }}',
      @endforeach
  };
  let categoryUrlsMale = {
      @foreach ($categoriesMale as $category)
          {{ $category->id }}: '{{ route("go-products", ["category_id" => $category->id]) }}',
      @endforeach
  };
</script>


@endsection

