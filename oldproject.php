<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta anme="viewport" content="width=device-width, initialscale=0.1">
        <title>Redstore | Ecommerence Website Design</title>
        <link rel="stylesheet" href="styles.css">


        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

        
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>






        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />







   
    </head>
    <body>

        <div class="header">
            <div class="container">
                <div class="navbar">
                
                    <div class="logo">
                        
                        <a href="Project.html"><img src="images/logo.png" alt="" width="125px"></a>
                        
                    </div>
                    
                    <nav>
                        
                        <ul id="menuitems">
                            
                            <li><a href="Project.html"><i class="fa fa-home"></i> Home</a></li>
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
    
                </div>
    
            </div>
            </div>
    
            <!------ featured categories------->
            <div class="categories">
                <div class="small-conatiner">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/category-1.jpg" alt="">
        
                        </div>
                        <div class="col-3">
                            <img src="images/category-2.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="images/category-3.jpg" alt="">
        
                        </div>
                      
        
                    </div>
        
                </div>
    
            </div>



            

<!-- ---------------------------------------------full image auto slider--------------------------------------- -->

<div class="bqdy">
  
    <div class="slideshaw-cantainer">
    
      <div class="mySlidex fode">
        <div class="numbertext">1 / 3</div>
        <img src="images/soffer6.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
      
      <div class="mySlidex fode">
        <div class="numbertext">2 / 3</div>
        <img src="images/soffer5.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
      
      <div class="mySlidex fode">
        <div class="numbertext">3 / 3</div>
        <img src="images/soffer4.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
      
      </div>
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlidex");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
    </script>
    



<!-- ---------------------------------------------auto image slide--------------------------------------- -->

            
<div class="bady">
    <!--image slider start-->
<div class="sliderz">
 <div class="slidesz">
   <!--radio buttons start-->
   <input type="radio" name="radio-btn" id="radio1">
   <input type="radio" name="radio-btn" id="radio2">
   <input type="radio" name="radio-btn" id="radio3">
   <input type="radio" name="radio-btn" id="radio4">
   <!--radio buttons end-->
   <!--slide images start-->
   <div class="slidez first">
     <img src="images/soffer.jpg" alt="">
   </div>
   <div class="slidez">
     <img src="images/soffer1.webp" alt="">
   </div>
   <div class="slidez">
     <img src="images/soffer2.jpeg" alt="">
   </div>
   <div class="slidez">
     <img src="images/soffer3.jpg" alt="">
   </div>
   <!--slide images end-->
   <!--automatic navigation start-->
   <div class="navigation-auto">
     <div class="auto-btn1"></div>
     <div class="auto-btn2"></div>
     <div class="auto-btn3"></div>
     <div class="auto-btn4"></div>
   </div>
   <!--automatic navigation end-->
 </div>
 <!--manual navigation start-->
 <div class="navigation-manual">
   <label for="radio1" class="manual-btn"></label>
   <label for="radio2" class="manual-btn"></label>
   <label for="radio3" class="manual-btn"></label>
   <label for="radio4" class="manual-btn"></label>
 </div>
 <!--manual navigation end-->
</div>
<!--image slider end-->

<script type="text/javascript">
var counter = 1;
setInterval(function(){
 document.getElementById('radio' + counter).checked = true;
 counter++;
 if(counter > 4){
   counter = 1;
 }
}, 5000);
</script>

</div>


        


<!-- -------------------------------Category page shortcut -------------------------------------------- -->
            <div class="smallcontainer">
                <h2 class="title">Categories</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <div>
                        <a href="promobile.html"><img class="al" src="images/cat-mobile2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Mobile's & Laptop's</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prohomeentertain.html"><img class="al" src="images/cat-tv1.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Home Entertainments</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prodaily.html"><img class="al" src="images/my2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Daily Essentials</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="proformalmens.html"><img class="al" src="images/cat-for1.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Formal Clothes</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prokurta.html"><img class="al" src="images/cat-saree2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Indian Style Clothes</h4>
                    </div>                   
                </div>
                <div class="col-4">
                    <div>
                        <a href="procasual.html"><img class="al" src="images/cat-casual.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Casual Clothes</h4>
                    </div>                   
                </div>
              
            
            </div>



 <!-------------------------------------- featured products---- &#8377   --->  
            <div class="small-container">
                <h2 class="title">Featured Products</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="productdetails1.html"><img src="images/product-1.jpg" alt=""></a>
                        <a href="productdetails1.html"></a><h4>REd Printed T-Shirt</h4></a>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p> &#8377 400</p>
                    </div>
    
                    <div class="col-4">
                        <a href="productdetails2.html"><img src="images/product-2.jpg" alt=""></a>
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
                        <a href="productdetails3.html"><img src="images/product-2.jpg" alt=""></a>
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
                        <img src="images/product-5.jpg" alt="">
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
                        <img src="images/product-6.jpg" alt="">
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
                        <img src="images/product-7.jpg" alt="">
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
                        <img src="images/product-8.jpg" alt="">
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
                        <img src="images/product-9.jpg" alt="">
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
                        <img src="images/product-10.jpg" alt="">
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
                        <img src="images/product-11.jpg" alt="">
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
                        <img src="images/product-12.jpg" alt="">
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
    
            </div>
        

        </div> 
<!--------------offer--------------------------------------------------------------------------------------------->
        <div class="offer">
            <div class="smaller-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/exclusive.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively avaialble in Redstore</p>
                        <h1>Smart Ban</h1>
                        <small>The Mi Smart Band 4 festures a 39.9% larger
                            (than mi band 3) amold color full touch display width
                            adjustable brightness , so everything is n clear as can be.
                        </small>
                        <a href=""class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        

 <!-- --------------- testimonial------------   ----------------------------------------------------------------------     -->
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
        </div>


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
   
        
<!-- ---------------------- Footer ------------------------------------------------------------------------ -->

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
                            <a href="https://en-gb.facebook.com/login/"><li>Facebook</li></a>
                            <a href="https://twitter.com/login">Twitter</a>
                            <a href="https://www.instagram.com/accounts/login/"><li>Instagram</li></a>
                            <a href="https://www.youtube.com/"><li>YouTube</li></a>
 
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2021 - Akhilesh Prajapati</p>
            </div>
        </div>


<!-- ------------js for toggle menu------------------------------------------------------------------------------- -->
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