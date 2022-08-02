<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta anme="viewport" content="width=device-width, initialscale=0.1">
    <title> All Products - Redstore </title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <style>
        .bbby {
            background-color: lightcoral;
        }

        h1 {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100%;
            text-align: center;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: 600;
        }

        h2 {
            position: fixed;
            top: 60%;
            left: 50%;
            width: 100%;
            text-align: center;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: 600;
        }
    </style>



</head>

<body>
    <div class="bbby">

        <div class="container">
            <div class="navbar">

                <div class="logo">

                    <img src="images/LOGO-BACKGROUND.png" alt="" width="60px">

                </div>

                <nav class="navbara ">

                    <ul id="menuitems">

                        <li><a class="it" href="Project.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="it" href="products.php"> <i class="fas fa-shopping-cart"></i> Products</a></li>
                        <!-- <li><a class="it" href=""> <i class="fas fa-info-circle"></i> About</a></li> -->
                        <li><a class="it" href="contact.php"> <i class="far fa-address-book"></i> Contact</a></li>
                        <li><a class="it" href="homeaccount.php"> <i class="fas fa-user"></i> Account</a></li>
                        <li type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></li>


                        <li class="nav-item">
                            <div class="shake">

                                <a class="nav-link it" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>

                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- <a href="procart.html"><img src="images/cart.png" width="30px" height="30px" alt=""></a> -->
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>

    </div>

    <div class="line">
        <h1>NAME:- <?php echo $fetch_info['name'] ?></h1>
        <br>
        <h2>EMAIL:- <?php echo $fetch_info['email'] ?></h2>

    </div>

</body>

</html>