@extends('layout.master')
@section('title','Cart')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
        <div id="w">
          <header id="title">
            <h1>Shopping Cart</h1>
          </header>
          <div id="page">
            <table id="cart">
              <thead>
                <tr>
                  <th class="first">Photo</th>
                  <th class="second">Qty</th>
                  <th class="third">Name</th>
                  <th class="third">Size</th>
                  <th class="third">Color</th>
                  <th class="fourth">Line Total</th>
                  <th class="fifth">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <!-- shopping cart contents -->

                <!-- start -->
              @if (auth()->user())
              @php $total2 = 0 @endphp
                @foreach($products as $product)
                @php $total2 += $product->price * $product->quantity; @endphp                <tr class="productitm">
                  <td><img src="{{asset('photos/'.$product->img)}}" class="thumb" width="90px"></td>
                  <td>
                  <div class="quantity-counter">
                    <button class="minus"><i class="fa-solid fa-minus fa-sm" style="color: #513d2f;"></i></button>
                    <input type="text" class="quantity" value="{{$product->quantity}}">
                    <button class="plus"><i class="fa-solid fa-plus fa-sm" style="color: #513d2f;"></i></button>
                  </div>
                  </td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->color}}</td>
                  <td>{{$product->size}}</td>
                  <td>{{$product->price}} JOD</td>
                  <td>
                    {{-- <form method="post" action="{{route('cart.remove',['id'=>$product->id])}}">
                      @csrf
                      @method('delete') --}}
                      {{-- <button type="submit" class="delete-button">
                        <i class="fa-solid fa-xmark" style="color: #513d2f;"></i>
                      </button> --}}
                    {{-- </form> --}}
                    <a href="{{route ('cart.remove',['id'=>$product->id])}}">                      <i class="fa-solid fa-xmark" style="color: #513d2f;"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              @else
                <!-- end --> 
                @php $total = 0 @endphp
                @if(session('cart'))
                  @foreach(session('cart') as $id => $product)
                  @php $total += $product['price'] * $product['quantity']   @endphp
                  <tr class="productitm">
                    <td><img src="{{asset('photos/'.$product['img'])}}" class="thumb" width="90px"></td>
                    <td>
                    <div class="quantity-counter">
                      <button class="minus"><i class="fa-solid fa-minus fa-sm" style="color: #513d2f;"></i></button>
                      <input type="text" class="quantity" value=" {{$product['quantity']}} ">
                      <button class="plus"><i class="fa-solid fa-plus fa-sm" style="color: #513d2f;"></i></button>
                    </div>
                    </td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['color']}}</td>
                    <td>{{$product['size']}}</td>
                    <td>{{$product['price']}} JOD</td>
                    <td>
                      <a href="{{route ('cart.remove',['id'=>$product['product_id']])}}">                      <i class="fa-solid fa-xmark" style="color: #513d2f;"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach 
                @endif   
              @endif             
              </tbody>
            </table>
          
            <!-- price********************* -->
            @if (!auth()->user())
            <div id="divtotal" class="container col-12">
                <!-- <hr> -->
                <div class="row">                
                    <div class="col-10"><div>Subtotal</div></div>
                    <div class="col-2"><span>{{$total}} JOD</span></div>
                </div>  
                <div class="row">                
                  <div class="col-10"><div>Taxes</div></div>
                  <div class="col-2"><span>5 JOD</span></div>
                </div>   
                <div class="row">                
                  <div class="col-10"><div>Discount</div></div>
                  <div class="col-2"><span>0%</span></div>
                </div>              
                <hr>
                <div class="row">
                    <div class="col-10"><div>Total</div></div>
                    {{-- <div class="col-2"><span>{{($total*(1-.1))+ 5 }} JOD</span></div> --}}
                    <div class="col-2"><span>{{($total*(1-0))+ 5 }} JOD</span></div>
                </div>
            </div>
            @else
            <div id="divtotal" class="container col-12">
              <!-- <hr> -->
              <div class="row">                
                  <div class="col-10"><div>Subtotal</div></div>
                  <div class="col-2"><span>{{$total2}} JOD</span></div>
              </div>  
              <div class="row">                
                <div class="col-10"><div>Taxes</div></div>
                <div class="col-2"><span>5 JOD</span></div>
              </div>   
              <div class="row">                
                <div class="col-10"><div>Discount</div></div>
                <div class="col-2"><span>0%</span></div>
              </div>              
              <hr>
              <div class="row">
                  <div class="col-10"><div>Total</div></div>
                  {{-- <div class="col-2"><span>{{($total*(1-.1))+ 5 }} JOD</span></div> --}}
                  <div class="col-2"><span>{{($total2*(1-0))+ 5 }} JOD</span></div>
              </div>
          </div>
            @endif
            <!-- end price********************* -->

            <form id="Coupon" action="">
              <input type="text">
              <button>Apply Coupon</button> 
            </form>
            <!-- <div id="additems"> <i class="fa-solid fa-circle-arrow-left" style="color: #513d2f;"></i> Add Items</div> -->
            @if(auth()->user())
            <div id="checkbtn"><a href="{{route('go-checkout')}}"><button>Checkout</button></a></div>
            @else
            <div id="checkbtn"><a href="{{route('login')}}"><button>Login to Checkout</button></a></div>
            @endif
          </div>
        </div>
@endsection

@section('js')
<script src="{{ asset('js/cart.js') }}"></script>
@endsection