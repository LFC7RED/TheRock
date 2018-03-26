<?php
//Helper Functions

function escape_string($string) {
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}

function redirect($location) 
{
	header("Location: $location ");
}

function query($sql)
{
    global $conn;
    return mysqli_query($conn, $sql);
}

function confirm($result) 
{

	if(!$result) 
	{
die("QUERY FAILED " . mysqli_error($conn));
    }


}
function fetch_array($result) {
    return mysqli_fetch_array($result);
}


function Shopcard()
{
	$query = query("select * FROM product");
		confirm($query);
	
	while ($row= fetch_array($query)) 
		
	{
		$product = <<<DELIMETER
		<div class=row>
		<div class="col m4">
            <div>
                <div class="card">
                    <div class="card large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{$row['product_IMG']}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{$row['product_Title']}<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">£{$row['product_Cost']} </a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{$row['product_Title']}<i class="material-icons right">close</i></span>
                            <p>{$row['product_Desc']} <br><br><br><br><br><br> <a class=" orange btn waves-effect waves-light" href="cart.php?add={$row['product_ID']}">Buy<i class="material-icons right"></i></a>
							<br><br> <a class=" orange btn waves-effect waves-light" href="review.php{$row['reviewID']}">Review<i class="material-icons right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


DELIMETER;
	    echo $product;
}
}
	
