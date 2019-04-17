<?php

session_start();

/*if(!isset($_SESSION['username']))
{
    header("location:index.php");
}*/

$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <!--Navbar-->
        <nav>
            <div class="nav-wrapper green">
                <?php echo"<a href='#' class='brand-logo'>{$username}'s Planner</a>"; ?>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="endsession.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container center aligned">
            <br>
            <br>
            
            <h3>Are You Sure That You Would Like To Delete Your Account</h3>
            <h4>THIS CAN NOT BE UNDONE</h4>
            
            <a href="taskview.php"><button class="waves-effect waves-light btn green">No</button></a>
            <a href="delaccount.php"><button class="waves-effect waves-light btn red">Yes</button></a>
            
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>