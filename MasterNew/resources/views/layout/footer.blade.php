<footer class="">
    <div class="grid text-center">
        <div class="row">
            <div class="col col-md-12">
                <img id="logo" src="../photos/logo2.png" class="img-fluid" alt="logo">
            </div>
        </div>
        <hr id="hr">



        <div class="row">
            <div class="col col-md-1"></div>
          <div class="col col-md-2">
            <ul class="lifoot">
            <li><b>Company</b></li>
            <li>About us</li>
            <li>T&Cs</li>
            <li>How it works</li>
            </ul>
          </div>
          <div class="cpl col-md-2">
            <ul class="lifoot">
                <li><b>Get help</b></li>
                <li>Contact us</li>
                <li>FAQ</li>
                </ul>
          </div>
          
            
          <div class="col col-md-2">
                <ul class="lifoot">
                <li><b>Company</b></li>
                <li>About us</li>
                <li>T&Cs</li>
                <li>How it works</li>
                </ul>
          </div>
          <div class="col col-md-2">
                <ul class="lifoot">
                <li><b>Company</b></li>
                <li>About us</li>
                <li>T&Cs</li>
                <li>How it works</li>
                </ul>
          </div>
          <div id="form" class="col col-md-2">
            <ul id="follow">
                <b>Follow us</b>
            </ul>
            <a href="">
                <i class="fa-brands fa-square-facebook fa-2xl" style="color: #fffbf2;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-pinterest fa-2xl" style="color: #fffbf2;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-twitter fa-2xl" style="color: #fffbf2;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-whatsapp fa-2xl" style="color: #fffbf2;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-instagram fa-2xl" style="color: #fffbf2;"></i>          
            </a>
            <form action="">
                <label for="email"> <b>Subscribe Now</b></label><br>
                <input id="email" type="email" placeholder="  your mail here">
            </form>
        </div>
        <div class="col col-md-1"></div>
        </div>
</div>
<div id="Copyright" class="text-center p-4">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ModaRenta.com</a>
</div>
</footer>
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('JS/navbar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <script>
        AOS.init();
      </script>
      <script>
        AOS.init({
          duration: 1000, // Animation duration
          easing: 'ease-in-out', // Animation timing function
          // once: true,
          anchorPlacement: 'top-bottom' // Anchor placement (top-bottom, center-bottom, center-center, etc.)
        });
      </script>

</body>
</html>