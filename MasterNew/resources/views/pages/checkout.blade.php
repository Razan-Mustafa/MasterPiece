<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>checkout</title>
    <link rel="stylesheet" href="../css/checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('checkout')}}" method="POST">
        @csrf 
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <!-- div 1 -->
                <p id="pdiv1">Delivery Information</p>
                <div id="div1">
                    <div class="row">
                        <label class="col" for="first_name">First Name</label>
                        <label class="col" for="last_name">Last Name</label>
                    </div>
                    <div class="row">
                        <input class="col" type="text" id="first_name" name="first_name">                        
                        <input class="col" type="text" id="last_name" name="last_name">
                    </div>
                    <div class="row">
                        <label class="col" for="city">City</label>
                        <label class="col" for="phone">Phone</label>
                    </div>
                    <div class="row">
                        <select class="col" id="city" name="city">
                            <option value="Amman">Amman</option>
                            <option value="Zarqa">Zarqa</option>
                            <option value="Irbid">Irbid</option>
                            <option value="Aqaba">Aqaba</option>
                            <option value="Madaba">Madaba</option>
                            <option value="Salt">Salt</option>
                            <option value="Jerash">Jerash</option>
                            <option value="Ma'an">Ma'an</option>
                            <option value="Mafraq">Mafraq</option>
                            <option value="Karak">Karak</option>
                            <option value="Tafilah">Tafilah</option>
                            <option value="Ramtha">Ramtha</option>                            
                        </select>                        
                        <input class="col" type="text" id="phone" name="phone">
                    </div>
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53808.19311113942!2d35.88860938992077!3d32.55252313180661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c76916dac0453%3A0x5416e113d81f7d82!2z2KXYsdio2K8!5e0!3m2!1sar!2sjo!4v1692965574249!5m2!1sar!2sjo" width="200" height="200" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                    </div>
                </div>
                <!-- div2 -->
                <p id="pdiv2">Schedule Date</p>
                <div id="div2">
                    <div class="row">
                    <label for="date">Date</label><br>
                    <input type="date" id="date" name="date"><br>
                    
                    <label for="note">Note</label><br>
                    <textarea id="note" name="note" rows="2" cols="40"></textarea><br>
                    </div>
                </div>
                <!-- div 3 -->
                <p id="pdiv3">Payment</p>
                <div id="div3">
                    <div class="row">
                        <label class="col" for="Card">Card Number</label>
                    </div>
                    <div class="row">
                        <input class="col" type="text" id="Card" name="Card">
                    </div>
                    <div class="row">
                        <label class="col" for="Expiry">Expiry Date MM/YY</label>
                        <label class="col" for="CVV">CVV</label>
                    </div>
                    <div class="row">
                        <input class="col" type="text" id="Expiry" name="Expiry">                        
                        <input class="col" type="text" id="CVV" name="CVV">
                    </div>
                </div>
            </div>

          
        <div class="col">
            <p id="pdiv4">Cart Summery</p>
            <div id="div4">
                <div id="cart" class="col-12">
                    <div class="row headt">
                        <div class="col-3 align-center"><span>Photo</span></div>
                        <div class="col-3 align-center"><span>Name</span></div>
                        <div class="col-3 align-center"><span>Qty</span></div>
                        <div class="col-3 align-right"><span>Price</span></div>
                    </div>
                    @php $total = 0 @endphp
                    @foreach($products as $product)
                    @php $total += $product['price'] * $product['quantity']   @endphp

                    <!-- start -->
                    <div class="row product">
                        <div class="col-3"><img src="{{asset('photos/'.$product->img)}}" width="70px"></div>
                        <div class="col-3">{{$product->name}}</div>
                        <div class="col-3">{{$product->quantity}}</div>
                        <div class="col-3">{{$product->price}}</div>
                    </div>
                    <!-- end -->
                    @endforeach
                </div>



                <!-- price********************* -->
                <div id="divtotal" class="col-12">
                    <hr>
                    <div class="row">                
                        <div class="col-10"><div>Subtotal</div></div>
                        <div class="col-2"><span>{{$total}} JOD</span></div>
                        <div class="col-10"><div>Taxes</div></div>
                        <div class="col-2"><span>5</span></div>
                        <div class="col-10"><div>Discount</div></div>
                        <div class="col-2 "><span>0</span></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-10"><div>Total</div></div>
                        <div class="col-2"><span>{{($total*(1-0))+ 5 }} JOD</span></div>
                    </div>
                </div>
                <!-- end price********************* -->
                <button type="submit">Back To Cart</button> <br>
                <a href="{{route('checkout')}}"><button type="submit" name="checkoutbtn">Confirm Order</button></a>

                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>


</html>
