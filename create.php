<?php
include("config.php");
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
$mypasswordConfirm = mysqli_real_escape_string($conn,$_POST["txtConfirmPassword"]);
$myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
$mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
$mydob = mysqli_real_escape_string($conn,$_POST["txtDob"]);
$myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
if ($mypassword == $mypasswordConfirm)
{
$sql = "INSERT INTO users (username, password, firstName, lastName, email, Dob)
VALUES ('$myusername', '$mypassword', '$myfirstname', '$mylastname', '$myemail', '$mydob')";
if (mysqli_query($conn, $sql)) {
$info = "User Created Successfully!";
} else {
$info ="Unable to Add User!";
}
}
else {
$info ="Passwords do not match!";
}
}
?>
   <?php include("navigation.php") ?>
    <body>
        <div class="row">
            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="txtFirstName" type="text" class="validate">
                        <label for="first_name">FirstName</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="txtlastName" type="text" class="validate">
                        <label for="last_name">LastName</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="txtPassword" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                          <input name="txtConfirmPassword" type="password" class="validate">
                            <label for="Confirm Password">ConfirmPassword</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input Name="txtDob" type="date" class="validate">
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input name="txtEmail" type="email" class="validate">
                        <label for="email" data-error="Please put a Valid email" data-success="Email Accepted">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input Name="txtUsername" type="text" class="validate">
                        <label for="Username">Username</label>
                    </div>
                </div>
				<div class="row">
			<div class = "input-field col s12">
				<select name= "rating" required>
					<option value= "" disabled selected> what rating would you give the product 1 - Poor 5- Excellent </option>
					<option value= "1"> 1 </option>
					<option value= "2"> 2 </option>
					<option value= "3"> 3 </option>
					<option value= "4"> 4 </option>
					<option value= "5"> 5 </option>
				</select>
			<label data-error= "wrong" data-success="right"></label> 
				</div>
		</div>
				        <button class="btn waves-effect waves-light right" type="submit" name="action" value="Submit">Submit
        <i class="material-icons right">send</i>
        </button>
		<?php echo $info;?>
            </form>
        </div>




    </body>
</html>