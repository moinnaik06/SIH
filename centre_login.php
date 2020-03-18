<?php
session_start();
$count = 0;
include 'dbcon.php';
// include 'farmer_dashboard.php';

$login_id = $_POST['login_id'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM centre_login WHERE login_id = '$login_id' AND pass = '$pass'";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
  echo '<script>alert("Login Successful")</script>';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $_SESSION['name'] = $_POST['login_id'];
          if($_SESSION['name']) {
              header('location: center_farmer_details.php');
          }
      }
}else
{
  echo '<script>alert("Login Unsuccessful")</script>';
}
?>