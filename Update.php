<?php
$info = "";
include("session.php");
function displayUser($conn, $login_user) {
$sql = "SELECT username, password, firstName, lastName, email, Dob FROM users
WHERE userID = '$login_user' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
return $row;
}
function updateUser($conn, $login_user) {
$mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
$mypasswordConfirm = mysqli_real_escape_string($conn,$_POST["txtConfirmPassword"]);
$myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
$mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
 $mydob = mysqli_real_escape_string($conn,$_POST["txtDob"]); 
$myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
$sql = "UPDATE users SET firstname = '$myfirstname', lastname = '$mylastname', email =
'$myemail', password = '$mypassword', Dob = '$mydob', username = '$myusername' WHERE userID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
$info = "Updated User successfully ";
} else {
$info = "Error updating User: ". mysqli_error($conn);
}
return $info;
}

function deleteUser($conn, $login_user) {
$sql = "DELETE FROM users WHERE userID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
$info = "User deleted successfully";
header("Location: login.php");
} else {
$info = "Error deleting User: " . mysqli_error($conn);
}
return $info;
}
if(isset($_POST["update"])){
$info = updateUser($conn, $_SESSION["login_user"]);
$row = displayUser($conn, $_SESSION["login_user"]);
}
else if (isset($_POST["delete"])){
$info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
$row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);
?>
 <html>

    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <link href="css/myStylesheet.css" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="myScript.js"></script>
        <!-- Navbar goes here -->
        <ul class="side-nav yellow darken-3" id="mobile-demo">
            <li><a href="index.html">Home</a></li>
            <li><a href="acting.html">Acting</a></li>
            <li><a href="wrestling.html">Wrestling</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="socialMedia.html">Social Media</a></li>
        </ul>



        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper yellow darken-3">
                    <!-- this is letting me know where the nav bar will be and what it says-->
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="acting.html">Acting</a></li>
                        <li><a href="wrestling.html">Wrestling</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="socialMedia.html">Social Media</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </head>

    <body>
        <div class="row">
            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="txtFirstName" type="text" class="validate" value = "<?php echo $row["firstName"]?>" class = "box"/>
                    </div>
                    <div class="input-field col s6">
                        <input name="txtLastName" type="text" class="validate" value = "<?php
						echo $row["lastName"]?>" class = "box"/>
                        <label for="last_name">LastName</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="txtPassword" type="password" class="validate" value = "<?php
						echo $row["password"]?>" class = "box"/>
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                          <input name="txtConfirmPassword" type="password" class="validate"
							value = "<?php echo $row["password"]?>" class = "box"/>
                            <label for="Confirm Password">ConfirmPassword</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input Name="txtDob" type="date" class="validate" 
								   value = "<?php echo $row["Dob"]?>" class = "box"/>
                        </div>
                    </div> 
                    <div class="input-field col s12">
                        <input name="txtEmail" type="email" class="validate"
							   value = "<?php echo $row["email"]?>" class = "box"/>
                        <label for="email" data-error="Please put a Valid email" data-success="Email Accepted">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input Name="txtUsername" type="text" class="validate" value = "<?php echo $row["username"]?>" class = "box"/>
                        <label for="Username">Username</label>
                    </div>
                </div>
				        <button class="waves-effect waves-light btn" type="submit" name="update">Update</button>
				<button class="waves-effect waves-light btn red" type="submit" name="delete">Delete</button>
		<?php echo $info;?>
            </form>
        </div>




    </body>
</html>