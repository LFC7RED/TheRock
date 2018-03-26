<?php include("navigation.php") ?>
    <?php
include("config.php");
include("cart.php");
require_once("session.php");
?>


<!--HEADER-->
        <?php include("navbar.php") ?>


    <!--CONTENT-->
    <br><br>
   
<div class="container">
    
    <div class= "orange table table-striped grey-text text-lighten-5">
    
        <h3>Purchase</h3>
        
        
            <form action="">
                <table class="orange table table-striped grey-text text-lighten-5">

                    <thead>
                    <tr>
                       <th>Price</th>
                       <th>Product</th>
                       <th>Quantity</th>
                       <th>Sub-total</th>
                    </tr>

                    </thead>

                    <tbody>
                       <?php cart() ?>
                    </tbody>

                </table>
            </form>
        
        
<td><span class="amount"><?php isset($_SESSION['item_Quantity']) ? $_SESSION['item_Quantity'] : $_SESSION['item_Quantity'] = "0"; ?></span></td>
<td><strong><span class="amount"><?php isset($_SESSION['item_Total']) ? $_SESSION['item_Total'] : $_SESSION['item_Total'] = "0.00"; ?></span></strong> </td>       
        
    </div>
</div>
