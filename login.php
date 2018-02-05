<!DOCTYPE html>

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
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="socialMedia.html">Social Media</a></li>
                    <li><a href= "login.html"> Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</head>

<body>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="user_name" type="text" class="validate">
                    <label for="user_name">User Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
        </form>
    </div>
    <button class="white-text color orange btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
   
    <button class="white-text color orange btn waves-effect waves-light" type="Create" name="action"><li><a href="create.html"> Create Account </a></li>
        <i class="material-icons right">send</i> 
  </button>

</body>
