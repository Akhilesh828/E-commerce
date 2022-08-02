<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta anme="viewport" content="width=device-width, initialscale=1.0">
    <title>On Shop | Home Page</title>
    <link rel="stylesheet" href="styles.css">

    <!-- <link rel="stylesheet" href="sautoslider.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- star rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- swiper slide -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        body {
            overflow-x: hidden;
        }

        .ab img {
            padding: 15px;
            background: purple;
        }

        .col-4 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ab img:hover {
            padding: 10px;
            background: linear-gradient(rgb(255, 0, 255), yellow);
            transition: .5s;
        }

        .ac img {
            padding: 10px;
            background: lightskyblue;
        }

        .ac img:hover {
            padding: 8px;
            /* background: linear-gradient(blue, yellow); */
            transition: .5s;
        }

        .d-container {
            display: grid;
            /* grid-template-columns: 1fr 1fr 1fr; */
            /* grid-template-columns: repeat(3, 1fr); */
            grid-template-columns: repeat(auto-fill, minmax(300px, 3fr));
            grid-template-rows: repeat(auto-fill, minmax(300px, 3fr));
            /* autofill- how much box can be fill in that one layer screen size 
            200px- every fit boc should be of 200px 
            responsive -its better than adding media querys etc  */
            grid-gap: 20px;


            /* grid-auto-rows: 100px; */
            grid-auto-rows: minmax(300px, auto);
            grid-auto-columns: minmax(300px, auto);
            background-color: rgb(252, 185, 124);

        }

        @media only screen and (max-width: 800px) {
            .d-container {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
            }

            .d-items {
                display: none;
            }

            /* .d-nes-1-container{
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
            } */
        }

        .d-items {
            background-color: aqua;
            border: 3px solid rgb(252, 185, 124);
            border-radius: 3px;
        }

        .d-items:hover {
            /* box-shadow: 0 0 10px 10px yellow; */
            transition: 0.5s;
            cursor: pointer;
        }

        #d-item-1 {
            grid-column-start: 1;
            grid-column-end: 5;

        }

        .d-nes-1-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);


        }

        .d-nested {
            border: 3px solid rgb(241, 0, 0);
            border-radius: 3px;
            padding: 10px;
            background-color: bisque;
            margin: 10px;
        }

        .d-nested:hover {
            box-shadow: 0 0 10px 10px yellow;
        }

        .gla {
            /* width: 100vw;height: 50vh; */
            /* background-color: aqua; */
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(600px, 2fr));
            grid-template-rows: repeat(auto-fill, minmax(500px, 2fr));
            /* grid-area: 50px; */
            grid-auto-rows: minmax(500px, auto);
            grid-auto-columns: minmax(600px, auto);
        }

        .gls {
            /* background-color: blanchedalmond; */
            border: 5px solid white;
            background-image: url('images/diw12.jpg');
            background-size: 740px;
            /* filter: blur(2px); */
            display: flex;
            padding: 70px;
            border-radius: 20px;
        }

        .gls h4 {
            font-size: 1.6em;
            color: aqua;
            padding-left: 20px;
        }

        .gls .blo li,
        p {
            font-size: 16px;
            color: aqua;
            /* padding-left:20px; */
            /* list-style: circle; */
            margin: 20px;
        }

        .gls .blo p {
            margin: auto;
            margin-bottom: 10px;
            width: 30%;
            animation: diw 2s ease 0s infinite alternate both;
            /* font-size: 15px; */
            text-decoration: underline;
        }

        @keyframes diw {
            0% {
                /* bottom: 0; */
                /* box-shadow: 0 0 5px rgb(4, 11, 116); */
                color: yellow;
            }

            25% {
                /* bottom: 25px; */
                color: rgb(72, 255, 0);
            }

            50% {
                color: red;
            }

            75% {
                color: rgb(0, 228, 245);
            }

            100% {
                /* bottom: 50px; */
                /* box-shadow: 0 50px 50px rgba(75, 98, 233, 0.973); */
                color: rgb(234, 0, 255);
            }
        }

        .do1 {
            display: flex;
            justify-content: center;
        }

        .gls img:hover {
            transform: scale(1.05);
            transition: 0.6s;
        }
    </style>

</head>

<body>


    <div class="header">
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

            <!-- 
            <div class="row">
                <div class="col-2">
                    <h1> Give Your Workout <br> A New Style!</h1>
                    <p>Success isn't always about greatness. it's about consistency
                        Consistent <br> hard work gain success. Greatness will come
                    </p>
                    <a href="" class="btn">Explore Now &#8594; </a>
                </div>
                <div class="col-2">
                    <img src="images/background-fashionwomen.png" alt="">

                </div>

            </div> -->

        </div>
    </div>.
    <!-- 
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/offer5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer4.jpg" alt=""></div>
            <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div> -->


    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/offer11_1.jpg" width="100%" height="50%" alt=""></div>
            <!-- <div class="swiper-slide"><img src="images/od1_1.jpg" alt=""></div> -->
            <a href="offerechoshow.php" class="swiper-slide"><img src="images/offer5.jpg" alt=""></a>
            <div class="swiper-slide"><img src="images/offer3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer4.jpg" alt=""></div>
            <!-- <div class="swiper-slide"><img src="images/od2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/od3.webp" alt=""></div>
            <div class="swiper-slide"><img src="images/offer3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer4.jpg" alt=""></div> -->

            <!-- <div class="swiper-slide"><img src="images/offer12.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer13.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer14.jpg" alt=""></div> -->
            <!-- <div class="swiper-slide"><img src="images/od9.png" alt=""></div> -->

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!------ featured categories------->
    <div class="categories">
        <div class="small-conatiner">
            <div class="row">
                <div class="col-3">
                    <img src="images/play16.jpg" alt="">

                </div>
                <div class="col-3">
                    <img src="images/cat-saree2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/kidsb1.webp" alt="">

                </div>


            </div>

        </div>

    </div>





    <!-- --------------------------------------popup offer----------------------------------------------- -->

    <!-- 
            <div class="stone">
                <div class="popup">
                    <div class="contBox">
                        <div class="close"></div>
                        <div class="imgbx">
                            <img src="images/drinks-removebg-preview.png" alt="">
                        </div>
                        <div class="cont">
                            <div>
                                <h3>Special Offer</h3>
                                <h2>40% <span>off</span></h2>
                                <br>
                                <br>

                                <p> <b>Refresh, and add a Joy in your life</b>

                                    <b>Power is in Your Hand, Feel it</b>
                                </p>
                                <a  href="offer drinks.html">Get The Deal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->






    <!-- -------------------------------Category page shortcut -------------------------------------------- -->
    <h2 class="title">Categories</h2>

    <div class="row">

        <!-- <div class="col-4">
            <div class="ab">
                <a  href="promobile.php"><img class="al " src="images/cat1.jpg" alt="Avatar" width="80%"></a>
                <h4>Mobile's</h4>
            </div>
        </div> -->
        <div class="col-4">
            <div class="ab">
                <a href="prohomeentertain.php"><img class="al " src="images/cat4.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Home Entertainments</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="prolaptop.php"><img class="al " src="images/cat3.jpg" alt="Avatar" style="width:250px" height="250px"></a>
                <h4>Laptop's</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="promobile.php"><img class="al " src="images/cat1.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Mobile'S</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="prodaily.php"><img class="al " src="images/cat2.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Daily Essentials</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="proformalmens.php"><img class="al " src="images/cat8.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Men's Formal wear</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="proformalwom.php"><img class="al" src="images/cat10.webp" alt="Avatar" style="width:250px"></a>
                <h4>Women's Formal wear</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="prokurta.php"><img class="al " src="images/cat9.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Indian Kurta Clothes</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="prosaree.php"><img class="al " src="images/cat6.jpg" alt="Avatar" style="width:250px"></a>
                <h4>Indian Saree Clothes</h4>
            </div>
        </div>

        <div class="col-4">
            <div class="ab">
                <a href="progtshirt.php"><img class="al" src="images/cat11.webp" alt="Avatar" style="width:250px"></a>
                <h4>Women's Casual</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="procasual.php"><img class="al " src="images/cat12.jpg" alt="Avatar" style="width:250px ;"></a>
                <h4>Mens' Casual</h4>
            </div>
        </div>

        <div class="col-4">
            <div class="ab">
                <a href="prockids.php"><img class="al" src="images/cat15.jpg" alt="Avatar" style="width:250px"></a>
                <h4>kid's casual wear</h4>
            </div>
        </div>
        <div class="col-4">
            <div class="ab">
                <a href="prokids.php"><img class="al " src="images/cat14.jpg" alt="Avatar" style="width:250px ;"></a>
                <h4>Kid's traditional</h4>
            </div>
        </div>


    </div>
    <br>
    <br>
    <br>
    <br>


    <div class="do1"><img src="images/od1.jpg" alt=""></div>
    <div class="gla">
        <div class="gls">
            <img src="images/fri-removebg-preview.png" width="25%" alt="">
            <div class="blo">
                <p>Diwali Special</p>
                <h4>SAMSUNG 198 L Direct Cool Single Door 5 Star Refrigerator with Base Drawer </h4>
                <ul>
                    <li>- 198 L : Good for couples and small families</li>
                    <li>- Digital Inverter Compressor</li>
                    <li>- 5 Star : For Energy savings up to 55%</li>
                </ul>
            </div>
        </div>
        <div class="gls">
            <a href="offerfri.php"><img src="images/fri2-removebg-preview.png" width="110%" alt=""></a>
            <div class="blo">
                <p>Diwali Special</p>
                <h4>SAMSUNG 657 L Frost Free Side by Side Refrigerator</h4>
                <ul>
                    <li>- 657 L : Good for large families</li>
                    <li>- Digital Inverter Compressor</li>
                    <li>- Frost Free : Auto fridge defrost to stop ice-build up</li>
                </ul>
            </div>
        </div>
        <div class="gls">
            <img src="images/fil1-removebg-preview.png" width="31%" alt="">
            <div class="blo">
                <p>Diwali Special</p>
                <h4>LG WW182EP 8 L RO + UV + UF with Stainless Steel Tank</h4>
                <ul>
                    <li>- Electric purification - suitable for areas with water shortage</li>
                    <li>- 8 L : More the capacity, more the users can be served with drinking water</li>
                    <li>- Uses many filters to remove salts & microbes in multiple stages</li>
                </ul>
            </div>
        </div>
        <div class="gls">
            <img src="images/wash1-removebg-preview.png" width="40%" alt="">
            <div class="blo">
                <p>Diwali Special</p>
                <h4>IFB 6.5 kg 5 Star 3D Wash Technology </h4>
                <ul>
                    <li>- Fully Automatic Front Load Washing Machines have Great Wash Quality with very less running cost</li>
                    <li>- 1000 rpm : Higher the spin speed, lower the drying time</li>
                    <li>- Number of wash programs - 14</li>
                </ul>
            </div>
        </div>

    </div>




    <br>
    <br>
    <br>
    <h2 class="title">Latest Mobiles</h2>

    <div class="bigbox ">
        <div class="smallbox ">
            <img src="images/ar10.jpg" width="36%" height="250px" alt="">
            <h2>Armor 10 5G</h2>
            <p style="color:white;">FHD+ IPS Display 8Gb + 128Gb 64MP AI Quad Camera: Large 5800mAh Battery Waterproof IP68</p>

        </div>
        <div class="smallbox">
            <a href="promobiledetails2.php"><img src="images/mb8.webp" width="34%" alt=""></a>
            <h2>Galaxy S21 Ultra</h2>
            <p style="color:white;">108+12+12MP triple rear camera |
                10MP front camera 16.95 centimeters
            </p>

        </div>
        <div class="smallbox">
            <img src="images/rog.jpeg" width="33%" alt="">
            <h2>Asus ROG Phone 5</h2>
            <p style="color:white; font-weight:500">
                Material Plastic
                Special Feature Anti-Shatter,
                Item Display Dimensions 7 x 16.5 Centimeters</p>

        </div>
    </div>



    <div class="bigboxa">
        <div class="smallboxa" style="background-color: rgb(244, 196, 48);">
            <a href="propatanjali.php">
                <img src="images/LOGO-Patanjali.png" width="36%" alt="">
                <h2>PATANJALI </h2>
                <p style="color : white; font-size: 30px">
                    Cerals, Snacks, Breakfast, Spices etc <br>All Patanjali Products at one place </p>
            </a>


        </div>

    </div>


















    <div class="d-container">
        <!-- <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Jupiter21/phase1/pc/SBC_PC.jpg" alt=""> -->
        <div class="d-items d-nes-1-container" id="d-item-1">
            <div class="d-nested "><a href="offerbulb.php"><img src="images/di6.jpg" width="100%" alt=""></a></div>
            <div class="d-nested"><img src="images/offergames.jpg" width="100%" height="100%" alt=""></div>
            <!-- <div class="d-nested">dabbe mei dabba 3</div> -->
        </div>
        <!-- <div class="d-items" id="d-item-2">
            <img src="images/Di1.jpg" width="100%" alt="">
        </div>
        <div class="d-items" id="d-item-3"><img src="images/Di2.jpg" width="100%" alt=""></div> -->
        <!-- <div class="d-items"><img src="images/Di3.jpg" width="100%" alt=""></div>
        <div class="d-items"><img src="images/di4.jpg" width="100%" alt=""></div> -->
        <div class="d-items d-nes-1-container" id="d-item-1">
            <div class="d-nested "><a href="offerwashing.php"><img src="images/offerwashing.jpg" width="100%" height="100%" alt=""></a></div>
            <div class="d-nested"><img src="images/key.gif" width="100%" height="100%" alt=""></div>
            <!-- <div class="d-nested">dabbe mei dabba 3</div> -->
        </div>
    </div>




    <!-- ----------------------------------------------------------------------------- -->




    <!-------------------------------------- featured products---- &#8377   --->
    <div class="clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);small-container">
        <h2 class="title">Salvar's</h2>
        <div class="row">
        </div>



        <div class="row slideo" style="width: 100%;">

            <div class="col-4 ac">
                <a href="progedetails5.php"><img src="images/ge1.webp" alt=""></a>
                <h4>Libas</h4>
                <h4>&#8377 1,900 <s>&#8377 2,500</s></h4>
            </div>

            <div class="col-4 ac">
                <a href="progfdetails6.php"><img src="images/gf1.webp" alt=""></a>
                <h4>Indo Era</h4>
                <h4>&#8377 2,222 <s>&#8377 2,890</s></h4>

            </div>

            <div class="col-4 ac">
                <a href="proggdetails7.php"><img src="images/gg1.webp" alt=""></a>
                <h4>Anubhutee</h4>
                <h4>&#8377 1,250 <s>&#8377 1,750</s></h4>

            </div>

            <div class="col-4 ac">
                <a href="proghdetails8.php"><img src="images/gh1.webp" alt=""></a>
                <h4>Prakhya</h4>
                <h4>&#8377 1,550 <s>&#8377 1,750</s></h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g1.jpg" alt="">
                <h4>Anouk</h4>
                <h4>&#8377 1449 <s>&#8377 2899</s> Discount50% OFF
                </h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g2.webp" alt="">
                <h4>PANIT</h4>
                <h4>&#8377 1600 <s>&#8377 </s>(63% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g3.webp" alt="">
                <h4>Vbuyz</h4>
                <h4>&#8377 1700 <s>&#8377 5020 </s>(67% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g4.webp" alt="">
                <h4>GERUA</h4>
                <h4>&#8377 877 <s>&#8377 1999</s> (56% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g5.webp" alt="">
                <h4>Women Pink</h4>
                <h4>&#8377 899 <s>&#8377 1799</s> (50% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g6.webp" alt="">
                <h4>Vishudh</h4>
                <h4>&#8377 428 <s>&#8377 1299</s>(67% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g7.webp" alt="">
                <h4>Ishin</h4>
                <h4>&#8377 1605 <s>&#8377 3649</s>(56% 0FF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/g8.jpg" alt="">
                <h4>Women Sea</h4>
                <h4>&#8377 900 <s>&#8377 1600</s></h4>

            </div>


        </div>



        <!-- --------------------------------------------------------------------------------------------------------------------- -->

        <h2 class="title">Winter Clothe's</h2>
        <div class="row slideo" style="width: 100%;">

            <div class="col-4 ac">
                <a href=""><img src="images/b1.jpg" alt=""></a>
                <h4>Roadster</h4>
                <h4>&#8377 1,044 <s>&#8377 1,899</s>(45% OFF)</h4>
            </div>

            <div class="col-4 ac">
                <a href=""><img src="images/b2.jpg" alt=""></a>
                <h4>Striped Sweater</h4>
                <h4>&#8377 989 <s>&#8377 1,799</s>(45% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <a href=""><img src="images/b3.webp" alt=""></a>
                <h4>Gant</h4>
                <h4>&#8377 5,499 <s>&#8377 10,999</s>(50% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <a href=""><img src="images/b4.jpg" alt=""></a>
                <h4>degree North</h4>
                <h4>&#8377 1,495 <s>&#8377 3999</s>(56% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b5.webp" alt="">
                <h4>Pierre Carlo</h4>
                <h4>&#8377 1,234 <s>&#8377 1899</s>(35% OFF)
                </h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b6.jpg" alt="">
                <h4>PANIT</h4>
                <h4>&#8377 3,499 <s>&#8377 6,999 </s>(50% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b7.jpg" alt="">
                <h4>Louis Philippe</h4>
                <h4>&#8377 1,499 <s>&#8377 2,999 </s>(50% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b8.jpg" alt="">
                <h4>Levis</h4>
                <h4>&#8377 5,666 <s>&#8377 10,999</s> (46% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b9.jpg" alt="">
                <h4>Max</h4>
                <h4>&#8377 1,209 <s>&#8377 2,199</s> (45% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b10.webp" alt="">
                <h4>Polo</h4>
                <h4>&#8377 1,234 <s>&#8377 1899</s>(35% OFF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b11.webp" alt="">
                <h4>Mast & Harbour</h4>
                <h4>&#8377 1374 <s>&#8377 2499</s>(45% 0FF)</h4>

            </div>

            <div class="col-4 ac">
                <img src="images/b12.jpg" alt="">
                <h4>Hammer</h4>
                <h4>&#8377 4999 <s>&#8377 8999</s></h4>

            </div>


        </div>

    </div>

    <!-- --------------------------------------------------------------------------------------------------------------------------------- -->



    <!-- <div class="row slideoffer">
        <div class="col-4">
            <a  href=""><img src="images/offer5.jpg" alt=""></a>

        </div>

        <div class="col-4">
            <a  href="offerechoshow.php"><img src="images/offer3.jpg" alt=""></a>

        </div>

        <div class="col-4">
            <a  href=""><img src="images/offer4.jpg" alt=""></a>

        </div>

    </div> -->

<!-- 
    <div class="swiper mySwiper" style="margin-left: 20px;">
        <div class="swiper-wrapper">
            <a href="offerechoshow.php" class="swiper-slide"><img src="images/offer5.jpg" alt=""></a>
            <div class="swiper-slide"><img src="images/offer3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/offer4.jpg" alt=""></div>
            <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
 -->



    <!--------------offer--------------------------------------------------------------------------------------------->
    <div class="offer" style="background: radial-gradient(rgb(255, 255, 255),#110101);
    margin-top: 30px;
    padding: 0px 0;">
        <div class="smaller-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/fold1-background.png" width="100%" class="offer-img">
                </div>
                <div class="col-2">
                    <h3>Exclusively avaialble at ON SHOP</h3>
                    <h1>Samsung Galaxy Z Fold3 5G </h1>
                    <h4>Phantom Black, 12GB RAM, 256GB Storage <br>
                        1 year <b>manufacturer warranty</b> for device <br> + 6 months manufacturer warranty for in-box</h4>
                    <a href="offerfoldmobile.php" class="btn">View Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!-- --------------- testimonial------------   ----------------------------------------------------------------------    
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> Akhilesh is that you quwfuiwu
                        efiwgilwgfiwef
                        evbwivwfvwieufvuiwf
                        wewviywfiuwgvuiwvfuiwvfi
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>Natasha</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> Akhilesh is that you quwfuiwu
                        efiwgilwgfiwef
                        evbwivwfvwieufvuiwf
                        wewviywfiuwgvuiwvfuiwvfi
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>Shasha</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> Akhilesh is that you quwfuiwu
                        efiwgilwgfiwef
                        evbwivwfvwieufvuiwf
                        wewviywfiuwgvuiwvfuiwvfi
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>Nasha</h3>
                </div>

            </div>
        </div>
    </div> -->


    <!-- ------------------Brands------------------------------------------------------------------------------ -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo-samsung.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo-raymond.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo-asus.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo-lg.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo-adidas.png" alt="">
                </div>
            </div>
        </div>
    </div>






    <!-- --------------------------------------------star rating------------------------------------------------------------ -->


    <!-- 


    <div class="starrates">

        <div class="cone">
            <h2>5 star</h2>
            <div class="skills">
                <h3 class="name">HTML</h3>
                <div class="rates">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                    <input type="radio" name="html">
                </div>
            </div>
            <div class="skills">
                <h3 class="name">CSS</h3>
                <div class="rates">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">
                    <input type="radio" name="css">

                </div>
            </div>
            <div class="skills">
                <h3 class="name">js</h3>
                <div class="rates">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                    <input type="radio" name="js">
                </div>
            </div>
            <div class="skills">
                <h3 class="name">phto</h3>
                <div class="rates">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                    <input type="radio" name="ph">
                </div>
            </div>
            <div class="skills">
                <h3 class="name">Illustrator</h3>
                <div class="rates">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                    <input type="radio" name="ill">
                </div>
            </div>
        </div>

    </div>
 -->



















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






    <!-- -------------------------------Automatic show popup after 2second of page load------------- -->

    <!-- 
<script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');

    window.onload = function(){
        setTimeout(function(){
            popup.style.display = "block";

            // add some time delay to show popup
        },3000)
    }

    close.addEventListener('click',()=>{
        popup.style.display = "none";
    })



</script> -->










    <!-- --------------------------------------auto sliders n slider-------------------------------------------------- -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.slideo').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    </script>

    <script type="text/javascript">
        $('.slideoffer').slick();
    </script>


    <script type="text/javascript">
        $('.slidea').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    </script>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>



    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <!-- <script type="text/javascript">
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script> -->



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