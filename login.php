<?php
   include('config.php');
   session_start();
    $info = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
      $mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]); 
      
      $sql = "SELECT userID FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row["active"];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION["login_user"] = $row["userID"];
         
         header("location: shop.php");
      }else {
         $info = "Your Login Name or Password is invalid";
      }
   }
   mysqli_close($conn);
?>


<?php include("navigation.php") ?>

<body>
    <div class="row">
        <form method= "POST" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input name="txtUsername" type="text" class="validate">
                    <label for="user_name">User Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="txtPassword" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
    <button class="white-text color orange btn waves-effect waves-light" type="submit" name="send">Submit
    <i class="material-icons right">send</i>
  </button>
     
    <button class="white-text color orange btn waves-effect waves-light" type="Create" name="action"><li><a href="create.php"> Create Account </a></li>
        <i class="material-icons right">send</i> 
  </button>
			<br><br>
			<?php echo $info; ?>
</form>
    </div>
</body>
