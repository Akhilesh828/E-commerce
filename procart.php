<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta anme="viewport" content="width=device-width, initialscale=0.1">
        <title> All Products - Redstore </title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
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

 <!-- ---------------------cart item details--------------------            -->
        
            <div class="small-container cart-page">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/buy-1.jpg" alt="">
                                <div>
                                    <p>Red pants</p>
                                    <small>Price: &#8377 900</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                            </div>
                        </td>
                        <td> <input type="number" value="1"> </td>
                        <td>&#8377 600</td>
                    </tr>

                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/buy-3.jpg" alt="">
                                <div>
                                    <p>Red pants</p>
                                    <small>Price: &#8377 440</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                            </div>
                        </td>
                        <td> <input type="number" value="1"> </td>
                        <td>&#8377 600</td>
                    </tr>

                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/buy-2.jpg" alt="">
                                <div>
                                    <p>Red pants</p>
                                    <small>Price: &#8377 890</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                            </div>
                        </td>
                        <td> <input type="number" value="1"> </td>
                        <td>&#8377 600</td>
                    </tr>
                </table>

                <div class="total=price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>&#8377 500</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>&#8377 30</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>&#8377 530</td>
                        </tr>
                        
                    </table>
                    <a href="propayment.html"><button>Pay Now</button></a>

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




    </body>
</html>