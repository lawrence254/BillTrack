<?php
// include_once("config/db_Connect.php");
$host = 'localhost';
$db = 'bills';
$user = 'team';
$pass = 't5TQlrN3B39ufxGv';
$conn = new mysqli ($host,$user,$pass,$db);
$sql = "SELECT id, description, proposer, proposed_date, maturity_date, file FROM bill LIMIT 3";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title>Welcome </title>
</head>
<body>
  <div class="topnav">
    <!-- <ul> -->
    <img src="img/logoBeta.svg" alt="bill tacker logo" style="width: 100px; height: 50px;">
    <a href="#"> Main Page</a>
    <a href="current_bills.php">Current Bills</a>
    <a href="archives.php">Archives</a>
    <a href="search.php">Search</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <div class="container-fluid">
    <div class="cover">
      <div class="coverText">
        <img src="img/logoBeta.svg" alt="bill tacker logo" style="height: 100px; width:200px;">
        <h2>Track Parliament Bills</h2>
        <h4>Track every process</h4>
        <img src="img/Progress Bar.png" alt="progress bar" style="width:700px;">
      </div>
    </div>
    </div>
  <div id="us">
    <h1>About Us</h1>
    <p>We are a group of interested persons in the law making process.<br>We have created this site to enable all citizens to be able to follow the law making process of the parliament.<br>
    This would be achived by providing a platform that allows all citizens to view and track all the stages of the bill as it goes through the parliament.<br>
  It helps citizens to have a say in legislation that affects them.</p>
  </div>
  <div class="cards">
    <h2 class="text-center">Recent Bills Proposed in Parliament :</h2>
    <br>
      <div class="row">
        <?php while( $record = mysqli_fetch_assoc($resultset) ) {
          $loadID = $record['id'];

    $fileLink = $record['file'];
    echo "<div class='card-group col-md-4  id = 'card-size'>";
    echo "<div class='card dataCard'>";
    echo "<img class='card-img-top img-responsive' src='img/bill-tracker.jpg' alt='Leading'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$record['proposer'];"</h4>";
    echo "<p class='card-text'>".$record['description'];"</p>";
    // echo "<p class='card-text'>".$record['proposed_date'];"</p>";

    // $link = "download.php?filename=".$fileLink;
    $linked = "billname.php?id=".$loadID;
    echo "</div>";
    echo "<div class='card-footer text-muted'>Proposed on: ".$record['proposed_date'];
    // echo "<a class='btn btn-info'href='".$link."'>View Bill</a>";
     echo "<a class='btn btn-success cardButton'href='".$linked."'>View Bill</a>";
    echo "  </div>";
    echo "</div>";
    echo "</div>";
    ?>
    <?php } ?>
    </div>
    <a href="current_bills.php" class="btn">View More</a>
  </div>
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
