<?php
session_start();


include 'dbcon.php';


$vegetable_name = $_POST['vegetable_name'];
$quantity_available= $_POST['quantity_available'];
$del_type= $_POST['del_type'];
$farmer_id = $_SESSION['name'];

$sql = "INSERT INTO farmer_stock (farmer_id,vegetable_name,quantity_available,del_type) VALUES ('$farmer_id','$vegetable_name', '$quantity_available' , '$del_type')";

$result = mysqli_query($conn, $sql);
if(!$result)
{
  echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}
header("Location: dashboard.php");


?>
