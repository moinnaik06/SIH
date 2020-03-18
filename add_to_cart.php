<?php
session_start();
include 'dbcon.php';


$v_name = $_POST['v_name'];
$v_price = $_POST['v_price'];
$email = $_SESSION['email'];
$quantity = $_POST['$quantity'];

$sql = "INSERT INTO add_to_cart (v_name, v_price, email, quantity) VALUES ('$v_name', '$v_price', '$email', '$quantity')";

if (mysqli_query($conn, $sql)) {
   echo "Item added successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
