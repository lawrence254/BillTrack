<!DOCTYPE html>

<html>

<head>

  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">

  <link type="text/css" rel="stylesheet" href="css/styles.css">

  <meta charset="utf-8">

  <title>bill tracking</title>

</head>

<body>

  <div class="topnav">

    <!-- <ul> -->

    <img src="img/logoBeta.svg" alt="bill tacker logo" style="width: 100px; height: 50px;">

    <a href="#mainpage" class="active"> Main Page</a>

    <a href="#currentBills">Current Bills</a>

    <a href="#archives">Archives</a>

    <a href="#search">Search</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

  </div>

  <div class="container-fluid">

    <img src="img/logoBeta.svg" alt="bill tacker logo" style="height: 100px; width:200px;">

    <h2>Track Parliament Bills</h2>

    <h4>Track every process</h4>

    <img src="img/Progress Bar.png" alt="progress bar" style="width:700px;">

  </div>

  <div id="us">

    <h1>About Us</h1>

    <p>iuytfghjklkjhgfghjk</p>

  </div>

  <div id="search">

    <h2 style="padding-bottom:  2%;padding-top:  2%;">Search For A Current Bill</h2>

    <input type="text" class=""><br>

    <button class="btn btn-info" id="button">Search</button>

  </div>

  <div class="cards">

    <h2 class="text-center">Recent Bills Proposed in Parliament :</h2>

    <br>

    <div class="row">
      <div class="row">
        <?php while( $record = mysqli_fetch_assoc($resultset) ) {
    $fileLink = $record['file'];
    echo "<div class='col-md-4 col-sm-6'>";
    echo "<div class='card'>";
    echo "<img class='card-img-top img-responsive' src='http://beta.iopan.co.uk/articles/images/cards/leading.jpg' alt='Leading'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$record['proposer'];"</h4>";
    echo "<p class='card-text'>".$record['description'];"</p>";
    // echo "<p class='card-text'>".$record['proposed_date'];"</p>";
    $link = "download.php?filename=".$fileLink;
    echo "</div>";
    echo "<div class='card-footer text-muted'>Proposed on: ".$record['proposed_date'];
    echo "<p class='cardLink btn btn-info'><a href='".$link."'>View Bill</a></p>";
  echo "  </div>";
  echo "</div>";
echo "</div>";
?>
        <?php } ?>
      </div>
    </div>

    <button type="View" class="btn">View More</button>

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
