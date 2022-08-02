<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            background-color: antiquewhite;
            /* height: 10vh;
            width: 10vw; */
        }

        .main-div {
            /* width: 100%;
            height: 100vh; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            margin-left: 30px;
            margin-right: 30px;
            /* margin-bottom: 200px; */
        }

        .center-div {
            /* width: 90%;
            height: 80vh; */
            /* background: linear-gradient(blue, yellow); */
            padding: 20px 0 0 0;
            /* box-shadow: 0 0 10px 10px blue; */
            border-radius: 10px;
        }

        h1 {
            font-size: 18px;
            color: #000;
            text-align: center;
            margin-top: -20px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px 10px orange;
            border-radius: 10px;
            margin: auto;

        }

        th,
        td {
            border: 1px solid white;
            padding: 8px 10px;
            text-align: center;
            color: grey;
            border-radius: 10px;
        }

        th {
            text-transform: uppercase;
            font-weight: 500;
        }

        td {
            font-size: 18px;
            /* font-weight: 900; */
            color: #000;
        }

        .email-style {
            font-size: 16px;
            color: white;
            display: inline-block;
            background: orange;
            border-radius: 2px;
            line-height: 30px;
            padding: 0 14px;
        }

        .post-class {
            text-transform: uppercase;
        }

        .fa {
            font-size: 18px;
        }

        .fa-edit {
            color: lightskyblue;
        }

        .fa-trash {
            color: red;
        }

        a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="main-div">
        <h1> List of Purchased</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>address</th>
                            <th>pmode</th>
                            <th>products</th>
                            <th>amount_paid</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'action.php';

                        $selectquery = "select * from orders";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);


                        while ($res = mysqli_fetch_array($query)) {
                            // echo $res['name'] . "<br>";
                        ?>

                            <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td> <span class="email-style"> <?php echo $res['email']; ?></span></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['address']; ?></td>
                            <td><?php echo $res['pmode']; ?></td>
                            <td><?php echo $res['products']; ?></td>
                            <td><?php echo $res['amount_paid']; ?></td>
                            <td><a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=cart_system&table=orders&pos=0"
                            data-toggle="tooltip" data-palcement='top'
                            title="UPDATE" target="_blank"><i class="fas fa-edit"></i></a></td>

                            <td><a href="delete.php?id=<?php echo $res['email'] ?>" data-toggle="tooltip" data-palcement='top'
                            title="DELETE"><i class="fas fa-trash"></i></a></td>
                        </tr>

                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>