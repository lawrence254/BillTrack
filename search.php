<html>

<head>
  <title> Search | Bills </title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>

<body>
  <div class="topnav">
    <!-- <ul> -->
    <img src="img/logoBeta.svg" alt="bill tacker logo" style="width: 100px; height: 50px;">
    <a href="index.php"> Main Page</a>
    <a href="current_bills.php">Current Bills</a>
    <a href="archives.php">Archives</a>
    <a href="#">Search</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <div class="container-flex">
    <div class="sForm">
      <form action="search.php" id="searchForm" method="post">
      Enter A Search Term: <input type="text" name="search" placeholder=" Search here ... " />
        <input type="submit" value="Submit" />
      </form>
    </div>
  <?php
  //load database connection
  if (isset($_POST['search'])) {
      $host = "localhost";
      $user = "root";
      $password = "";
      $database_name = "bills";
      $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ));
  // Search from MySQL database table
  $search=$_POST['search'];
  $query = $pdo->prepare("SELECT * FROM bill WHERE `description` LIKE '%$search%' OR `proposer` LIKE '%$search%'");
  $query->bindValue(1, "%$search%", PDO::PARAM_STR);
  $query->execute();
  // Display search result
           if (!$query->rowCount() == 0) {
             $rows = $query->rowCount();
             echo "<div class='table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg'>";
             echo "<table class='table tableColor table-hover table-bordered'>";
             echo "<tr><td>Searching For: <span class='searchTerm'>".$search." (".$rows." Results)"."</span></td></tr>";
             echo "<tr><td>Brief Bill Description</td><td>Proposed By</td><td>Download</td></tr>";
             while ($results = $query->fetch()) {
               $link = "download.php?filename=".$results['file'];

            echo "<tr><td>".$results['description'];
            echo "</td><td>".$results['proposer'];
            echo "</td><td><a class='btn btn-success downloadBtn'href='".$link."'>Download The Bill</a>";
            echo "</td></tr>";
                   }
             echo "</table>";
             echo "</div>";
             } else {
                 echo 'Nothing found';
             }
           }
  ?>
</div>
</body>

</html>
