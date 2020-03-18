<?php
include 'dbcon.php';
$email = $_SESSION['name'];
$order_id=$_POST['order_id'];
$grievances=$_POST['grievances'];
$description=$_POST['description'];
$sql = "INSERT INTO customer_grievances (email,order_id,grievances, description) VALUES ('$email'  , '$order_id' , '$grievances', '$description')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
