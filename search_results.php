<?php
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "bills";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from bill WHERE `description` LIKE '%$search%' OR `proposer` LIKE '%$search%'  LIMIT 0 , 60");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "<div class='table-responsive-sm'>";
        echo "<table class='table'>";
        echo "</table>";
        echo "</div>";
				echo "<table style=\"font-family:arial;color:#333333;\">";
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Books</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Author</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Price</td></tr>";
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['description'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['proposer'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['file'];
				echo "</td></tr>";
            }
				echo "</table>";
        } else {
            echo 'Nothing found';
        }
?>
