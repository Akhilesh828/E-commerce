<html>

<head>
        <meta charset="UTF-8">
        <meta anme="viewport" content="width=device-width, initialscale=0.1">
        <title> All Products - Redstore </title>
        <link rel="stylesheet" href="ss.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
.bnby {
	font-family: Arial;
	background: #189a18;
}

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
</style>
<title>Comment System using PHP, Ajax</title>
<script src="jquery-3.2.1.min.js"></script>


<body>

<div class="container">
                <div class="navbar">
                
                    <div class="logo">
                        
                        <img src="images/logo.png" alt="" width="125px">
                        
                    </div>
                    
                    <nav>
                        
                        <ul id="menuitems">
                            <li><a href="Project.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="products.html"> <i class="fas fa-shopping-cart"></i> Products</a></li>
                            <li><a href=""> <i class="fas fa-info-circle"></i> About</a></li>
                            <li><a href=""> <i class="far fa-address-book"></i> Contact</a></li>
                            <li><a href="proaccount.html"> <i class="fas fa-user"></i> Account</a></li>
                           
                           
                        </ul>
                    </nav>
                    <a href="procart.html"><img src="images/cart.png" width="30px" height="30px" alt=""></a>
                    <img src="images/menu.png" class="menu-icon"
                     onclick="menutoggle()">
                </div>
               
            </div>

 <!-- ---------------------Single Products Details--------------------            -->
            
            
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="images/ge1.webp" width="100%" id="ProductImg" alt="">

                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="images/ge1.webp" width="100%" class="small-img" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/ge3.webp" width="100%" class="small-img" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/ge4.jpg" width="100%" class="small-img" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/ge2.jpg" width="100%" class="small-img" alt="">
                            </div>
                        </div>


                    </div>
                    <div class="col-2">
                        <p>Libas</p>
                        <h1>Kurti with Trousers & With Dupatta</h1>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <br>
                        <p>
                           <li>Kurti design:
                            Ethnic motifs self design
                            Anarkali shape
                            Panelled style
                            V-neck, sleeveless flared sleeve
                            2 pockets
                            Calf length with straight hem
                            Pure cotton machine weave fabric</li>

                            <li>Trousers design:
                                Printed Trousers
                                Partially elasticated waistband
                                Zip closure</li>

                            <li>Size & Fit
                                Dupatta length: 2 metres (approx.)
                                The model (height 58) is wearing a size S</li>

                            <li>Material & Care
                                Top fabric: Pure Cotton
                                Bottom fabric: Pure Cotton
                                Dupatta fabric: Poly Chiffon
                                </li>
                        </p>
                        <h4>&#8377 1,900     <s>&#8377 2,500</s></h4>
                        <select name="" id="">
                            <option >  Select Size </option>
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
        






















    <div class="bnby">
    <h1>comment</h1>
    <div class="comment-form-container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" /><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>
    </div>
    <div id="output"></div>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>

    </div>


<!-- ----------------------------------------------------------------------------------------------------- -->

            
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


<!-- ----------js for product gallery------ small photo big----------- -->
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }



        </script>





























</body>

</html>