<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="sproducts.css">
  <Title>Saree</Title>
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


    /* --------------------------------------------------------------------------------------------------------------- */

    h4 .off {
      color: red;
      font-weight: bold;
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
  </style>

</head>

<body>

  <div class="container">
    <div class="navbar">

      <div class="logo">

        <a  href="Project.php"><img src="images/LOGO-BACKGROUND.png" alt="" width="60px"></a>

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



    <!-- MAIN (Center website) -->
    <div class="main">



      <h1>Indian Saree</h1>
      <hr>
      <!------ featured categories------->
      <!-- <div class="categories">
        <div class="small-conatiner">
          <div class="row">
            <div class="col-3">
              <div class="content">
                <a  href="prokurta.php"><img src="images/cat-kurta3.webp" alt=""></a>
              </div>
            </div>
            <div class="col-3">

              <a  href="prosaree.php"><img src="images/cat-saree2.jpg" alt=""></a>

            </div>
            <div class="col-3">
              <div class="content">
                <a  href="prokids.php"><img src="images/girl1.webp" alt=""></a>
              </div>
            </div>


          </div>

        </div> -->



      <div class="contoiner">
        <div class="raw">
          <div class="cal-2" style="position: relative;">
            <img src="images/backgroundsaree.png" width="100%" alt="">
          </div>
        </div>
      </div>






      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">Saree's</button>
        <button class="btn" onclick="filterSelection('under 2k')"> under 2k</button>
        <button class="btn" onclick="filterSelection('under 3k-8k')"> under 3k-8k</button>
        <button class="btn" onclick="filterSelection('above 8k')"> above 8k</button>
      </div>

      <!-- Portfolio Gallery Grid -->
      <div class="row">
        <div class="column above 8k">
          <div class="content">
            <a  href="prosareedetails1.php"><img src="images/mitera_magenta_banarasi_saree_1.webp" alt="Mountains" style="width:100%"></a>
            <h4>Woven Design Banarasi Saree
              <h3>&#8377 11,999 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 16,599</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(35% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 3k-8k">
          <div class="content">
            <a  href="prosareedetails2.php"><img src="images/kalini_green_printed_bandhani_saree_1.webp" alt="Lights" style="width:100%"></a>
            <h4>Pure Chiffon Saree
              <h3>&#8377 5,999 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 10,659</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(49% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <a  href="prosareedetails4.php"><img src="images/green_ethnic_chanderi_saree_2.webp" alt="Car" style="width:100%"></a>
            <h4>Enchanting Green Brasso Saree
              <h3>&#8377 10,999 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 18,249</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(71% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_vastranand_ruffled_ready_saree.webp" alt="Nature" style="width:100%">
            <h4>Vastranand ruffled Saree
              <h3>&#8377 925 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 3,229</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(73% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 3k-8k">
          <div class="content">
            <a  href="prosareedetails3.php"><img src="images/anouk_printed_saree_2.webp" alt="Car" style="width:100%"></a>
            <h4>Anouk Printed Saree
              <h3>&#8377 1,519 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 3,799</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(73% OFF)</p>
            </h4>
          </div>
        </div>

        <div class="column under 2k">
          <div class="content">
            <img src="images/01_vastranand_woven_design_saree.webp" alt="Car" style="width:100%">
            <h4>Vastranand Woven desgin saree
              <h3>&#8377 454 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 1,299</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(65% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 3k-8k">
          <div class="content">
            <img src="images/01_unnati_silks_batik_kota_saree.webp" alt="Car" style="width:100%">
            <h4>Unnati Silks batik saree
              <h3>&#8377 2,449 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 4,898</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(50% OFF) only few left</p>
            </h4>
          </div>
        </div>


        <div class="column under 3k-8k">
          <div class="content">
            <img src="images/01_unnati_silks_chettinad_saree.webp" alt="Car" style="width:100%">
            <h4>Unnati Silks chettinad saree
              <h3>&#8377 2,949 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 5,898</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(50% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_pothys_jute_silk_saree.webp" alt="Car" style="width:100%">
            <h4>Pothys jute silk saree
              <h3>&#8377 1,472 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 1,840</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(20% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k-8k">
          <div class="content">
            <img src="images/01_pothys_floral_printed_jute_silk_saree.webp" alt="Car" style="width:100%">
            <h4>Pothys floral silk saree
              <h3>&#8377 2,576 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 3,220</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(20% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_mimosa_woven_kanjeevaram_saree.webp" alt="Car" style="width:100%">
            <h4>Mimosa Woven Kanjeevaram
              <h3>&#8377 1,328 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 3,497</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(62% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_mimosa_kanjeevaram_saree.webp" alt="Car" style="width:100%">
            <h4>Mimosa Kanjeevaram saree
              <h3>&#8377 1,921 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 6,199</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(69% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_KLM_fashion_mall_floral_brasso_saree.webp" alt="Car" style="width:100%">
            <h4>KLM fashion floral saree
              <h3>&#8377 960 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,400</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(60% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/01_KLM_fashion_mall_embroidered_saree.webp" alt="Car" style="width:100%">
            <h4>KLM fashion embroidered saree
              <h3>&#8377 945 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,100</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(55% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/cat-saree.jpg" alt="Car" style="width:100%">
            <h4>KLM fashion embroidered saree
              <h3>&#8377 2,000 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,500</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(20% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/cat-saree11.jpg" alt="Car" style="width:100%">
            <h4>Maroon & Green Pure Silk Kanjeevaram Saree
              <h3>&#8377 15,749 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 22,499</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(30% OFF) </p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/cat-saree12.jpg" alt="Car" style="width:100%">
            <h4>Pink & Yellow Ethnic Pure Silk Jamdani Saree
              <h3>&#8377 12,750 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 15,000</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(15% OFF) only few left</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/saree1.jpg" alt="" style="width:100%">
            <h4> Kanjeevaram Special Sraee
              <h3>&#8377 25,832 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 32,699</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(21% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/saree10.jpg" alt="Car" style="width:100%">
            <h4>Jamdani Silk Woven Sraee
              <h3>&#8377 21,832 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 27,699</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(24% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/cat-saree13.webp" alt="Car" style="width:100%">
            <h4>Quirky Print Saree
              <h3>&#8377 599 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 1,999</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(72% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/saree14.jpg" alt="Car" style="width:100%">
            <h4>Kalini Floral Printed Saree
              <h3>&#8377 689 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,999</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(77% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 2k">
          <div class="content">
            <img src="images/saree13.jpeg" alt="Car" style="width:100%">
            <h4>Ethnic Kanjeevaram Saree
              <h3>&#8377 17,695 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 22,399</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(21% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/saree2.jpg" alt="Car" style="width:100%">
            <h4>Banarsi Design Saree
              <h3>&#8377 12,294 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 17,399</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(29% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/saree3.jpg" alt="Car" style="width:100%">
            <h4>Woven Banarsi Saree
              <h3>&#8377 28,000 &nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <s style="color: grey;">&#8377 17,399</s> -->
              </h3>
            </h4>
            <h4>
              <!-- <p class="off">(29% OFF)</p> -->
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/saree4.jpg" alt="Car" style="width:100%">
            <h4>Red Printed Saree
              <h3>&#8377 1,900 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,200</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(25% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 3k-8k">
          <div class="content">
            <img src="images/saree5.jpg" alt="Car" style="width:100%">
            <h4>Pure Silk saree
              <h3>&#8377 3,900 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 4,000</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(5% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/saree6.jpg" alt="Car" style="width:100%">
            <h4>Pink Design Saree
              <h3>&#8377 1,100 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 4,000</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(60% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/saree7.jpg" alt="Car" style="width:100%">
            <h4>flower Pattern Saree
              <h3>&#8377 900 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 3,600</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(80% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column under 2k">
          <div class="content">
            <img src="images/saree8.jpg" alt="Car" style="width:100%">
            <h4>Red White Silk Saree
              <h3>&#8377 1,599 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 2,600</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(55% OFF)</p>
            </h4>
          </div>
        </div>
        <div class="column above 8k">
          <div class="content">
            <img src="images/saree9.jpg" alt="Car" style="width:100%">
            <h4>Banarsi Red Saree
              <h3>&#8377 11,000 &nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: grey;">&#8377 14,600</s>
              </h3>
            </h4>
            <h4>
              <p class="off">(33% OFF)</p>
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
              <a  href="https://en-gb.facebook.com/login/">
                <li>Facebook</li>
              </a>
              <a  href="https://twitter.com/login">Twitter</a>
              <a  href="https://www.instagram.com/accounts/login/">
                <li>Instagram</li>
              </a>
              <a  href="https://www.youtube.com/">
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
              $("#message").php(response);
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
              $("#cart-item").php(response);
            }
          });
        }
      });
    </script>






</body>

</html>