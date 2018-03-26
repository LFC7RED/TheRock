<?php include("navigation.php"); ?>
<?php
include("config.php");
require_once("session.php"); ?>



<form action="review.php" method="post" enctype="multipart/form-data">
	<div class="container">
	<input placeholder="Title" name="title" type="text" autofocus size="48" required></input>

			<div class="input-field col s12">
				<select name="rating" required>
					<option value="" disabled selected> what rating would you give the product 1 - Poor 5- Excellent </option>
					<option value="1"> 1 </option>
					<option value="2"> 2 </option>
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5"> 5 </option>
				</select>
			<label data-error= "wrong" data-success="right"></label> 
				</div>
	
	<select name="rating">
		<option value="1"></option>
				<option value="2"></option>
		<option value="3"></option>

	</select>

	
	<div class="row">
        <div class="input-field col s12">
			Review
          <textarea id="textarea1" name="content" class="materialize-textarea" required> </textarea>

		<a href= "review.php"class="btn orange" name="post" type="submit" value="post"> post </a>
		<a href="review.php" class="waves-effect waves-light btn orange">Return to Review Page</a>
	</div>
		  </div>
		</div>
		  
	</div>
		</form>