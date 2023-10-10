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
<div id="contentO">

  <p>My Order</p>
  <!-- start -->
<div id="order">
    <div id="divimg">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
    </div>
    <div id="ViewO">
        <button>View Order</button>
    </div>

    <table id="tableOrder">
        <tr>
            <th>Order Number</th>
            <th>Number of Items</th>
            <th>Shipped Date</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>494165</td>
            <td>3</td>
            <td>12/12/2020</td>
            <td>500$</td>
            <td>Delivered</td>

        </tr>
    </table>
</div>
<!-- end -->

  <!-- start -->
  <div id="order">
      <div id="divimg">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
      </div>
      <div id="ViewO">
          <button>View Order</button>
      </div>
  
      <table id="tableOrder">
          <tr>
              <th>Order Number</th>
              <th>Number of Items</th>
              <th>Shipped Date</th>
              <th>Total</th>
              <th>Status</th>
          </tr>
          <tr>
              <td>494165</td>
              <td>3</td>
              <td>12/12/2020</td>
              <td>500$</td>
              <td>Delivered</td>
  
          </tr>
      </table>
  </div>
  <!-- end -->

    <!-- start -->
<div id="order">
    <div id="divimg">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
        <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
    </div>
    <div id="ViewO">
        <button>View Order</button>
    </div>

    <table id="tableOrder">
        <tr>
            <th>Order Number</th>
            <th>Number of Items</th>
            <th>Shipped Date</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>494165</td>
            <td>3</td>
            <td>12/12/2020</td>
            <td>500$</td>
            <td>Delivered</td>

        </tr>
    </table>
</div>
<!-- end -->

  <!-- start -->
  
  <div id="order">
      <div id="divimg">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
          <img src="../photos/pro1.PNG" alt="" height="150px" width="100px">
      </div>
      <div id="ViewO">
          <button>View Order</button>
      </div>
  
      <table id="tableOrder">
          <tr>
              <th>Order Number</th>
              <th>Number of Items</th>
              <th>Shipped Date</th>
              <th>Total</th>
              <th>Status</th>
          </tr>
          <tr>
              <td>494165</td>
              <td>3</td>
              <td>12/12/2020</td>
              <td>500$</td>
              <td>Delivered</td>
  
          </tr>
      </table>
  </div>
  <!-- end -->
</div>


<!-- end content ************************************************************ -->









    
    <script src="../JS/aboutus.js"></script>
    <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
     <!-- <script src="../JS/navbar.js"></script> -->
</body>
<footer>
<?php //require "footer.php" ?>
</footer>
</html>