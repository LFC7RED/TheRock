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
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">FirstName</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">LastName</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="Confirm password" type="password" class="validate">
                            <label for="Confirm Password">ConfirmPassword</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="Dob" type="date" class="validate">
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="Please put a Valid email" data-success="Email Accepted">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Username" type="text" class="validate">
                        <label for="Username">Username</label>
                    </div>
                </div>
            </form>
        </div>
        <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
        </button>







    </body>
</html>