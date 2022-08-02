<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            display: flex;
            margin: auto;
            width: 100vw;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-group:hover{
            box-shadow: 0 0 10px 10px orange;
            border-radius: 10px;
            /* background-color: purple; */
        }
        .form-group{
            margin: 30px;
        }
        a{
            text-decoration: none;
        }
        h2,p{
            font-size: 25px;
            /* margin-bottom: -5px; */
        }
        h2{
            margin-bottom: 20px;
        }
        .row{
            background-color: aqua;
            box-shadow: 0 0 10px 10px orange;
            width: 530px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            border-radius: 20px;
        }
        .button{
            align-items: center;
            justify-content: center;
            width: 100px;
            /* margin: 20px; */
            cursor: pointer;
            margin: 10px;
            /* transform: translateY(-5px); */
        }
        .button:hover{
            background-color: greenyellow;
        }
        .button:active{
            box-shadow: 0  25px 15px 15px red;
            transform: translateY(10px);
            transition: 1s;
        }
        img{
            float:left ;
            margin: 30px;
        }
        input{
            width: 300px;
            height: 30px;
            border-radius: 10px;
            font-size: medium;
            padding: 5px;

        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- <a href="Project.php" >Home</a> -->
    <div class="container">
        <img src="images/LOGO-BACKGROUND.png" alt="">
        <div class="row">
            <div class=" form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="btn">
                        <input class=" button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>