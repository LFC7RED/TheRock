<?php include("navigation.php") ?>
    <?php
include("config.php");
include("cart.php");
require_once("session.php");

?>
  <?php

		 $sql = " SELECT users.username
  		 FROM users
 		 INNER JOIN review
   		 ON users.userID = review.userID";
		$query = mysqli_query($conn, $sql) or die(	mysqli_error($conn)	);
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$username = $row["username"];
	}
		//selecting data from the blog data table
        $sql = "SELECT * FROM review ORDER BY rating ";
		//checking connnection
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		//declaring posts
        $posts = "";
        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $product_ID = $row['Product_ID'];
                $username = $row['username'];
                $review = $row['review'];
                $rating = $row['rating'];
			//tag checks
			$output = htmlspecialchars($content);
			$outputT = htmlspecialchars($title);
				//data format
                $posts .= "<div><h4>$username</h4><u><h2>$outputT</h2></u><p>$output</p><h5>$date</h5>
				<hr class=\"style-seven\">
				</div>";
            }
			//outputting data
            echo $posts;
        } else
		{
             echo "There are no results to display!";}
      ?>
	</div>
		  </div>
    <br />

	<div class="center">
    <a href="posting.php" class="waves-effect waves-light btn orange">Post</a>
	</div>

	<br />
	<br />
	<br />
	<br />
	<br />
	</div>