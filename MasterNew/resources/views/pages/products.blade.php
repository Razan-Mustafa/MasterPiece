@extends('layout.master')
@section('title','Categories')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Product.css') }}">
@endsection

@section('content')

<!-- filter *************************************************************** -->
<!-- Side navigation -->
<div class="sidenav">
    
    <div id="backcontainer">
        <div id="logofilter">
            <img src="../photos/logo2.png" alt="" width="250">
        </div>
        <h2 id="titlefilter">Filter</h2>
        <!-- start -->
        <button class="dropdown-btn">Gender
            <span class="dropicon">
                <i class="fa-solid fa-plus fa-lg" style="color: #fffbf2;"></i>
            </span>
        </button>
        <div class="dropdown-container">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </div>
        
        <!-- end -->


        <!-- start -->
        <button class="dropdown-btn">Rent Price
            <span class="dropicon">
                <i class="fa-solid fa-plus fa-lg" style="color: #fffbf2;"></i>
            </span>
        </button>
        <div class="dropdown-container">
            <label><input type="checkbox" value="1">5-20 JOD</label>
            <label><input type="checkbox" value="2">21-40 JOD</label>
            <label><input type="checkbox" value="3">41-60 JOD</label>
        </div>
        <!-- end -->

        <!-- start -->
        <button class="dropdown-btn">Color
            <span class="dropicon">
                <i class="fa-solid fa-plus fa-lg" style="color: #fffbf2;"></i>
            </span>
        </button>
        <div class="dropdown-container">
            <label><input type="checkbox" value="1">Green</label>
            <label><input type="checkbox" value="2">Pink</label>
            <label><input type="checkbox" value="3">Black</label>
        </div>
        <!-- end -->
         <!-- start -->
         <button class="dropdown-btn">Size
            <span class="dropicon">
                <i class="fa-solid fa-plus fa-lg" style="color: #fffbf2;"></i>
            </span>
        </button>
        <div class="dropdown-container">
            <label><input type="checkbox" value="1">L</label>
            <label><input type="checkbox" value="2">XL</label>
            <label><input type="checkbox" value="3">XXL</label>
        </div>
        <!-- end -->
         
    </div>
</div>



<!-- product ************************************************************* -->
<div class="main">

    <div id="bigdiv" class="row row-cols-1 row-cols-lg-4 g-4 row-cols-md-2">

        @foreach ($products as $product)
        <div class="col colcard">
            <div class="card h-100">
                <div class="contaier1">
                    <a href="singleitem.php">
                        <img src="{{ asset('photos/' . $product->img1) }}"
                             class="card-img-top" alt="product photo" height="350px">
                        <div class="overlay">
                            <a href="{{route('single',$product->id)}}"> 
                                <img src="{{ asset('photos/' . $product->img2) }}" class="card-img-top" alt="" height="350px">
                            </a>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title stytitle">
                        {{ $product->name }}
                    </h4>
                    <h6 class="card-title price">
                        Rental Price: {{ $product->price }} JOD <br>
                    </h6>
                    <i  class="fa-regular fa-heart fa-beat fa-2xl hearticon clickable-heart" style="color: #513d2f;"></i>
                </div>
                @if ($product->is_membership_eligible == 0)
                    <div class="card-footer memberno">
                        <span class="text-body-secondary">
                            Not eligible for membership perks                        
                        </span>
                    </div>
                @else
                    <div class="card-footer memberyes">
                        <span class="text-body-secondary">                            
                            Eligible for membership perks                           
                        </span>
                    </div>
                @endif
            </div>
        </div>
         @endforeach
    </div> 


    <!-- next/preivous button************************* -->
    {{-- <div class="nextbtn">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="{{ $products->links()}}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>

            <li class="page-item">
                <a class="page-link" href="{{ $products->links()}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            </ul>
         </nav>
    </div> --}}
    <div class="nextbtn">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end custom-pagination">
                <li class="page-item">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                
                <li class="page-item">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    

</div>

@endsection
@section('js')
<script src="{{ asset('js/Product.js') }}"></script>
@endsection
