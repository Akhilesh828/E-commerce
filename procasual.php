<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Casual's</title>
  <link rel="stylesheet" href="sproducts.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #9ee7fd;
      padding: 20px;
      font-family: Arial;
    }

    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }

    h1 {
      font-size: 50px;
      word-break: break-all;
    }

    .row {
      margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row>.column {
      padding: 20px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none;
      /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: white;
      padding: 10px;
      transition: transform 0.5s;

    }

    .content:hover {
      transform: translateY(-20px);
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: white;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #666;
      color: white;
    }






    /* ---------------------------------------------background image------------------------------------ */

    /* .contoiner{
    max-width: 1300px;
    margin: auto;
    padding-left: 0px;
    padding-right: 500px;
}
.raw{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.cal-2{
    flex-basis: 100%;
    min-width: 300px;
}
.cal-2 img{
    max-width: 200%;
    padding: 100px 0;
}
.cal-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
 */






    /* <!------ featured categories-------> */
    .row {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .categories {
      margin: 70px 0;
    }

    .col-3 {
      flex-basis: 30%;
      min-width: 250px;
      margin-bottom: 30px;
    }

    .col-3 img {
      width: 100%;
    }

    .small-conatiner {
      max-width: 1080px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
    }












    .navbar {
      display: flex;
      align-items: center;
      padding: 20px;
    }

    nav {
      flex: 1;
      text-align: right;
    }

    nav ul {
      display: inline-block;
      list-style-type: none;
    }

    nav ul li {
      display: inline-block;
      margin-right: 20px;
    }

    a {
      text-decoration: none;
      color: #555;
    }

    .container {
      max-width: 1300px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
    }

    .row {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .rating .fa {
      color: #fd0202;
    }


    /* -----------------media query for menu---------------- */

    @media only screen and (max-width: 800px) {

      nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        background: rgb(21, 255, 0);
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
      }

      nav ul li a {
        color: #fd02fd;
      }

      .menu-icon {
        display: block;
        cursor: pointer;
      }
    }


    /* ---------------media query for less than 600 screen size------------- */

    @media only screen and (max-width: 600px) {
      .row {
        text-align: center;
      }

      .col-2,
      .col-3,
      .col-4 {
        flex-basis: 100%;
      }

      .single-product .row {
        text-align: left;
      }

      .single-product .col-2 {
        padding: 20px 0;
      }

      .single-product h1 {
        font-size: 26px;
        line-height: 32px;
      }

      .cart-info p {
        display: none;
      }
    }










    /* ---------------------------------------footer------------------------------------------------- */


    p {
      color: #555;
    }

    .roller {
      max-width: 1300px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
    }

    .raaw {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }


    .col-2 {
      flex-basis: 50%;
      min-width: 300px;
    }

    .col-2 img {
      max-width: 100%;
      padding: 50px 0;
    }

    .col-3 {
      flex-basis: 30%;
      min-width: 250px;
      margin-bottom: 30px;
    }

    .col-4 {
      flex-basis: 25%;
      padding: 10px;
      min-width: 200px;
      margin-bottom: 50px;
      transition: transform 0.5s;
    }

    .footer {
      background: #000;
      color: #8a8a8a;
      font-size: 14px;
      padding: 60px 0 20px;
    }

    .footer p {
      color: #8a8a8a;
    }

    .footer h3 {
      color: #fff;
      margin-bottom: 20px;
    }

    .footer-col-1,
    .footer-col-2,
    .footer-col-3,
    .footer-col-4 {
      min-width: 250px;
      margin-bottom: 20px;
    }

    .footer-col-1 {
      flex-basis: 30%;
    }

    .footer-col-2 {
      flex: 1;
      text-align: center;
    }

    .footer-col-2 img {
      width: 180px;
      margin-bottom: 20px;
    }

    .footer-col-3,
    .footer-col-4 {
      flex-basis: 12%;
      text-align: center;
    }

    ul {
      list-style-type: none;
    }

    .app-logo {
      margin-top: 20px;
    }

    .app-logo img {
      width: 140px;
    }

    .footer hr {
      border: none;
      background: #b5b5b5;
      height: 1px;
      margin: 20px 0;
    }

    .copyright {
      text-align: center;
    }

    .menu-icon {
      width: 28px;
      margin-left: 20px;
    }

    @media only screen and (max-width: 800px) {

      nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        background: rgb(6, 229, 245);
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
      }

      nav ul li a {
        color: #6202fd;
      }

      .menu-icon {
        display: block;
        cursor: pointer;
      }
    }

    @media only screen and (min-width: 800px) {
      .menu-icon {
        display: none;
      }

    }


    /* --------------------------------------------------------------------------------------------------------------- */
  </style>
</head>

<body>


  <div class="container">
    <div class="navbar">

      <div class="logo">

        <a href="Project.php"><img src="images/LOGO-BACKGROUND.png" alt="" width="60px"></a>

      </div>

      <nav class="navbara ">

        <ul id="menuitems">

          <li><a class="it" href="Project.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a class="it" href="products.php"> <i class="fas fa-shopping-cart"></i> Products</a></li>
          <!-- <li><a class="it" href=""> <i class="fas fa-info-circle"></i> About</a></li> -->
          <li><a class="it" href="contact.php"> <i class="far fa-address-book"></i> Contact</a></li>
          <li><a class="it" href="homeaccount.php"> <i class="fas fa-user"></i> Account</a></li>

          <li class="nav-item">
            <div class="shake">

              <a class="nav-link it" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>


            </div>
          </li>
        </ul>
      </nav>
      <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>


  </div>

  <!-- MAIN (Center website) -->
  <div class="main">



    <h1>Casual Men's Wear</h1>
    <hr>

    <!------ featured categories------->
    <!-- <div class="categories">
      <div class="small-conatiner">
        <div class="row">
          <div class="col-3">

            <img src="images/cat-tshirt.webp" alt="">

          </div>
          <div class="col-3">
            <div class="content">
              <a href="progtshirt.php"><img src="images/gtshirt11.webp" alt=""></a>
            </div>
          </div>
          <div class="col-3">
            <div class="content">
              <a href="prockids.php"><img src="images/girl1.webp" alt=""></a>
            </div>
          </div>


        </div>

      </div>

    </div> -->
















    <!-- ------------------------------------------------slide----------------------------------------------- -->
    <!--             
<br>
<br>

<div class="slideshow-contoiner">

    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="images/i1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="images/i2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="images/i3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="images/i4.jpg" style="width:100%">
        <div class="text">Caption four</div>
      </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
    </div>
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

 -->







    <!-- --------------------------------------------------------------------------------------- -->





    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')">Price Range</button>
      <button class="btn" onclick="filterSelection('under 1k')"> under 1k</button>
      <button class="btn" onclick="filterSelection('under 2k-5k')"> under 1k-5k</button>
      <button class="btn" onclick="filterSelection('above 5k')"> above 5k</button>
    </div>

    <!-- Portfolio Gallery Grid -->
    <div class="row">
      <div class="column under 1k">
        <div class="content">
          <a href=""><img src="images/tshirtA1.webp" alt="Mountains" style="width:100%"></a>
          <h4>Skavij
            <h3>&#8377 789 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 1,500</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(67% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <a href=""><img src="images/tshirtb1.webp" alt="Lights" style="width:100%"></a>
          <h4>Carlo
            <h3>&#8377 2,564 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 3,500</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(31% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 1k">
        <div class="content">
          <a href=""><img src="images/tshirtc1.webp" alt="Car" style="width:100%"></a>
          <h4>Forest club
            <h3>&#8377 350 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 579</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(40% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 1k">
        <div class="content">
          <a href=""><img src="images/tshirt1.webp" alt="Car" style="width:100%"></a>
          <h4>Alan Jines
            <h3>&#8377 508 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 1,299</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(61% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <a href=""><img src="images/tshirt2.webp" alt="Car" style="width:100%"></a>
          <h4>blends Casual
            <h3>&#8377 1,399 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 2,799</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(50% OFF)</p>
          </h4>
        </div>
      </div>

      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt3.webp" alt="Car" style="width:100%">
          <h4>Arrow Sports
            <h3>&#8377 1,256 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 2,499</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(50% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt4.webp" alt="Car" style="width:100%">
          <h4>V-Dot
            <h3>&#8377 1,432 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 2,199</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(35% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <a href=""><img src="images/tshirt5.webp" alt="Car" style="width:100%"></a>
          <h4>Allen Solly
            <h3>&#8377 1,369 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 1,499</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(10% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt6.webp" alt="Car" style="width:100%">
          <h4>Bewakoof
            <h3>&#8377 1,269 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 2,299</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(44% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt7.webp" alt="Car" style="width:100%">
          <h4>Park Avenue
            <h3>&#8377 1,099 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 2,199</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(50% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt8.webp" alt="Car" style="width:100%">
          <h4>Cola Avenue
            <h3>&#8377 4,999 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 5,999</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(17% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 2k-5k">
        <div class="content">
          <img src="images/tshirt9.webp" alt="Car" style="width:100%">
          <h4>Spencer
            <h3>&#8377 1,599 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 1,400</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(50% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column under 1k">
        <div class="content">
          <img src="images/tshirt10.webp" alt="Car" style="width:100%">
          <h4>Generic
            <h3>&#8377 998 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 1,399</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(24% OFF)</p>
          </h4>
        </div>
      </div>
      <div class="column above 5k">
        <div class="content">
          <img src="images/tshirt11.webp" alt="Car" style="width:100%">
          <h4>Dpassion
            <h3>&#8377 7,949 &nbsp;&nbsp;&nbsp;&nbsp;
              <s style="color: grey;">&#8377 10,500</s>
            </h3>
          </h4>
          <h4>
            <p class="off">(37% OFF)</p>
          </h4>
        </div>
      </div>




      <!-- END GRID -->
    </div>

    <!-- END MAIN -->
  </div>

  <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>





  <!-- ---------------------- Footer ------------------------------------------------------------------------ -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download our app</h3>
          <!-- <p>downlaod app free andriod and ios mobile phone</p> -->
          <div class="app-logo">
            <img src="images/play-store.png" alt="">
            <img src="images/app-store.png" alt="">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/LOGO-BACKGROUND.png" alt="">
          <p>A fresh approach to shopping</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <a href="https://en-gb.facebook.com/login/">
              <li>Facebook</li>
            </a>
            <a href="https://twitter.com/login">Twitter</a>
            <a href="https://www.instagram.com/accounts/login/">
              <li>Instagram</li>
            </a>
            <a href="https://www.youtube.com/">
              <li>YouTube</li>
            </a>

          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright 2021 - ON-SHOP</p>
    </div>
  </div>


  <!-- ------------js for toggle menu------------------------------------------------------------------------------- -->
  <script>
    var menuitems = document.getElementById("menuitems");
    menuitems.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitems.style.maxHeight == "0px") {
        menuitems.style.maxHeight = "200px";
      } else {
        menuitems.style.maxHeight = "0px";
      }
    }
  </script>


  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Send product details in the server
      $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();

        var pqty = $form.find(".pqty").val();

        $.ajax({
          url: 'action.php',
          method: 'post',
          data: {
            pid: pid,
            pname: pname,
            pprice: pprice,
            pqty: pqty,
            pimage: pimage,
            pcode: pcode
          },
          success: function(response) {
            $("#message").html(response);
            window.scrollTo(0, 0);
            load_cart_item_number();
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>







</body>

</html>