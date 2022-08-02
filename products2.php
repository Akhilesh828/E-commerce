<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta anme="viewport" content="width=device-width, initialscale=0.1">
    <title> All Products - Redstore </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="sproducts.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
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



    <!-- -------------------------------slide image ----------------------------------- -->



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
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>




    <!-- ---------------------------------------------------------------------------------------------- -->

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select name="" id="">
                <option value=""> Defaulting Shorting </option>
                <option value=""> Short by price </option>
                <option value=""> Short by Popularity </option>
                <option value=""> Short by rating </option>
                <option value=""> Short by Sale </option>

            </select>
        </div>




        <div class="row">
            <div class="col-4">
                <img src="images/product-2.jpg" alt="">
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
                <img src="images/product-3.jpg" alt="">
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
                <img src="images/product-1.jpg" alt="">
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
                <img src="images/product-4.jpg" alt="">
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
                <img src="images/product-1.jpg" alt="">
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
                <img src="images/product-2.jpg" alt="">
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
                <img src="images/product-3.jpg" alt="">
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
                <img src="images/product-4.jpg" alt="">
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


        </div>

        <div class="page-btn">
            <a href="products.php"><span>1</span></a>
            <a href="products2.php"><span>2</span></a>
            <a href="products3.php"><span>3</span></a>
            <a href="products4.php"><span>4</span></a>
            <a href="products41.php"><span>&#8594</span></a>

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
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
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
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
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


</body>

</html>