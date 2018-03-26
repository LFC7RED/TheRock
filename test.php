<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- this is telling the code where it will find the style sheet -->
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- this is tell the code where to find the css files-->
    <link href="css/myStylesheet.css" rel="stylesheet">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    
    <!-- Navbar goes here -->
    <!-- Navbar goes here -->
    <!-- Page Layout here -->


    <ul class="side-nav yellow darken-3" id="mobile-demo">
        <li><a href="index.php">Home</a></li>
        <li><a href="acting.php">Acting</a></li>
        <li><a href="wrestling.php">Wrestling</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="socialMedia.php">Social Media</a></li>
		<li><a class = "right" href="create.php">Create Account</a></li>
		<li><a href="login.php">Log In</a></li>
    </ul>



    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper yellow darken-3">
                <!-- this is letting me know where the nav bar will be and what it says-->
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="acting.php">Acting</a></li>
                    <li><a href="wrestling.php">Wrestling</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="socialMedia.php">Social Media</a></li>
					<li><a href="login.php">Log in</a></li>
					<li><a href="create.php">Create Account</a></li>
                </ul>
            </div>
        </nav>
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
				
			<label data-error= "wrong" data-success="right"></label> 
					</select>
				</div>
		</div>
	
	<ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="myScript.js"></script>
</body>