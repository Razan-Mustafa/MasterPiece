@extends('layout.master')
@section('title','Singleitem')
@section('css')
<link rel="stylesheet" href="{{ asset('css/singleitem.css') }}">
@endsection

@section('content')
<!-- content*********************************** -->
@foreach ($products as $product)

    <div id="biggrid" class="container text-center">
      <div class="row">
        <div class="col-2 sideimg">
          <img  src="{{ asset('photos/'. $product->ItemDetail->img1) }}" alt="" onclick="myFunction(this);"  />
          <img  src="{{ asset('photos/'. $product->ItemDetail->img2) }}" alt="" onclick="myFunction(this);" />
          <img src="{{ asset('photos/'. $product->ItemDetail->img3) }}" alt="" onclick="myFunction(this);" />
        </div>
        <div class="col-4 bigimg">
          <img src="{{ asset('photos/'. $product->ItemDetail->img1) }}" id="expandedImg" alt="" width="100%" />
        </div>
        
        <div class="col-6 content1">
          <h4>
            {{ $product->ItemDetail->name }}
            <i class="fa-solid fa-share-nodes fa-lg"></i>
            <i class="fa-sharp fa-regular fa-heart fa-lg"></i>
          </h4>
          
          <!-- star -->
          <span class="fa fa-star fa-lg checked"></span>
          <span class="fa fa-star fa-lg checked"></span>
          <span class="fa fa-star fa-lg checked"></span>
          <span class="fa fa-star fa-lg"></span>
          <span class="fa fa-star fa-lg"></span>

          <p>
            {{ $product->ItemDetail->description }}
          </p>
          <!-- size -->
          <form method="POST" action="{{ route('addto_cart', ['id' => $product->item_id]) }}">
            @csrf
            <input type="hidden" name="name" value="{{ $product->ItemDetail->name }} ">
            <input type="hidden" name="img" value="{{ $product->ItemDetail->img1 }} ">
            <input type="hidden" name="id" value="{{$product->item_id}}">

            <div id="size">
              <p>Size:</p>
              @foreach ($sizes as $size)
              <input class="size" type="radio" id="{{$size->size->name }}" value="{{$size->size->name }}" name="size" checked>
              <label class="radio-label" for="{{$size->size->name }}">{{$size->size->name }}</label>
              @endforeach
            </div>
    

          <!-- color -->
          <div id="color">
            <p>Color:</p>
            @foreach ($colors as $color)
            <input class="color" type="radio" id="color_{{$color->color->id}}" name="color" value="{{$color->color->name }}" checked>
            <label class="radio-labelcolor" for="color_{{$color->color->id}}" style="background-color: {{$color->color->name }};"></label>
           @endforeach
          </div>

          <!-- date -->
            <label for="date">Delivery Date</label><br />
            <input type="date" id="date" name="date"/>

            <!-- select day -->
            <label for="delivery-period">Days of Rental</label> <br />
            <select id="delivery-period" name="price">
              <option value="30"> 1 day Price (30 JOD)  </option>
              <option value="33">2 days Price (33 JOD)</option>
              <option value="35">3 days Price (35 JOD)</option>
            </select>

            <!-- rental way -->
            {{-- <label>Select Rental Way</label><br />
            <div id="way">
            <div class="way">
              <input
                type="radio"
                id="One-Time"
                name="delivery-way"
                value="One-Time-Rental"
              />
              <label class="label" for="One-Time"
                > <b>One-Time Rental</b> <br />Reserve an item for: <br> 1,2 or 3 days
                </label
              >
            </div>
            <div class="way">
              <input
                type="radio"
                id="Memberships"
                name="delivery-way"
                value="Memberships"
              />
              <label class="label" for="Memberships"><b>Memberships</b> <br>  5 or 10 items at a time
                <br>
                <b>Try Now</b></label>
            </div>
            </div> --}}

            <button id="cartbtn" type="submit">Add To Cart</button>
          </form>
          <a href="{{route('go-cart')}}">            
            <button id="cartbtn">Go To Cart</button>
          </a>
          <?php var_dump(session('cart')); ?>


        </div>
      </div>
    </div>
    @endforeach

    <!-- Related ACCESSORY *********************************************************** -->
    <p id="access">Buy the Accessories:</p>
    <div id="divaccess">
      <div>
        <img src="../photos/access.PNG" alt="" height="50px" /><i
          class="fa-solid fa-eye"
          style="color: #513d2f"
        ></i>
      </div>
      <div>
        <img src="../photos/acc2.jpeg" alt="" /><i
          class="fa-solid fa-eye"
          style="color: #513d2f"
        ></i>
      </div>
      <div>
        <img src="../photos/acc3.jpeg" alt="" /><i
          class="fa-solid fa-eye"
          style="color: #513d2f"
        ></i>
      </div>
      <div>
        <img src="../photos/acc4.jpeg" alt="" /><i
          class="fa-solid fa-eye"
          style="color: #513d2f"
        ></i>
      </div>
      <div>
        <img src="../photos/acc5.jpeg" alt="" /><i
          class="fa-solid fa-eye"
          style="color: #513d2f"
        ></i>
      </div>
    </div>

    <!-- Related PHOTO *********************************************************** -->
    <p id="Related">You may also like:</p>
    <div class="carousel-container1">
      <div class="carousel1">
        <!-- start -->
        <div class="carousel-item1">
          <img src="../photos/pro1.PNG" alt="Image 1" />
        </div>
        <!-- end -->
        <div class="carousel-item1">
          <img src="../photos/pro2.PNG" alt="Image 2" />
        </div>
        <div class="carousel-item1">
          <img src="../photos/pro3.PNG" alt="Image 2" />
        </div>
        <div class="carousel-item1">
          <img src="../photos/pro6.PNG" alt="Image 1" />
        </div>
        <!-- end -->
        <div class="carousel-item1">
          <img src="../photos/pro5.PNG" alt="Image 2" />
        </div>
        <div class="carousel-item1">
          <img src="../photos/pro4.PNG" alt="Image 2" />
        </div>
        <div class="carousel-item1">
          <img src="../photos/pro1.PNG" alt="Image 1" />
        </div>
        <!-- end -->
        <div class="carousel-item1">
          <img src="../photos/pro2.PNG" alt="Image 2" />
        </div>
        <div class="carousel-item1">
          <img src="../photos/pro3.PNG" alt="Image 2" />
        </div>
        
        
      </div>
      <div class="prev-button">
        <i
          class="fa-solid fa-circle-chevron-left fa-2xl"
          style="color: #513d2f"
        ></i>
      </div>
      <div class="next-button">
        <i
          class="fa-solid fa-circle-chevron-right fa-2xl"
          style="color: #513d2f"
        ></i>
      </div>
    </div>

    <!-- rating**********************************************************************-->
    <div id="Review">
      <p>Reviews</p>
      <div id="avgR">
        <!-- <p>Average Rating</p> -->
      <span class="heading num">4.0</span>
      <span class="fa fa-star fa-xl checked"></span>
      <span class="fa fa-star fa-xl checked"></span>
      <span class="fa fa-star fa-xl checked"></span>
      <span class="fa fa-star fa-xl checked"></span>
      <span class="fa fa-star fa-xl"></span>
      </div>
      <p id="numP">based on 254 reviews.</p>
      

      <div id="comment">
        <!-- start -->
        <div>
          <img src="../photos/b2.PNG" alt="" width="100px" />
          <div id="name">
            <p>Razan Mustafa</p>
            <div>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm"></span>
            </div>
          </div>
        </div>
        <div id="comment_content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe at
          reiciendis veniam a, eum atque asperiores id sed quia dicta laborum
          aliquam nobis. Officia et qui totam, quo nesciunt nobis!
        </div>
<br>
        <!-- end one comment -->
        <div>
          <img src="../photos/b2.PNG" alt="" width="100px" />
          <div id="name">
            <p>Razan Mustafa</p>
            <div>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm"></span>
            </div>
          </div>
        </div>
        <div id="comment_content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe at
          reiciendis veniam a, eum atque asperiores id sed quia dicta laborum
          aliquam nobis. Officia et qui totam, quo nesciunt nobis!
        </div>
<br>

        <div>
          <img src="../photos/b2.PNG" alt="" width="100px" />
          <div id="name">
            <p>Razan Mustafa</p>
            <div>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm"></span>
            </div>
          </div>
        </div>
        <div id="comment_content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe at
          reiciendis veniam a, eum atque asperiores id sed quia dicta laborum
          aliquam nobis. Officia et qui totam, quo nesciunt nobis!
        </div>
<br>

        <div>
          <img src="../photos/b2.PNG" alt="" width="100px" />
          <div id="name">
            <p>Razan Mustafa</p>
            <div>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm"></span>
            </div>
          </div>
        </div>
        <div id="comment_content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe at
          reiciendis veniam a, eum atque asperiores id sed quia dicta laborum
          aliquam nobis. Officia et qui totam, quo nesciunt nobis!
        </div>
<br>

        <div>
          <img src="../photos/b2.PNG" alt="" width="100px" />
          <div id="name">
            <p>Razan Mustafa</p>
            <div>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm checked"></span>
              <span class="fa fa-star fa-sm"></span>
            </div>
          </div>
        </div>
        <div id="comment_content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe at
          reiciendis veniam a, eum atque asperiores id sed quia dicta laborum
          aliquam nobis. Officia et qui totam, quo nesciunt nobis!
        </div>
        <br>
      </div>

      <div id="addreview">
        <p>Add Review</p>
        <form action="">
          <div>
            <span class="fa fa-star fa-lg "></span>
            <span class="fa fa-star fa-lg "></span>
            <span class="fa fa-star fa-lg "></span>
            <span class="fa fa-star fa-lg "></span>
            <span class="fa fa-star fa-lg"></span>
          </div>

          <textarea name="" id="" cols="100%" rows="5" placeholder="Enter Your Comment"></textarea>
          <div id="commentbtn">
            <button  type="submit">Comment</button>
          </div>


        </form>
      </div>
    </div>


    @endsection
    @section('js')
    <script src="{{ asset('js/singleitem.js') }}"></script>
    @endsection



{{-- <script>
  AOS.init();
</script>
<script>
  AOS.init({
    duration: 500, // Animation duration
    easing: 'ease-in-out', // Animation timing function
    // once: true,
    anchorPlacement: 'top-bottom' // Anchor placement (top-bottom, center-bottom, center-center, etc.)
  });
</script> --}}

