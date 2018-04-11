<?php
// include_once("config/db_Connect.php");
$host = 'localhost';
$db = 'bills';
$user = 'team';
$pass = 't5TQlrN3B39ufxGv';
$conn = new mysqli ($host,$user,$pass,$db);
$sql = "SELECT id, description, proposer, proposed_date, maturity_date, file FROM bill";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
?>
<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/stylesheet.css">

    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>

    <script src="js/scripts.js" charset="utf-8"></script>

    <title>Current Bills</title>

  </head>

  <body>

    <!-- Navigation Bar -->

    <div class="topnav">

      <!-- <ul> -->

      <img src="img/logoBeta.svg" alt="bill tacker logo" style="width: 100px; height: 50px;">

      <a href="index.php" class="active"> Main Page</a>

      <a href="#">Current Bills</a>

      <a href="archives.php">Archives</a>

      <a href="search.php">Search</a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>

    <h2 class="text-center">Current Bills in Parliament</h2>

    <p class="text-center">These are the current Bills in Parliament</p>

    <!-- Cards -->

    <div class="container">

      <div class="row">
        <?php while( $record = mysqli_fetch_assoc($resultset) ) {
          $loadID = $record['id'];
    $fileLink = $record['file'];
    echo "<div class='card-group col-md-4 col-sm-12 col-xs-12'>";
    echo "<div class='card dataCard'>";
    echo "<img class='card-img-top img-responsive' src='http://beta.iopan.co.uk/articles/images/cards/leading.jpg' alt='Leading'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$record['proposer'];"</h4>";
    echo "<h6 class='card-text'>".$record['description'];"</h6>";
    // echo "<p class='card-text'>".$record['proposed_date'];"</p>";
    $link = "download.php?filename=".$fileLink;
    $linked = "billname.php?id=".$loadID;
    echo "</div>";
    echo "<div class='card-footer text-muted'>Proposed on: ".$record['proposed_date'];
    echo "<br><a class='btn btn-primary'href='".$linked."'>View Bill</a>";
    echo "<a class='btn btn-success downloadBtn'href='".$link."'>Download The Bill</a>";
    echo "  </div>";
    echo "</div>";
    echo "</div>";
    ?>
    <?php } ?>
      </div>

    </div>

    <!-- Footer Section -->

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

  </body>

</html>
