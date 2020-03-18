<?php 
session_start();
	include 'dbcon.php';
	$text = $_POST['name'];
	//echo "$text";
	$quantity = $_POST['quantity'];
	$qty = intval($quantity);
	$email = $_SESSION['email'];
	$sql1 = "SELECT * FROM vegetable WHERE v_name = '$text'";
	$result = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_array($result);
	$v_id = $row['v_id'];
	$v_name = $row['v_name'];
	$v_price = $row['v_price'];
	$price = intval($v_price);

	$total = $qty * $price;
	$total = strval($total);

	$sql2 = "INSERT INTO add_to_cart (email, v_name, v_price, quantity, total) VALUES( '$email' , '$v_name' , ' $v_price' , '$quantity' , '$total')";
	if(mysqli_query($conn, $sql2)){
        header('Location: /SIH2020/customer_dashboard.php');
        $order_id = uniqid(O);
		$_SESSION['order_id'] = $order_id;
	}else{
		echo "$text";
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>