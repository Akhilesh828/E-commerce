<?php

include 'action.php';

$email = $_GET['email'];

$deletequery = "delete from orders where email = '$email'";

$query = mysqli_query($conn, $deletequery);

header('location:admin.php');


?>