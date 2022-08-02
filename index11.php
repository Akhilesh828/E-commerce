<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />




  <style>
  </style>
  <script src="jquery-3.2.1.min.js"></script>


</head>

<body>
  <!-- Navbar start -->
  <div class="container">
    <div class="navbar">
      <nav class="navbara ">

        <ul id="menuitems">

          <li><a class="it" href="Project.html"><i class="fa fa-home"></i> Home</a></li>
          <li><a class="it" href="products.html"> <i class="fas fa-shopping-cart"></i> Products</a></li>
          <li><a class="it" href=""> <i class="fas fa-info-circle"></i> About</a></li>
          <li><a class="it" href=""> <i class="far fa-address-book"></i> Contact</a></li>
          <li><a class="it" href="proaccount.html"> <i class="fas fa-user"></i> Account</a></li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
          </li>
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

  <!-- Navbar end -->

  <div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <img src="images/lap1.jpg" width="100%" id="ProductImg" alt="">

        <div class="small-img-row">
          <div class="small-img-col">
            <img src="images/lap10.webp" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/lap3.webp" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/lap5.webp" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/lap6.webp" width="100%" class="small-img" alt="">
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

      </div>
    </div>
  </div>

  <!-- Displaying Products Start -->

  <div class="small-container single-product">
    <div class="row ">

      <div class="container">
        <div id="message"></div>
        <div class="row mt-2 pb-3">
          <?php
          include 'config.php';
          $stmt = $conn->prepare('SELECT * FROM promobiledetails1');
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) :
          ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
              <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                  <div class="card-body p-1">

                  </div>
                  <div class="card-footer p-1">
                    <form action="" class="form-submit">
                      <div class="row p-2">
                        <div class="col-md-6 py-1 pl-4">
                          <b>Quantity : </b>
                        </div>
                        <div class="col-md-6">
                          <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                        </div>
                      </div>
                      <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                      <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                      <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                      <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                      <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">


                      <div class="col-2">
                        <a href="" class="btn btn-info btn-block addItemBtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-cart-plus">
                          </i>&nbsp;&nbsp;&nbsp;Add to
                          cart</a>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>

    </div>
  </div>
  <!-- 
------------------------------------------------------------------------- -->


  <!-- --------title--------- -->
  <div class="small-container">
    <div class="row row-2">
      <h2>Related Products</h2>
      <a href="proformalmens.html" class="btn">View More</a>
    </div>

  </div>


  <!-- --------products------- -->

  <div class="small-container">

    <div class="row">
      <div class="col-4">
        <a href="proformensdetails2.html"><img src="images/hancock_formal_navy_blue_shirt_1.webp" alt=""></a>
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
        <img src="images/01_louis_philippe_blue_blazer.jpg" alt="">
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
        <img src="images/01_hancock_formal_grey_shirt.webp" alt="">
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
        <img src="images/01_sonjaya_formal_navy_blue_shirt.webp" alt="">
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
        <img src="images/01_flying_machine_formal_white_shirt.jpg" alt="">
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
        <img src="images/01_peter_england_formal_purple_shirt.webp" alt="">
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
        <img src="images/01_Raymond_printed_blazer.webp" alt="">
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
        <img src="images/01_Raymond_contemporary_blazer.webp" alt="">
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





















  <div class="bnby">
    <h1>comment</h1>
    <div class="comment-form-container">
      <form id="frm-comment">
        <div class="input-row">
          <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> <input class="input-field" type="text" name="name" id="name" placeholder="Name" />
        </div>
        <div class="input-row">
          <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Add a Comment">  </textarea>
        </div>
        <div>
          <input type="button" class="btn-submit" id="submitButton" value="Publish" />
          <div id="comment-message">Comments Added Successfully!</div>
        </div>

      </form>
    </div>
    <div id="output"></div>
    <script>
      function postReply(commentId) {
        $('#commentId').val(commentId);
        $("#name").focus();
      }

      $("#submitButton").click(function() {
        $("#comment-message").css('display', 'none');
        var str = $("#frm-comment").serialize();

        $.ajax({
          url: "comment-add.php",
          data: str,
          type: 'post',
          success: function(response) {
            var result = eval('(' + response + ')');
            if (response) {
              $("#comment-message").css('display', 'inline-block');
              $("#name").val("");
              $("#comment").val("");
              $("#commentId").val("");
              listComment();
            } else {
              alert("Failed to add comments !");
              return false;
            }
          }
        });
      });

      $(document).ready(function() {
        listComment();
      });

      function listComment() {
        $.post("comment-list.php",
          function(data) {
            var data = JSON.parse(data);

            var comments = "";
            var replies = "";
            var item = "";
            var parent = -1;
            var results = new Array();

            var list = $("<ul class='outer-comment'>");
            var item = $("<li>").html(comments);

            for (var i = 0;
              (i < data.length); i++) {
              var commentId = data[i]['comment_id'];
              parent = data[i]['parent_comment_id'];

              if (parent == "0") {
                comments = "<div class='comment-row'>" +
                  "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
                  "<div class='comment-text'>" + data[i]['comment'] + "</div>" +
                  "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>" +
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
        for (var i = 0;
          (i < data.length); i++) {
          if (commentId == data[i].parent_comment_id) {
            var comments = "<div class='comment-row'>" +
              " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
              "<div class='comment-text'>" + data[i]['comment'] + "</div>" +
              "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>" +
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