<?php
// include_once("config/db_Connect.php");
$searchID=$_GET['id'];
$host = 'localhost';
$db = 'bills';
$user = 'team';
$pass = 't5TQlrN3B39ufxGv';
$conn = new mysqli ($host,$user,$pass,$db);
$sql = "SELECT description, proposer, proposed_date, maturity_date, file FROM bill WHERE id={$searchID} LIMIT 1";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$billDetails = mysqli_fetch_assoc($resultset);
?>
<!DOCTYPE html>
<html>

<head>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <div class="topnav">
    <img src="img/logoBeta.svg" alt="bill tacker logo" style="width: 100px; height: 50px;">
    <a href="#mainpage" class="active"> Main Page</a>
    <a href="#currentBills">Current Bills</a>
    <a href="#archives">Archives</a>
    <a href="#search">Search</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

  </div>
  <!-- <div class="container"> -->
  <div class="card cardDetail">
    <img src="img/bill-tracker.jpg" alt="Vector1" width="300px" height="300px">
    <h3>BILL NAME:<?php echo $billDetails['title']; ?></h3>
    <h5>Bill Proposed By: <?php echo $billDetails['proposer']; ?></h5>
    <h5>Bill Proposed On: <?php echo $billDetails['proposed_date']; ?></h5>
    <h5>Bill Will Mature On: <?php echo $billDetails['maturity_date']; ?></h5>

    <h4>Bill Description</h4>
    <p><?php echo $billDetails['description']; ?></p>

    <button type="submit" class="btn btn-success pull-right" name="download">Download PDF</button>
  </div>
  <!-- </div> -->
  <footer class="footer-distributed">

    <div class="footer-left">

      <img src="img/logoBeta.svg" alt="Company Logo" width="200px" height="100px">


      <div class="footer-icons">

        <a href="#"><img src="img/facebook.svg" alt="FaceBook" width="50px" height="50px"></a>

        <a href="#"><img src="img/twitter.svg" alt="Twitter" width="50px" height="50px"></a>

        <a href="#"><img src="img/instagram.svg" alt="Instagram" width="50px" height="50px"></a>


      </div>

    </div>


    <div class="footer-right">

      <p>Contact Us</p>

      <form action="#" method="post">

        <input type="text" name="email" placeholder="Email" />

        <textarea name="message" placeholder="Message"></textarea>

        <button>Send</button>


      </form>

    </div>


  </footer>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
