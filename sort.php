<?php include("navigation.php") ?>
    <?php
include("config.php");
include("cart.php");
require_once("session.php");
?>
<table>
  <tr>
    <th><a href="sortname.php">Item Name</a></th>
    <th><a href="sort.php">Stock Level</a></th>

<?php
     $sql = "SELECT product_Title, product_Quantity FROM product ORDER BY product_Quantity desc";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<tr>" . "<td>" . $row["product_Title"]. "</td>" . "<td>" . $row["product_Quantity"]. "</td>";
         }
     } else {
         echo "0 results";
     }
     $conn->close();
     ?>
	    </tr>
</table>