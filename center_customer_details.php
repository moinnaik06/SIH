<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Farm to Fridge-Farmer's End</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body class="goto-here" style="font: courier new">
    <div align="padding-left" id="google_translate_element"> </div>  
      
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
    <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><a href="tel:+91 9220592205"><span class="icon-phone2"></span></div>
                <span class="text">+91 7700027264</span></a>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><a href="mailto:qwerty.sih2020@email.com"><span class="icon-paper-plane"></span></div>
                <span class="text">qwerty.sih2020@email.com</span></a>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text">We want you to get the best price for your produce </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">FARM-TO-FORK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link"><b>Home</b></a></li>
            <li class="nav-item"><a href="center_farmer_details.php" class="nav-link"><b>Farmer Details</b></a></li>
            <li class="nav-item"><a href="center_customer_details.php" class="nav-link"><b>Customer Details</b></a></li>                        
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   <section class="ftco-section contact-section  ">
  <div class="container">
    <div class="row block-12 ">
      <div align="center" >
            <h4 align="center">Farmer Details</h4>
              <?php
               include 'dbcon.php';
               $sql = "SELECT * FROM customer_order_details";
               $result = mysqli_query($conn, $sql);
               echo "<table border='1' width='1000'>
                    <tr>
                      <td align='center'><br><b>Order_id</b><br></td>      
                      <td align='center'><br><b>Customer Id</b><br></td>
                      <td align='center'><br><b>Grand Total</b><br></td>
                      <td align='center'><br><b>Vegetable List</b><br></td>
                      <td align='center'><br><b>Total quantity</b><br></td>
                      <td align='center'><br><b>Delivery Address</b><br></td>
                      
                    </tr>" ;

               while($row = mysqli_fetch_array($result))
                      {
                     echo "<tr>";
                     echo "<td align='center' name='id'>" . $row['order_id'] . "</td>";
                     echo "<td align='center' name='vegetable'>" . $row['customer_id'] . "</td>";
                     echo "<td align='center' name='quantity'>" . $row['grand_total'] . "</td>";
                     echo "<td align='center' name='email'>" . $row['vegetable_list'] . "</td>";
                     echo "<td align='center' name='number'>" . $row['total_quantity'] . "</td>";
                     echo "<td align='center' name='state'>" . $row['delivery_address'] . "</td>";
                     



   
                              echo "</tr>";
                             }
                         echo "</table>";

  
                mysqli_close($conn);

            ?>

        </div>
        </div>
      </div>
    </section>

<footer class="ftco-footer ftco-section " >
    <div class="container">
      <div align="center">
        <p>Copyright @2020 Team Qwerty . All Rights Reserved.</p>
      </div>
    </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/Startup.js"></script>
    
  </body>
</html>