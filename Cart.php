<?php require_once("config.php");
		require_once("session.php");
if(isset($_GET['add'])) {

    $query = query("SELECT * FROM product WHERE product_ID=" . escape_string($_GET['add']). " ");
    confirm($query);
        
    while ($row = fetch_array($query)) {

        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){
            
            $_SESSION['product_' . $_GET['add']]+=1;
            header("Location: purchase.php");
        }
        else {
            set_message("Sorry something went wrong try again later");
            header("Location: purchase.php");
        }
        
    }
    
}
if(isset($_GET["remove"])){
    
    
    $_SESSION['product_' . $_GET['remove']]--;
    
    if($_SESSION['product_' . $_GET['remove']] < 1) {
    unset($_SESSION['item_Total']);
    unset($_SESSION['item_quantity']);
    redirect("purchase.php");
    }
    
    else {
        redirect("purchase.php");
    }
    
}
if(isset($_GET['delete'])) {
        
    $_SESSION['product_' . $_GET['delete']]="0";
    
    unset($_SESSION['item_Total']);
    unset($_SESSION['item_quantity']);
    
    redirect("purchase.php");
}
function cart() {
    
    $total = 0;
    $item_quantity = 0;
    
    foreach ($_SESSION as $name => $value) {
        
    if($value > 0){
            
        if(substr($name, 0, 8) == "product_") {
            
            
            $length = strlen((int)$name - 8);
            
            $id = substr($name, 8, $length);
            
            
            $query = query("SELECT * FROM product WHERE product_ID = " . escape_string($id). "");
            confirm($query);
            while($row = fetch_array($query)) {
                
                $sub = $row['product_Cost']*$value;
                $item_quantity +=$value;
                $product = <<<DELIMETER
                <tr>
                <td>{$row['product_Title']}</td>
                <td>£{$row['product_Cost']}</td>
                <td>{$value}</td>
                <td>£{$sub}</td>
                <td><a href="cart.php?remove={$row['product_ID']}"class="btn light blue">Remove</a>
                <a href="cart.php?add={$row['product_ID']}" class="btn ">Add</a>
                <a href="cart.php?delete={$row['product_ID']}" class="btn black">Delete</a></td>
DELIMETER;
                echo $product;
                
                }
            
                $_SESSION['item_Total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            
            }
        }
    }
}
?>