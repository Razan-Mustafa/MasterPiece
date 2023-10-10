<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@400;700&family=EB+Garamond&family=Lobster&family=Pacifico&family=Playfair&family=Roboto+Slab:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>
    <!-- HEADER NAV******************************************************* -->
    <?php require "navbar.php" ?>
    

<!-- Side navigation********************************************************* -->
<div class="sidenav">
    
    <div id="backcontainer">
        <div id="accountphoto">
            <img src="../photos/b2.PNG" alt="" width="250">
        </div>
        <h2 id="username">User name</h2>

        <div id="links">
            <a href="account.php"><h4>Account Information</h4></a> <br>
            <!-- <a href=""><h4>Address Book</h4></a><br> -->
            <a href="accountOrder.php"><h4>My Order</h4></a><br>
            <a href="wishlist.php"><h4>My Wishlist</h4></a><br>
            <!-- <a href=""><h4>My Membership</h4></a><br> -->
            <a href=""><button id="logout">Log Out</button></a><br>
        </div>
    </div>
</div>


<!-- vertical line/*********************************** -->
<!-- <p class="verline"></p>  -->




<!-- content ************************************************************ -->
<!-- form -->
<div id="maincontent">

  <form>
  <div id="content"  class="container text-center">
    <div class="row">
        <div class="col col-md-6 mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="col col-md-6 mb-3">
          <label for="exampleInputPassword1" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
    </div>

    

    <div class="row">
        <div class="col col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

  <div class="row">
    <div class="col col-md-12 mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
  </div>
</div>


<div id="flex">
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label id="check" class="form-check-label" for="exampleCheck1">Creating your account and you accepting Terms &Conditions.</label>
  </div>
  <div>
   <button id="savebtn" type="submit" class="btn">Save</button> <br>
  </div>
  </div>



</form>
</div>











    
    <script src="../JS/aboutus.js"></script>
    <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
     <!-- <script src="../JS/navbar.js"></script> -->
</body>
<!-- <footer>
<?php //require "footer.php" ?>
</footer> -->
</html>