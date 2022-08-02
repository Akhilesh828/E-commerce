<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta anme="viewport" content="width=device-width, initialscale=0.1">
    <title> All Products - Redstore </title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
                    <li><a class="it" href=""> <i class="fas fa-info-circle"></i> About</a></li>
                    <li><a class="it" href=""> <i class="far fa-address-book"></i> Contact</a></li>
                    <li><a class="it" href="proaccount.php"> <i class="fas fa-user"></i> Account</a></li>

                    <li class="nav-item">
                        <div class="shake">
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>

                        </div>
                    </li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>

    </div>

    <!-- ---------------------Single Products Details--------------------            -->


    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gtshirtc1.webp" width="100%" id="ProductImg" alt="">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gtshirtc1.webp" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gtshirtc2.webp" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gtshirtc3.webp" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gtshirtc4.webp" width="100%" class="small-img" alt="">
                    </div>
                </div>


            </div>
            <div class="col-2">
                <p>Indian / Saree</p>
                <h1>Red printd T-shirt by hrx</h1>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>
                    I am the best nfkwnekwfn webfiwbfjiwbijwbjwbwfbnwknfkwnekwfn
                    wefwbhbw
                </p>
                <h4>&#8377 900</h4>
                <select name="" id="">
                    <option> Select Size </option>
                    <option value="">XXL</option>
                    <option value="">XL</option>
                    <option value="">Large</option>
                    <Option>Medium</Option>
                    <option value="">Small</option>
                </select>

                <input type="Number" Value="1">
                <a href="procart.html" class="btn">Add To Cart</a>
                <br>
                <a href="propayment.html" class="btn"><button>Buy Now</button></a>


            </div>
        </div>

    </div>

    <!-- --------title--------- -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="progtshirt.php" class="btn">View More</a>
        </div>

    </div>





    <!-- --------products------- -->

    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <a href=""><img src="images/gtshirt2.webp" alt=""></a>
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt4.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt6.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt8.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt10.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt12.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt14.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> &#8377 400</p>
            </div>

            <div class="col-4">
                <img src="images/gtshirt16.webp" alt="">
                <h4>REd Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> &#8377 400</p>
            </div>


        </div>


    </div>


    </div>


    <!-- ---------------------- Footer ---------------------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our app</h3>
                    <p>downlaod app foe andriod and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/app-store.png" alt="">
                        <a href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Jul0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-py-Evergreen-Jul0121-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700058906740795_creativeid_480977735237_device_c&gclid=Cj0KCQjwu7OIBhCsARIsALxCUaOF15WR4f1jTPjqTertqzF2Uj9e37LwKJCuI-9L5u8SJ_eagSds798aAucDEALw_wcB&gclsrc=aw.ds"><img src="images/play-store.png" alt=""></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/LOGO-BACKGROUND.png" alt="">
                    <p> our purpose is bfwiebfijbjkwebjkbfbwjb</p>
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
            <p class="copyright">Copyright 2021 - Akhilesh Prajapati</p>
        </div>
    </div>


    <!-- ------------js for toggle menu--------------- -->
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


    <!-- ----------js for product gallery------ small photo big----------- -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>


</body>

</html>