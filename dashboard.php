<?php session_start();
$farmer_id = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <style>
      <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;}

  .button5 {border-radius: 50%;}



table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}


    </style>
    <title>FARM-TO-FORK</title>
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
<body class="goto-here">
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
              <li>  
              <div align="center" class="white" style=" padding: 10px; height: auto;width: auto;">
              <i class="fa fa-user-circle-o" style="font-size:36px"></i><p>Farmer ID&nbsp:&nbsp<?php echo $_SESSION['name']; ?></p>
              <a href="farmer_session_logout.php">logout</a>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<section class="ftco-section contact-section" style="background-image: url(images/bgmg1.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
  <div class="container">
    <div class="row block-12 ">
      <div class="col-md-4  " >
            <h4 align="center">Current Price</h4>
              <?php
               include 'dbcon.php';
               $sql = "SELECT * FROM vegetable";
               $result = mysqli_query($conn, $sql);
               echo "<table border='1' width='1000' class='bg-light'>
                    <tr>
                      <td align='center'><br><b>Vegetable</b><br></td>
                      <td align='center'><br><b>Price</b><br></td>
                    </tr>" ;

               while($row = mysqli_fetch_array($result))
                      {
                     echo "<tr>";
                      echo "<td align='center' name='id'>" . $row['v_name'] . "</td>";
                        echo "<td align='center'>" . $row['v_price'] . "</td>";

                              echo "</tr>";
                             }
                         echo "</table>";


                mysqli_close($conn);

            ?>

        </div>


          <div class="col-md-4 order-md-last d-flex ">

              <form  action="stock_centre.php" class=" p-5 contact-form" method="post">
                <div align="center">
                <h4>Add to your Stock</h4>
              </div>
                <div class="form-group">
                <div align="center">
                <label><b> Vegetable </b></label>
                <select class="form-control" name="vegetable_name" id="vegetable" placeholder="Vegetable">
                  <option value="vegetable">Vegetable</option>
                    <option value="Apple Gourd">Apple Gourd</option>
                    <option value="Beans">Beans</option>
                    <option value="Beetroot">Beetroot</option>
                    <option value="Bitter Gourd">Bitter Gourd</option>
                    <option value="Bottle Gourd">Bottle Gourd</option>
                    <option value="Brinjal">Brinjal</option>
                    <option value="Broccoli">Broccoli</option>
                    <option value="Cabbage">Cabbage</option>
                    <option value="Carrot">Carrot</option>
                    <option value="Capsicum">Capsicum</option>
                    <option value="Cauliflower">Cauliflower</option>
                    <option value="Chilly">Chilly</option>
                    <option value="Corriander">Corriander</option>
                    <option value="cucumber">Cucumber</option>
                    <option value="Fenugreek">Fenugreek</option>
                    <option value="French Beans">French Beans</option>
                    <option value="Garlic">Garlic</option>
                    <option value="Ginger">Ginger</option>
                    <option value="Lady Finger">Lady Finger</option>
                    <option value="Lemon">Lemon</option>
                    <option value="Lettuce">Lettuce</option>
                    <option value="Mint">Mint</option>
                    <option value="Peas">Peas</option>
                    <option value="Potato">Potato</option>
                    <option value="Snake Gourd">Snake Gourd</option>
                    <option value="Spinach">Spinach</option>
                    <option value="Tomato">Tomato</option>

                </select>
                </div>
              </div>
              <div class="form-group">
                <div align="center">
                <label><b> Quantity </b></label>
                </div>
                <input type="text" name="quantity_available" class="form-control" placeholder="Quantity (in kg)" required="name">

              <div class="form-group">
              <div align="center">
                <label><b> Delivery to Center</b></label>
                <select class="form-control" name="del_type" id="delivery_option" placeholder="Vegetable">
                  <option value="NULL">Delivery to Center</option>
                  <option value="Trukee">Trukee</option>
                  <option value="Self">Self</option>
                </select>
              </div>
              </div>
              <div align="center" class="form-group">
                <input type="Submit" value="Submit"  class="btn btn-primary py-3 px-5" >
                <
              </div>
              </div>
                </div>


            </form>



          <div class="col-md-4 order-md-last d-flex ">
            <div align="center">
                <h4>Your stock</h4>
              <?php
               include 'dbcon.php';
               $farmer_id = $_SESSION['name'];
               $sql1 = "SELECT vegetable_name, quantity_available FROM farmer_stock WHERE farmer_id LIKE ('$farmer_id')";
               $result1 = mysqli_query($conn, $sql1);

               echo "<table border='1' width='1000' class='bg-light'>
                    <tr>
                      <td align='center'><br><b>Vegetable</b><br></td>
                      <td align='center'><br><b>Quantity</b><br></td>
                    </tr>" ;

               while($row = mysqli_fetch_array($result1))
                      {
                     echo "<tr>";
                      echo "<td align='center' name='id'>" . $row['vegetable_name'] . "</td>";
                        echo "<td align='center'>" . $row['quantity_available'] . "</td>";

                              echo "</tr>";
                             }
                         echo "</table>";


                mysqli_close($conn);

            ?>
              </div>

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
