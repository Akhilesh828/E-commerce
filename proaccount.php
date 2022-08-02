<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta anme="viewport" content="width=device-width, initialscale=0.1">
        <title> All Products - Redstore </title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    </head>
    <body>

        
            <div class="container">
                <div class="navbar">
                
                    <div class="logo">
                        
                        <img src="images/logo.png" alt="" width="125px">
                        
                    </div>
                    
                    <nav>
                        
                        <ul id="menuitems">
                            <li><a href="Project.html">Home</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="proaccount.html">Account</a></li>
                           
                        </ul>
                    </nav>
                    <a href="procart.html"><img src="images/cart.png" width="30px" height="30px" alt=""></a>
                    <img src="images/menu.png" class="menu-icon"
                     onclick="menutoggle()">
                </div>
               
            </div>



<!-- ---------------------Account-page------------------------- -->
        
            <div class="account-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/image1.png" width="100%" alt="">
                        </div>
                        <div class="col-2">
                            <div class="form-container">
                                <div class="form-btn">
                                    <span onclick="login()">Login</span>
                                    <span onclick="register()">Register</span>
                                    <hr id="Indicator">
                                </div>
                                <form id="LoginForm">
                                    <input type="text" placeholder="Username">                             
                                    <input type="password" placeholder="Password">
                                    <button type="Sumbit" class="btn">Login</button>
                                    <a href="">Forget Password</a>
                                </form>

                                <form id="RegisterForm">
                                    <input type="text" placeholder="Username">
                                    <input type="email" placeholder="Email">
                                    <input type="password" placeholder="Password">
                                    <button type="Sumbit" class="btn">Register</button>
                                </form>
                                
                            </div>
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
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/logo-white.png" alt="">
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
            function menutoggle(){
                if(menuitems.style.maxHeight == "0px")
                {
                    menuitems.style.maxHeight = "200px";
                }
                else
                {
                    menuitems.style.maxHeight = "0px";
                }
            }
        </script>

<!-- --------------js for toggle form -------------- -->
        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegisterFrom = document.getElementById("RegisterForm");
            var Indicator = document.getElementById("Indicator");
            
                function register(){
                    RegisterFrom.style.transform = "translateX(0px)";
                    LoginForm.style.transform = "translateX(0px)";
                    Indicator.style.transform = "translateX(100px)";
                }

                function login(){
                    RegisterFrom.style.transform = "translateX(300px)";
                    LoginForm.style.transform = "translateX(300px)";
                    Indicator.style.transform = "translateX(0px)";
                }

        </script>




    </body>
</html>