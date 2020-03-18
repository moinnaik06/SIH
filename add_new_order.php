<?php
session_start();
$order_id = $_GET['order_id'];
include 'dbcon.php';
$sql = "SELECT * FROM customer_order_details WHERE order_id = '$order_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$courier_email = $_SESSION['email'];
$customer_id = $row['customer_id'];
$vegetable_list = $row['vegetable_list'];
$total_quantity = $row['total_quantity'];
$grand_total = $row['grand_total'];
$delivery_address = $row['delivery_address'];

$sql1 = "SELECT * FROM customer_signup WHERE customer_id = '$customer_id'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);

$customer_email = $row1['email'];
echo "$customer_email";
$country_code = $row1['country_code'];
$phone = $row1['phone'];
$customer_phone = $country_code." ".$phone;

$sql2 = "INSERT INTO courier_pending_orders(courier_email,order_id,customer_id,customer_phone, vegetable_list, total_quantity, grand_total, delivery_address) VALUES('$courier_email' , '$order_id' , '$customer_id' , '$customer_phone' , '$vegetable_list' , '$total_quantity' , '$grand_total' , '$delivery_address')";
mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM courier_login WHERE email = '$courier_email' ";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3);
$courier_id = $row3[courier_id];
$verification_code = rand(100000000, 999999999);

$sql4 = "INSERT INTO orders_in_process(order_id,courier_id,customer_id,verification_code) VALUES ('$order_id' , '$courier_id' , '$customer_id' , '$verification_code')";
mysqli_query($conn, $sql4);

require("phpmailer/class.PHPMailer.php");
require("phpmailer/class.SMTP.php");
require("phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->CharSet="UTF-8";
$mail->SMTPDebug = 0; //debugging: 0 = to remove 1 = errors and messages, 2 = messages only
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";

$mail->IsHTML(true);

$mail->SMTPAuth = true; // authentication enabled
$mail->Port = 465; // or 587
    
$content =	nl2br("Heyy, \r\n").
			nl2br("Your Verification Code is :".$verification_code."\r\n").
    		nl2br("For Order ID :".$order_id."\r\n").
    		nl2br("Please present this verification code when asked by our courier service");


$mail->Username = "qwerty.sih2020@gmail.com";
$mail->Password = "QWERTY@sih2020";
$mail->SetFrom("qwerty.sih2020@gmail.com");
$mail->Subject = "Verification Code for Order ID :".$order_id;
$mail->Body = "$content";
$mail->AddAddress("$customer_email");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: courier_dashboard.php');
}


?>