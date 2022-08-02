<?php
require 'config.php';

$grand_total = 0;
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  $grand_total += $row['total_price'];
  $items[] = $row['ItemQty'];
}
$allItems = implode(', ', $items);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>

<body>
  <!-- Navbar start -->
  <div class="container">
    <div class="navbar">
      <nav class="navbara ">

        <ul id="menuitems">

          <li><a class="it" href="Project.php"><i class="fa fa-home"></i> Home</a></li>


          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="wrapper">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h2 class="text-center text-info p-2">Payment Form</h2>
        <div class="jumbotron p-3 mb-2 text-center">
          <h5 class="lead"><b>Product(s) : </b><?= $allItems; ?></h5>
          <h5 class="lead"><b>Delivery Charge : </b>Free</h5>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total, 2) ?>/-</h5>
        </div>
        <form action="POST" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="input-group">
            <div class="input-box">
              <input type="text" name="name" class="form-control name" placeholder="Enter Full Name" required>
              <i class="fa fa-user icon"></i>
            </div>
          </div>
          <div class="input-box">
            <input type="email" name="email" class="form-control name" placeholder=" E-Mail Address" required>
            <i class="fa fa-envelope"></i>
          </div>
          <div class="input-box">
            <input type="tel" name="phone" class="form-control name" placeholder="Enter Phone Number" required>
            <i class="fas fa-phone-square-alt"></i>
          </div>
          <br>
          <div class="input-box">
            <textarea name="address" class="form-control" rows="5" cols="40" placeholder="Enter Delivery Address Here..."></textarea>
            <i class="far fa-address-card"></i>
          </div>
          <h5 class="text-center lead">Select Payment Mode</h5>
          <div class="form-group input-box">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <br>
          <br>
          <br>
          <br>

          <div class="form-group input-box">
            <button >
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block" >

            </button>
            
          </div>
        </form>
      </div>
    </div>
  </div>





  


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Sending Form data to the server
      $("#placeOrder").submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: $('form').serialize() + "&action=order",
          success: function(response) {
            $("#order").html(response);
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