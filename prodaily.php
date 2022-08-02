<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta anme="viewport" content="width=device-width, initialscale=0.1">
    <title>Daily Essentials</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="sautoslider.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <style>
        body {
            overflow-x: hidden;
        }

        h4 .off {
            color: red;
            font-weight: bold;
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

        </div>
    </div>



    <!-------------------------------------- featured products---- &#8377   --->
    <div class="small-container">
        <h2 class="title">Covid-19 Specials</h2>




        <div class="row slideo">

            <div class="col-4">
                <a href=""><img src="images/mask1.jpg" alt=""></a>
                <h4>ASGARD Nonwoven Fabric Disposable Surgical (Pack of 100)</h4>
                <h4>&#8377 399 <s>&#8377 999</s>
                    <p class="off">60% OFF</p>
                </h4>
            </div>

            <div class="col-4">
                <a href="proda3.php"><img src="images/mask2.jpg" alt=""></a>
                <h4>Careview Reuseable N95 Mask (White, Without Valve, Pack of 10)</h4>
                <h4>&#8377 685 <s>&#8377 1,194</s>
                    <p class="off">43% OOF</p>
                </h4>

            </div>

            <div class="col-4">
                <a href="proda1.php"><img src="images/mask3.jpg" alt=""></a>
                <h4>Kodenipr Transparent Disposable Clear Gloves </h4>
                <h4>&#8377 420 <s>&#8377 649</s>
                    <p class="off">35% OOF</p>
                </h4>

            </div>

            <div class="col-4">
                <a href=""><img src="images/mask4.jpg" alt=""></a>
                <h4>
                    Kodenipr Surgical Caps</h4>
                <h4>&#8377 160 <s>&#8377 249</s>
                    <p class="off">36% OOF</p>
                </h4>
            </div>

            <div class="col-4">
                <a href="proda2.php"> <img src="images/mask5.jpg" alt=""></a>
                <h4>
                    PROCARE Disposable Latex Medical Examination Gloves</h4>
                <h4>&#8377 391 <s>&#8377 940</s>
                    <p class="off">58% OOF</p>
                </h4>

            </div>

            <div class="col-4">
                <img src="images/mask6.jpg" alt="">
                <h4>
                    Savlon Mask</h4>
                <h4>&#8377 306 <s>&#8377 360 </s>
                    <p class="off">15% OOF</p>
                </h4>

            </div>

            <div class="col-4">
                <img src="images/mask7.jpg" alt="">
                <h4>
                    Savlon Multipurpose Disinfectant Cleaner Liquid, 500ml</h4>
                <h4>&#8377 154 <s>&#8377 193 </s>
                    <p class="off">20% OOF</p>
                </h4>

            </div>

            <div class="col-4">
                <img src="images/mask8.jpg" alt="">
                <h4>
                    Savlon Moisture Shield Germ Protection Liquid Handwash Refill Pouch, 1500ml</h4>
                <h4>&#8377 162 <s>&#8377 319</s>
                    <p class="off">49% OOF</p>
                </h4>

            </div>



        </div>



        <!-- --------------------------------------------------------------------------------- -->
        <div class="small-container">
            <h2 class="title">Cleaning Products</h2>




            <div class="row slideo">

                <div class="col-4">
                    <a href=""><img src="images/da2.jpg" alt=""></a>
                    <h4>Surf Excel</h4>
                    <h4>&#8377 306 <s>&#8377 408</s></h4>
                </div>

                <div class="col-4">
                    <a href=""><img src="images/da3.jpg" alt=""></a>
                    <h4>Ariel Matic liquid</h4>
                    <h4>&#8377 435 <s>&#8377 440</s></h4>

                </div>

                <div class="col-4">
                    <a href="proda1.php"><img src="images/da1.jpg" alt=""></a>
                    <h4>Ariel Matic</h4>
                    <h4>&#8377 528 <s>&#8377 704</s></h4>

                </div>

                <div class="col-4">
                    <a href="proda4.php"><img src="images/da4.jpg" alt=""></a>
                    <h4>Dettol Liquid</h4>
                    <h4>&#8377 492 <s>&#8377 579</s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da5.jpg" alt="">
                    <h4>Vim Dishwash</h4>
                    <h4>&#8377 314 <s>&#8377 326</s>
                    </h4>

                </div>

                <div class="col-4">
                    <img src="images/da6.jpg" alt="">
                    <h4>Cascade ActionPacs</h4>
                    <h4>&#8377 509 <s>&#8377 599 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da7.jpg" alt="">
                    <h4>Harpic Disinfectant</h4>
                    <h4>&#8377 318 <s>&#8377 336 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da9.jpg" alt="">
                    <h4>Domex fresh guard lime</h4>
                    <h4>&#8377 312 <s>&#8377 350</s></h4>

                </div>



            </div>



            <!-- --------------------------------------------------------------------------------------------------------------------- -->

            <h2 class="title">Daily Nutrients</h2>
            <div class="row slideo">

                <div class="col-4">
                    <a href=""><img src="images/da11.jpg" alt=""></a>
                    <h4>Bourn Vita</h4>
                    <h4>&#8377 290 <s>&#8377 326</s></h4>
                </div>

                <div class="col-4">
                    <a href=""><img src="images/da221.jpg" alt=""></a>
                    <h4>Complan</h4>
                    <h4>&#8377 346 <s>&#8377 385</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da13.jpg" alt=""></a>
                    <h4>Pediasure</h4>
                    <h4>&#8377 515 <s>&#8377 545</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da14.jpg" alt=""></a>
                    <h4>Fast & UP</h4>
                    <h4>&#8377 300 <s>&#8377 344</s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da222.jpg" alt="">
                    <h4>Horlicks</h4>
                    <h4>&#8377 325 <s>&#8377 355</s>
                    </h4>

                </div>

                <div class="col-4">
                    <img src="images/da223.jpg" alt="">
                    <h4>Proteinx</h4>
                    <h4>&#8377 499 <s>&#8377 535 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da226.jpg" alt="">
                    <h4>Bourn Vita 5star</h4>
                    <h4>&#8377 244 <s>&#8377 305 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da227.jpg" alt="">
                    <h4>Boost</h4>
                    <h4>&#8377 290 <s>&#8377 328</s> </h4>

                </div>


            </div>



            <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

            <h2 class="title">Baby Products</h2>
            <div class="row slideo">

                <div class="col-4">
                    <a href=""><img src="images/da21.jpg" alt=""></a>
                    <h4>Pampers</h4>
                    <h4>&#8377 712 <s>&#8377 1,149</s></h4>
                </div>

                <div class="col-4">
                    <a href=""><img src="images/da22.jpg" alt=""></a>
                    <h4>Mamy Poko Pants</h4>
                    <h4>&#8377 1,004 <s>&#8377 1,499</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da112.jpg" alt=""></a>
                    <h4>Johnson's Baby</h4>
                    <h4>&#8377 327 <s>&#8377 360</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da24.jpg" alt=""></a>
                    <h4>Huggies Pants</h4>
                    <h4>&#8377 746 <s>&#8377 1,099</s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da25.jpg" alt="">
                    <h4>Johnson's Soap</h4>
                    <h4>&#8377 179 <s>&#8377 186</s>
                    </h4>

                </div>

                <div class="col-4">
                    <img src="images/da111.jpg" alt="">
                    <h4>Lal Tail</h4>
                    <h4>&#8377 304 <s>&#8377 375 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da27.jpg" alt="">
                    <h4>Chicco</h4>
                    <h4>&#8377 391 <s>&#8377 449 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da113.jpg" alt="">
                    <h4>Baby Lotion</h4>
                    <h4>&#8377 282 <s>&#8377 350</s></h4>

                </div>



            </div>


            <h2 class="title">Snacks</h2>
            <div class="row slideo">

                <div class="col-4">
                    <a href=""><img src="images/da31.jpg" alt=""></a>
                    <h4>Nescafe</h4>
                    <h4>&#8377 629 <s>&#8377 699</s></h4>
                </div>

                <div class="col-4">
                    <a href=""><img src="images/da32.jpg" alt=""></a>
                    <h4>Red Bull pack of 24</h4>
                    <h4>&#8377 2,759 <s>&#8377 2800</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da331.jpg" alt=""></a>
                    <h4>Max Protein</h4>
                    <h4>&#8377 216 <s>&#8377 240</s></h4>

                </div>

                <div class="col-4">
                    <a href="proda5.php"><img src="images/da34.jpg" alt=""></a>
                    <h4>Choco-Pie</h4>
                    <h4>&#8377 150 <s>&#8377 155</s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da35.jpg" alt="">
                    <h4>Yoga Bar</h4>
                    <h4>&#8377 429 <s>&#8377 499</s>
                    </h4>

                </div>

                <div class="col-4">
                    <img src="images/da36.jpg" alt="">
                    <h4>Corn Flakes 1.2kg</h4>
                    <h4>&#8377 425 <s>&#8377 499 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da37.jpg" alt="">
                    <h4>Honey</h4>
                    <h4>&#8377 485 <s>&#8377 520 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da332.jpg" alt="">
                    <h4>Mindful</h4>
                    <h4>&#8377 672 <s>&#8377 960</s></h4>

                </div>



            </div>


            <h2 class="title">Pet Products</h2>
            <div class="row slideo">

                <div class="col-4">
                    <a href=""><img src="images/da41.jpg" alt=""></a>
                    <h4>Pedigree</h4>
                    <h4>&#8377 1,757 <s>&#8377 2,130</s></h4>
                </div>

                <div class="col-4">
                    <a href=""><img src="images/da42.jpg" alt=""></a>
                    <h4>Whiskas</h4>
                    <h4>&#8377 365 <s>&#8377 400</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da43.jpg" alt=""></a>
                    <h4>Meat UP</h4>
                    <h4>&#8377 699 <s>&#8377 710</s></h4>

                </div>

                <div class="col-4">
                    <a href=""><img src="images/da44.jpg" alt=""></a>
                    <h4>PurePet</h4>
                    <h4>&#8377 1,799 <s>&#8377 2,000</s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da45.jpg" alt="">
                    <h4>Velvet Dog/Cat Bed</h4>
                    <h4>&#8377 699 <s>&#8377 1699</s>
                    </h4>

                </div>

                <div class="col-4">
                    <img src="images/da46.jpg" alt="">
                    <h4>Chappi</h4>
                    <h4>&#8377 2,438 <s>&#8377 2,650 </s></h4>

                </div>

                <div class="col-4">
                    <img src="images/da47.jpg" alt="">
                    <h4>Pedigree wet dog food</h4>
                    <h4>&#8377 417 <s>&#8377 500 </s></h4>

                </div>




            </div>











        </div>

        <!-- ------------------Brands------------------------------------------------------------------------------ -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/savlon-removebg-preview.png" alt="">
                    </div>
                    <!-- <div class="col-5">
                        <img src="images/logo-samsung.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-raymond.png" alt="">
                    </div> -->
                    <div class="col-5">
                        <img src="images/Airel.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/Pampers-removebg-preview.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/complan-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>


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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
            $('.slideo').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
            });
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

</body>

</html>